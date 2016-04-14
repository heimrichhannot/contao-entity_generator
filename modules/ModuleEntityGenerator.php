<?php

namespace HeimrichHannot\EntityGenerator;


use HeimrichHannot\HastePlus\Files;
use HeimrichHannot\HastePlus\Strings;

class ModuleEntityGenerator
{

	protected static $arrMultiColumnWizardFields = array(
		'sortingFields',
		'onLoadCallbacks',
		'onSubmitCallbacks',
		'headerFields',
		'globalOperations',
		'operations'
	);

	public static function generate()
	{
		if (($objEntityTemplate = EntityTemplateModel::findByPk(\Input::get('id'))) !== null)
		{
			if ($objEntityTemplate->outputDir)
				$objFolder = Files::getFolderFromUuid($objEntityTemplate->outputDir);
			else
				$objFolder = new \Folder('files', true);

			// output dir
			if (!$objFolder)
			{
				\Message::addError($GLOBALS['TL_LANG']['MSC']['entity_generator']['outputDirNotFound']);
				static::redirectToList();
			}

			static::prepareData($objEntityTemplate);

			// create module folder in output dir if not existing
			$objTargetDir = new \Folder($objFolder->path . '/' . $objEntityTemplate->moduleName);
			$strTargetDir = $objTargetDir->path;

			// assets
			$objEntityTemplate->addAssets = deserialize($objEntityTemplate->addAssets, true);

			if (!empty($objEntityTemplate->addAssets))
			{
				new \Folder($strTargetDir . '/assets');

				foreach ($objEntityTemplate->addAssets as $strType)
				{
					if ($strType == 'htaccess')
					{
						copy(
							TL_ROOT . '/system/modules/entity_generator/templates/assets/htaccess.html5',
							TL_ROOT . '/' . $strTargetDir . '/assets/.htaccess'
						);
					}
					else
						new \Folder($strTargetDir . '/assets/' . $strType);
				}

				\Message::addConfirmation(sprintf($GLOBALS['TL_LANG']['MSC']['entity_generator']['assetsSuccessfullyGenerated'], $strTargetDir . '/assets/'));
			}

			// config
			$objDcaEntityTemplates = static::getLinkedDcas($objEntityTemplate->id);

			if ($objEntityTemplate->addConfig)
			{
				$arrData = array();
				$blnAddUserPermissions = false;

				if ($objEntityTemplate->addDcas)
				{

					foreach ($objDcaEntityTemplates as $objDcaEntityTemplate)
					{
						if ($objDcaEntityTemplate->addModel)
						{
							$arrData[$objDcaEntityTemplate->dcaName] = $objDcaEntityTemplate->entityClassName;
						}

						if ($objDcaEntityTemplate->addUserPermissions)
							$blnAddUserPermissions = true;
					}
				}

				$strTargetFile = $strTargetDir . '/config/config.php';
				static::parseTemplate($objEntityTemplate->configTemplate, $objEntityTemplate, $strTargetFile, array(
					'modelClasses' => $arrData,
					'addUserPermissions' => $blnAddUserPermissions
				));

				// modules lang
				if ($objEntityTemplate->addBackendModule)
				{
					$strTargetFile = $strTargetDir . '/languages/de/modules.php';
					$arrData = array();

					if ($objEntityTemplate->addDcas)
					{
						foreach (deserialize($objEntityTemplate->dcas) as $intId)
						{
							if (($objDcaEntityTemplate = EntityTemplateModel::findByPk($intId)) !== null)
							{
								$arrData[$objDcaEntityTemplate->dcaName] = $objDcaEntityTemplate->localizedEntityNamePlural;
							}
						}
					}

					static::parseTemplate($objEntityTemplate->modulesLangTemplate, $objEntityTemplate, $strTargetFile, array(
						'dcaLocalizations' => $arrData
					));
				}
			}

			// dca
			if ($objEntityTemplate->addDcas)
			{
				foreach ($objDcaEntityTemplates as $objDcaEntityTemplate)
				{
					static::prepareData($objDcaEntityTemplate);

					// dca
					$strTargetFile = $strTargetDir . '/dca/tl_' . $objDcaEntityTemplate->dcaName . '.php';
					static::parseTemplate($objDcaEntityTemplate->dcaTemplate, $objDcaEntityTemplate, $strTargetFile);

					// user permissions
					if ($objDcaEntityTemplate->addUserPermissions)
					{
						// tl_user - dca
						$strTargetFile = $strTargetDir . '/dca/tl_user.php';
						static::parseTemplate($objDcaEntityTemplate->userTemplate, $objDcaEntityTemplate, $strTargetFile);

						// tl_user_group - dca
						$strTargetFile = $strTargetDir . '/dca/tl_user_group.php';
						static::parseTemplate($objDcaEntityTemplate->userGroupTemplate, $objDcaEntityTemplate, $strTargetFile);

						// tl_user - language
						$strTargetFile = $strTargetDir . '/languages/de/tl_user.php';
						static::parseTemplate($objDcaEntityTemplate->userLanguageTemplate, $objDcaEntityTemplate, $strTargetFile);

						// tl_user_group - language
						$strTargetFile = $strTargetDir . '/languages/de/tl_user_group.php';
						static::parseTemplate($objDcaEntityTemplate->userGroupLanguageTemplate, $objDcaEntityTemplate, $strTargetFile);
					}

					// languages
					if ($objDcaEntityTemplate->addLanguages)
					{
						$strTargetFile = $strTargetDir . '/languages/de/tl_' . $objDcaEntityTemplate->dcaName . '.php';
						static::parseTemplate($objDcaEntityTemplate->dcaLangTemplate, $objDcaEntityTemplate, $strTargetFile);
					}

					// models
					if ($objDcaEntityTemplate->addModel)
					{
						$strTargetFile = $strTargetDir . '/models/' . $objDcaEntityTemplate->entityClassName . 'Model.php';
						static::parseTemplate($objDcaEntityTemplate->modelTemplate, $objDcaEntityTemplate, $strTargetFile);
					}
				}
			}
		}

		static::redirectToList();
	}

	public static function getLinkedDcas($intTemplate, array $arrDcas = array())
	{
		if (($objEntityTemplate = EntityTemplateModel::findByPk($intTemplate)) !== null)
		{
			if ($objEntityTemplate->type == 'module' && $objEntityTemplate->addDcas)
			{
				foreach (deserialize($objEntityTemplate->dcas, true) as $intId)
				{
					$arrDcas += static::getLinkedDcas($intId, $arrDcas);
				}
			}

			if ($objEntityTemplate->type == 'dca')
			{
				if (!in_array($objEntityTemplate, $arrDcas))
					$arrDcas[] = $objEntityTemplate;

				if ($objEntityTemplate->addParentDca)
					$arrDcas += static::getLinkedDcas($objEntityTemplate->parentDca, $arrDcas);
			}
		}

		return $arrDcas;
	}

	protected static function prepareData($objEntityTemplate)
	{
		if ($objEntityTemplate->addParentDca)
		{
			if (($objParent = EntityTemplateModel::findByPk($objEntityTemplate->parentDca)) !== null)
			{
				$objEntityTemplate->parentDcaName = $objParent->dcaName;
			}
		}

		// multicolumnwizard fields
		foreach (static::$arrMultiColumnWizardFields as $strField)
		{
			$objEntityTemplate->{$strField} = deserialize($objEntityTemplate->{$strField}, true);
			$objEntityTemplate->{$strField} = static::transformSingleDimensionalMcwArrays($strField, $objEntityTemplate->{$strField});
		}

		// publish
		if ($objEntityTemplate->addPublish && !in_array('toggle', $objEntityTemplate->operations))
		{
			$objEntityTemplate->operations = array_merge($objEntityTemplate->operations, array('toggle'));
		}
	}

	protected static function transformSingleDimensionalMcwArrays($strField, $arrData)
	{
		$arrColumnFields = $GLOBALS['TL_DCA']['tl_entity_template']['fields'][$strField]['eval']['columnFields'];

		if (count($arrColumnFields) > 1)
			return $arrData;

		$arrResult = array();
		foreach ($arrData as $arrItem)
			$arrResult[] = $arrItem[array_keys($arrColumnFields)[0]];

		return $arrResult;
	}

	protected static function redirectToList()
	{
		\Controller::redirect('contao/main.php?do=entity_generator');
	}

	protected static function parseTemplate($strTemplate, $objEntityTemplate, $strTargetFile, array $arrData = array())
	{
		if (!$strTemplate)
			return;

		$objTemplate = new \BackendTemplate($strTemplate);

		$objTemplate->setData($arrData + $objEntityTemplate->row());

		$strResult = $objTemplate->parse();

		if ($strResult)
		{
			new \Folder(Files::getPathWithoutFilename($strTargetFile));

			if (file_put_contents(TL_ROOT . '/' . $strTargetFile, '<?php' . "\n\n" . $strResult) !== false)
				\Message::addConfirmation(sprintf($GLOBALS['TL_LANG']['MSC']['entity_generator']['fileSuccessfullyGenerated'], $strTargetFile));
		}
	}

}
