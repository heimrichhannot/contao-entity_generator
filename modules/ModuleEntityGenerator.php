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
			if ($objEntityTemplate->addConfig)
			{
				$strTargetFile = $strTargetDir . '/config/config.php';
				static::parseTemplate($objEntityTemplate->configTemplate, $objEntityTemplate, $strTargetFile);
			}

			// dca
			if ($objEntityTemplate->addDca)
			{
				$strTargetFile = $strTargetDir . '/dca/tl_' . $objEntityTemplate->dcaName . '.php';
				static::parseTemplate($objEntityTemplate->dcaTemplate, $objEntityTemplate, $strTargetFile);
			}

			// languages
			if ($objEntityTemplate->addLanguages)
			{
				// modules
				if ($objEntityTemplate->addConfig && $objEntityTemplate->addBackendModule)
				{
					$strTargetFile = $strTargetDir . '/languages/de/modules.php';
					static::parseTemplate($objEntityTemplate->modulesLangTemplate, $objEntityTemplate, $strTargetFile);
				}

				// dca
				$strTargetFile = $strTargetDir . '/languages/de/tl_' . $objEntityTemplate->dcaName . '.php';
				static::parseTemplate($objEntityTemplate->dcaLangTemplate, $objEntityTemplate, $strTargetFile);
			}

			// models
			if ($objEntityTemplate->addDca)
			{
				$strTargetFile = $strTargetDir . '/models/' . $objEntityTemplate->entityClassName . 'Model.php';
				static::parseTemplate($objEntityTemplate->modelTemplate, $objEntityTemplate, $strTargetFile);
			}
		}

		static::redirectToList();
	}

	protected static function prepareData($objEntityTemplate)
	{
		$objEntityTemplate->entityClassName = ucfirst(Strings::underscoreToCamelCase($objEntityTemplate->dcaName));

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

	protected static function parseTemplate($strTemplate, $objEntityTemplate, $strTargetFile)
	{
		if (!$strTemplate)
			return;

		$objTemplate = new \BackendTemplate($strTemplate);

		$objTemplate->setData($objEntityTemplate->row());

		$strResult = $objTemplate->parse();

		if ($strResult)
		{
			new \Folder(Files::getPathWithoutFilename($strTargetFile));

			if (file_put_contents(TL_ROOT . '/' . $strTargetFile, '<?php' . "\n\n" . $strResult) !== false)
				\Message::addConfirmation(sprintf($GLOBALS['TL_LANG']['MSC']['entity_generator']['fileSuccessfullyGenerated'], $strTargetFile));
		}
	}

}
