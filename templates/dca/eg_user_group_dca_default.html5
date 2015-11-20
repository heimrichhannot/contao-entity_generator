<?php

$GLOBALS['TL_DCA']['tl_competition_submission_archive'] = array
(
	// Config
	'config'   => array
	(
		'dataContainer'    => 'Table',
		'ctable'           => array('tl_competition_submission'),
		'switchToEdit'     => true,
		'enableVersioning' => false,
		'onload_callback' => array
		(
			array('tl_competition_submission_archive', 'checkPermission'),
			array('tl_competition_submission_archive', 'modifyPalette'),
		),
		'sql' => array
		(
			'keys' => array
			(
				'id' => 'primary'
			)
		)
	),

	// List
	'list'     => array
	(
		'sorting'           => array
		(
			'mode'        => 1,
			'fields'      => array('title'),
			'flag'        => 1,
			'panelLayout' => 'search,limit'
		),
		'label'             => array
		(
			'fields' => array('title'),
			'format' => '%s'
		),
		'global_operations' => array
		(
			'all' => array
			(
				'label'      => &$GLOBALS['TL_LANG']['MSC']['all'],
				'href'       => 'act=select',
				'class'      => 'header_edit_all',
				'attributes' => 'onclick="Backend.getScrollOffset();"'
			)
		),
		'operations'        => array
		(
			'edit'       => array
			(
				'label' => &$GLOBALS['TL_LANG']['tl_competition_submission_archive']['edit'],
				'href'  => 'table=tl_competition_submission',
				'icon'  => 'edit.gif'
			),
			'editheader' => array
			(
				'label'           => &$GLOBALS['TL_LANG']['tl_competition_submission_archive']['editheader'],
				'href'            => 'act=edit',
				'icon'            => 'header.gif',
				'button_callback' => array('tl_competition_submission_archive', 'editHeader'),
				'attributes'      => 'class="edit-header"'
			),
			'copy'       => array
			(
				'label' => &$GLOBALS['TL_LANG']['tl_competition_submission_archive']['copy'],
				'href'  => 'act=copy',
				'icon'  => 'copy.gif'
			),
			'delete'     => array
			(
				'label'      => &$GLOBALS['TL_LANG']['tl_competition_submission_archive']['delete'],
				'href'       => 'act=delete',
				'icon'       => 'delete.gif',
				'attributes' => 'onclick="if(!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm']
					. '\'))return false;Backend.getScrollOffset()"'
			),
			'show'       => array
			(
				'label' => &$GLOBALS['TL_LANG']['tl_competition_submission_archive']['show'],
				'href'  => 'act=show',
				'icon'  => 'show.gif'
			),
			'export'     => array
			(
				'label' => &$GLOBALS['TL_LANG']['tl_competition_submission_archive']['export'],
				'href'  => 'table=tl_competition_submission&key=export',
				'icon'  => 'export.gif'
			)
		)
	),

	// Palettes
	'palettes' => array
	(
		'__selector__' => array('addPdfExport', 'addPdfCover'),
		'default' => 'title,memberGroups,addPdfExport;'
	),

	// Subpalettes
	'subpalettes' => array(
		'addPdfCover' => 'pdfCoverBackground,pdfCoverTemplate;'
	),

	// Fields
	'fields'   => array
	(
		'id' => array
		(
			'sql'                     => "int(10) unsigned NOT NULL auto_increment"
		),
		'tstamp' => array
		(
			'sql'                     => "int(10) unsigned NOT NULL default '0'"
		),
		'title' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_competition_submission_archive']['title'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'maxlength'=>255, 'tl_class' => 'w50'),
			'sql'                     => "varchar(255) NOT NULL default ''"
		),
		'memberGroups' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_competition_submission_archive']['memberGroups'],
			'exclude'                 => true,
			'inputType'               => 'select',
			'foreignKey'              => 'tl_member_group.name',
			'eval'                    => array(
				'tl_class' => 'w50',
				'chosen' => true,
				'multiple' => true,
				'includeBlankOption' => true
			),
			'sql'                     => "blob NULL",
			'relation'                => array('type'=>'belongsToMany', 'load'=>'lazy')
		),

		// export
		'addPdfExport' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_competition_submission_archive']['addPdfExport'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'					  => array(
				'submitOnChange' => true,
				'doNotCopy' => true,
				'tl_class' => 'long clr'),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'addPdfCover' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_competition_submission_archive']['addPdfCover'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'					  => array(
				'submitOnChange' => true,
				'doNotCopy' => true,
				'tl_class' => 'long clr'),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'pdfCoverBackground' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_competition_submission_archive']['pdfCoverBackground'],
			'inputType'               => 'fileTree',
			'exclude'                 => true,
			'eval'                    => array(
				'filesOnly' => true,
				'extensions' => 'pdf',
				'fieldType' => 'radio',
				'tl_class' => 'w50'),
			'sql'                     => "binary(16) NULL"
		),

		'pdfCoverTemplate' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_competition_submission_archive']['pdfCoverTemplate'],
			'exclude'          => true,
			'inputType'        => 'select',
			'options_callback' => array('tl_competition_submission_archive', 'getCompetitionPdfTemplates'),
			'eval'             => array(
				'tl_class' => 'w50',
				'includeBlankOption' => true
			),
			'sql'              => "varchar(255) NOT NULL default ''"
		),
		'pdfBackground' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_competition_submission_archive']['pdfBackground'],
			'inputType'               => 'fileTree',
			'exclude'                 => true,
			'eval'                    => array(
				'filesOnly' => true,
				'extensions' => 'pdf',
				'fieldType' => 'radio',
				'tl_class' => 'w50'),
			'sql'                     => "binary(16) NULL"
		),
		'pdfTemplate' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_competition_submission_archive']['pdfTemplate'],
			'exclude'          => true,
			'inputType'        => 'select',
			'options_callback' => array('tl_competition_submission_archive', 'getCompetitionPdfTemplates'),
			'eval'             => array(
				'tl_class' => 'w50',
				'includeBlankOption' => true
			),
			'sql'              => "varchar(255) NOT NULL default ''"
		),
		'pdfFonts' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_competition_submission_archive']['pdfFonts'],
			'inputType'               => 'fileTree',
			'exclude'                 => true,
			'eval'                    => array(
				'filesOnly' => true,
				'extensions' => 'ttf',
				'fieldType' => 'checkbox',
				'multiple' => true,
				'tl_class' => 'w50 clr'),
			'sql'                     => "blob NULL"
		),
		'pdfMargins' => array
		(
			'label' => &$GLOBALS['TL_LANG']['tl_competition_submission_archive']['pdfMargins'],
			'exclude' => true,
			'inputType' => 'trbl',
			'options' => array('pt', 'in', 'cm', 'mm'),
			'eval' => array('includeBlankOption'=>true, 'tl_class'=>'w50'),
			'sql' => "varchar(128) NOT NULL default ''"
		),

		'pdfExportFileNamePrefix' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_competition_submission_archive']['pdfExportFileNamePrefix'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>50, 'tl_class' => 'w50'),
			'sql'                     => "varchar(50) NOT NULL default ''"
		),
		'pdfExportDir' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_competition_submission_archive']['pdfExportDir'],
			'exclude'                 => true,
			'inputType'               => 'fileTree',
			'eval'                    => array('fieldType'=>'radio', 'mandatory' => true, 'tl_class'=>'w50'),
			'sql'                     => "binary(16) NULL"
		),
		'pdfExportUseHomeDir' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_competition_submission_archive']['pdfExportUseHomeDir'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'					  => array('tl_class' => 'w50'),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'pdfExportFileTitle' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_competition_submission_archive']['pdfExportFileTitle'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>50, 'tl_class' => 'w50'),
			'sql'                     => "varchar(50) NOT NULL default ''"
		),
		'pdfExportFileSubject' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_competition_submission_archive']['pdfExportFileSubject'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>255, 'tl_class' => 'w50'),
			'sql'                     => "varchar(255) NOT NULL default ''"
		),
		'pdfExportFileCreator' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_competition_submission_archive']['pdfExportFileCreator'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>100, 'tl_class' => 'w50'),
			'sql'                     => "varchar(100) NOT NULL default ''"
		),

		'pdfSkipLabels' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_competition_submission_archive']['pdfSkipLabels'],
			'exclude'			=> true,
			'inputType'			=> 'checkbox',
			'options_callback'  => array('tl_competition_submission_archive', 'getExportableSubmissionFields'),
			'eval'              => array(
				'multiple' => true,
				'tl_class' => 'long clr'),
			'sql'               => "blob NULL"
		),
		'pdfExportFields' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_competition_submission_archive']['pdfExportFields'],
			'exclude'			=> true,
			'inputType'			=> 'checkboxWizard',
			'options_callback'  => array('tl_competition_submission_archive', 'getExportableSubmissionFields'),
			'eval'              => array(
				'multiple' => true,
				'tl_class' => 'long clr'),
			'sql'               => "blob NULL"
		),

		'pdfSkipLabelsForJudges' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_competition_submission_archive']['pdfSkipLabelsForJudges'],
			'exclude'			=> true,
			'inputType'			=> 'checkbox',
			'options_callback'  => array('tl_competition_submission_archive', 'getExportableSubmissionFields'),
			'eval'              => array(
				'multiple' => true,
				'tl_class' => 'long clr'),
			'sql'               => "blob NULL"
		),
		'pdfExportFieldsForJudges' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_competition_submission_archive']['pdfExportFieldsForJudges'],
			'exclude'			=> true,
			'inputType'			=> 'checkboxWizard',
			'options_callback'  => array('tl_competition_submission_archive', 'getExportableSubmissionFields'),
			'eval'              => array(
				'multiple' => true,
				'tl_class' => 'long clr'),
			'sql'               => "blob NULL"
		)
	)
);

$arrDca = &$GLOBALS['TL_DCA']['tl_competition_submission_archive'];

$arrDca['grouppalettes']['pdfExport'] = '{cover_legend:hide},addPdfCover;
		{config_legend:hide},pdfBackground,pdfTemplate,pdfFonts,pdfMargins;
		{exportFile_legend},pdfExportFileNamePrefix,pdfExportDir,pdfExportUseHomeDir,pdfExportFileTitle,pdfExportFileSubject,pdfExportFileCreator;
		{exportForApplicant_legend:hide},pdfSkipLabels,pdfExportFields;
		{exportForJudges_legend:hide},pdfSkipLabelsForJudges,pdfExportFieldsForJudges';

if (in_array('protected_homedirs', \ModuleLoader::getActive()))
{
	$arrDca['grouppalettes']['pdfExport'] = str_replace('pdfExportUseHomeDir',
		'pdfExportUseHomeDir,pdfExportUseProtectedHomeDir', $arrDca['grouppalettes']['pdfExport']);

	$arrDca['fields']['pdfExportUseProtectedHomeDir'] = array
	(
		'label'                   => &$GLOBALS['TL_LANG']['tl_competition_submission_archive']['pdfExportUseProtectedHomeDir'],
		'exclude'                 => true,
		'inputType'               => 'checkbox',
		'eval'					  => array('tl_class' => 'w50'),
		'sql'                     => "char(1) NOT NULL default ''"
	);
}

$arrDca['palettes']['default'] .= $arrDca['grouppalettes']['pdfExport'];

class tl_competition_submission_archive extends \Backend
{
	public function getExportableSubmissionFields()
	{
		$return = array();
		$arrExcludedFields = array('id','pid','tstamp','mid','allowedJids','dateAdded','disable');
		$arrExcludedInputTypes = array('fileTree');

		$this->loadDataContainer('tl_competition_submission');

		foreach($GLOBALS['TL_DCA']['tl_competition_submission']['fields'] as $k=>$v)
		{
			if(!in_array($k, $arrExcludedFields) && !in_array($v['inputType'], $arrExcludedInputTypes))
			{
				$return[$k] = $k;
			}
		}

		return $return;
	}


	public function getCompetitionPdfTemplates()
	{
		return $this->getTemplateGroup('pdf_competition_');
	}


	public function checkPermission()
	{
		$objUser = \BackendUser::getInstance();
		$objSession = \Session::getInstance();
		$objDatabase = \Database::getInstance();

		if ($objUser->isAdmin)
		{
			return;
		}

		// Set root IDs
		if (!is_array($objUser->competition_submissions) || empty($objUser->competition_submissions))
		{
			$root = array(0);
		}
		else
		{
			$root = $objUser->competition_submissions;
		}

		$GLOBALS['TL_DCA']['tl_competition_review_archive']['list']['sorting']['root'] = $root;

		// Check permissions to add archives
		if (!$objUser->hasAccess('create', 'competition_submissionp'))
		{
			$GLOBALS['TL_DCA']['tl_competition_review_archive']['config']['closed'] = true;
		}

		// Check current action
		switch (Input::get('act'))
		{
			case 'create':
			case 'select':
				// Allow
				break;

			case 'edit':
				// Dynamically add the record to the user profile
				if (!in_array(Input::get('id'), $root))
				{
					$arrNew = $objSession->get('new_records');

					if (is_array($arrNew['tl_competition_review_archive']) && in_array(Input::get('id'), $arrNew['tl_competition_review_archive']))
					{
						// Add permissions on user level
						if ($objUser->inherit == 'custom' || !$objUser->groups[0])
						{
							$objUser = $objDatabase->prepare("SELECT competition_submissions, competition_submissionp FROM tl_user WHERE id=?")
								->limit(1)
								->execute($objUser->id);

							$arrcompetition_submissionp = deserialize($objUser->competition_submissionp);

							if (is_array($arrcompetition_submissionp) && in_array('create', $arrcompetition_submissionp))
							{
								$arrcompetition_submissions = deserialize($objUser->competition_submissions);
								$arrcompetition_submissions[] = Input::get('id');

								$objDatabase->prepare("UPDATE tl_user SET competition_submissions=? WHERE id=?")
									->execute(serialize($arrcompetition_submissions), $objUser->id);
							}
						}

						// Add permissions on group level
						elseif ($objUser->groups[0] > 0)
						{
							$objGroup = $objDatabase->prepare("SELECT competition_submissions, competition_submissionp FROM tl_user_group WHERE id=?")
								->limit(1)
								->execute($objUser->groups[0]);

							$arrcompetition_submissionp = deserialize($objGroup->competition_submissionp);

							if (is_array($arrcompetition_submissionp) && in_array('create', $arrcompetition_submissionp))
							{
								$arrcompetition_submissions = deserialize($objGroup->competition_submissions);
								$arrcompetition_submissions[] = Input::get('id');

								$objDatabase->prepare("UPDATE tl_user_group SET competition_submissions=? WHERE id=?")
									->execute(serialize($arrcompetition_submissions), $objUser->groups[0]);
							}
						}

						// Add new element to the user object
						$root[] = Input::get('id');
						$objUser->competition_submissions = $root;
					}
				}
			// No break;

			case 'copy':
			case 'delete':
			case 'show':
				if (!in_array(Input::get('id'), $root) || (Input::get('act') == 'delete' && !$objUser->hasAccess('delete', 'competition_submissionp')))
				{
					\Controller::log('Not enough permissions to '.Input::get('act').' competition_submissions archive ID "'.Input::get('id').'"', 'tl_competition_review_archive checkPermission', TL_ERROR);
					\Controller::redirect('contao/main.php?act=error');
				}
				break;

			case 'editAll':
			case 'deleteAll':
			case 'overrideAll':
				$session = $objSession->getData();
				if (Input::get('act') == 'deleteAll' && !$objUser->hasAccess('delete', 'competition_submissionp'))
				{
					$session['CURRENT']['IDS'] = array();
				}
				else
				{
					$session['CURRENT']['IDS'] = array_intersect($session['CURRENT']['IDS'], $root);
				}
				$objSession->setData($session);
				break;

			default:
				if (strlen(Input::get('act')))
				{
					\Controller::log('Not enough permissions to '.Input::get('act').' submission archives', 'tl_competition_review_archive checkPermission', TL_ERROR);
					\Controller::redirect('contao/main.php?act=error');
				}
				break;
		}
	}

	public function editHeader($row, $href, $label, $title, $icon, $attributes)
	{
		$objUser = \BackendUser::getInstance();

		return ($objUser->isAdmin || count(preg_grep('/^tl_competition_submission_archive::/', $objUser->alexf)) > 0) ? '<a href="'.$this->addToUrl($href.'&amp;id='.$row['id']).'" title="'.specialchars($title).'"'.$attributes.'>'.Image::getHtml($icon, $label).'</a> ' : Image::getHtml(preg_replace('/\.gif$/i', '_.gif', $icon)).' ';
	}

	public function copyArchive($row, $href, $label, $title, $icon, $attributes)
	{
		$objUser = \BackendUser::getInstance();

		return ($objUser->isAdmin || $objUser->hasAccess('create', 'competition_submissionp')) ? '<a href="'.$this->addToUrl($href.'&amp;id='.$row['id']).'" title="'.specialchars($title).'"'.$attributes.'>'.Image::getHtml($icon, $label).'</a> ' : Image::getHtml(preg_replace('/\.gif$/i', '_.gif', $icon)).' ';
	}

	public function deleteArchive($row, $href, $label, $title, $icon, $attributes)
	{
		$objUser = \BackendUser::getInstance();
		
		return ($objUser->isAdmin || $objUser->hasAccess('delete', 'competition_submissionp')) ? '<a href="'.$this->addToUrl($href.'&amp;id='.$row['id']).'" title="'.specialchars($title).'"'.$attributes.'>'.Image::getHtml($icon, $label).'</a> ' : Image::getHtml(preg_replace('/\.gif$/i', '_.gif', $icon)).' ';
	}

	public static function modifyPalette()
	{
		if (($objArchive = \HeimrichHannot\Competition\SubmissionArchiveModel::findByPk(\Input::get('id'))) !== null)
		{
			if (!$objArchive->addPdfExport)
			{
				$arrDca = &$GLOBALS['TL_DCA']['tl_competition_submission_archive'];

				$arrDca['palettes']['default'] = str_replace(
					$arrDca['grouppalettes']['pdfExport'], '',
					$GLOBALS['TL_DCA']['tl_competition_submission_archive']['palettes']['default']
				);
			}
		}
	}
}

