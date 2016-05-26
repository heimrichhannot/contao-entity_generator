<?php

$GLOBALS['TL_DCA']['tl_entity_template'] = array
(

	// Config
	'config'      => array
	(
		'dataContainer'    => 'Table',
		'switchToEdit'     => true,
		'enableVersioning' => true,
		'sql'              => array
		(
			'keys' => array
			(
				'id' => 'primary'
			)
		)
	),

	// List
	'list'        => array
	(
		'sorting'           => array
		(
			'mode'        => 1,
			'fields'      => array('title'),
			'flag'        => 1,
			'panelLayout' => 'filter;search,limit',
		),
		'label'             => array
		(
			'fields' => array('title', 'formID'),
			'format' => '%s <span style="color:#b3b3b3;padding-left:3px">[%s]</span>'
		),
		'global_operations' => array
		(
			'all' => array
			(
				'label'      => &$GLOBALS['TL_LANG']['MSC']['all'],
				'href'       => 'act=select',
				'class'      => 'header_edit_all',
				'attributes' => 'onclick="Backend.getScrollOffset()" accesskey="e"'
			)
		),
		'operations'        => array
		(
			'edit'       => array
			(
				'label' => &$GLOBALS['TL_LANG']['tl_entity_template']['edit'],
				'href'  => 'act=edit',
				'icon'  => 'edit.gif'
			),
			'copy'       => array
			(
				'label'           => &$GLOBALS['TL_LANG']['tl_entity_template']['copy'],
				'href'            => 'act=copy',
				'icon'            => 'copy.gif'
			),
			'delete'     => array
			(
				'label'           => &$GLOBALS['TL_LANG']['tl_entity_template']['delete'],
				'href'            => 'act=delete',
				'icon'            => 'delete.gif',
				'attributes'      => 'onclick="if(!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm']
					. '\'))return false;Backend.getScrollOffset()"'
			),
			'show'       => array
			(
				'label' => &$GLOBALS['TL_LANG']['tl_entity_template']['show'],
				'href'  => 'act=show',
				'icon'  => 'show.gif'
			),
			'generate' => array
			(
				'label'           => &$GLOBALS['TL_LANG']['tl_entity_template']['generate'],
				'href'            => 'key=generate',
				'icon'            => 'system/modules/entity_generator/assets/img/icon.png',
				'button_callback' => array('tl_entity_template', 'generate')
			)
		)
	),

	// Palettes
	'palettes'    => array
	(
		'__selector__' => array('type', 'addOutputDir', 'addDcas', 'addUserPermissions', 'addParentDca', 'addLanguages', 'addModel',
				'addConfig', 'addBackendModule', 'moduleGroup', 'addOnLoadCallbacks', 'addOnSubmitCallbacks',
				'addSortingFields', 'addHeaderFields', 'addGlobalOperations', 'addOperations'
		),
		'default'      => '{general_legend},title,type;',
		'module'       => '{general_legend},title,type;{module_legend},addOutputDir,moduleName,moduleNamespace,addAssets,addConfig,addDcas;',
		'dca'          => '{general_legend},title,type;{entity_legend},dcaTemplate,dcaName,childDcaName,addUserPermissions,dataContainer,enableVersioning,addOnLoadCallbacks,addOnSubmitCallbacks,sortingMode,addSortingFields,addHeaderFields,addGlobalOperations,addOperations,addPublish,addTitle,addParentDca;{language_legend},addLanguages;{model_legend},addModel;'
	),

	// Subpalettes
	'subpalettes' => array
	(
		'addOutputDir' => 'outputDir',
		'addConfig' => 'configTemplate,addBackendModule',
		'addDcas' => 'dcas',
		'addUserPermissions' => 'userTemplate,userGroupTemplate,userLanguageTemplate,userGroupLanguageTemplate',
		'addParentDca' => 'parentDca,parentDcaForeignKey',
		'addLanguages' => 'dcaLangTemplate,localizedEntityName,localizedEntityNamePlural',
		'addModel' => 'modelTemplate,entityClassName',
		'addBackendModule' => 'modulesLangTemplate,moduleGroup',
		'moduleGroup_new' => 'localizedModuleName',
		'moduleGroup_existing' => 'existingModuleGroupName',
		'addOnLoadCallbacks' => 'onLoadCallbacks',
		'addOnSubmitCallbacks' => 'onSubmitCallbacks',
		'addSortingFields' => 'sortingFields',
		'addHeaderFields' => 'headerFields',
		'addGlobalOperations' => 'globalOperations',
		'addOperations' => 'operations'
	),

	// Fields
	'fields'      => array
	(
		'id'           => array
		(
			'sql' => "int(10) unsigned NOT NULL auto_increment"
		),
		'tstamp'       => array
		(
			'sql' => "int(10) unsigned NOT NULL default '0'"
		),
		'type'        => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['type'],
			'exclude'   => true,
			'inputType' => 'select',
			'options'   => array('module', 'dca'),
			'default'   => 'module',
			'reference' => &$GLOBALS['TL_LANG']['tl_entity_template']['type'],
			'eval'      => array('mandatory' => true, 'submitOnChange' => true, 'maxlength' => 255, 'tl_class' => 'w50'),
			'sql'       => "varchar(255) NOT NULL default 'module'"
		),
		'title'        => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['title'],
			'exclude'   => true,
			'inputType' => 'text',
			'eval'      => array('mandatory' => true, 'maxlength' => 255, 'tl_class' => 'w50'),
			'sql'       => "varchar(255) NOT NULL default ''"
		),
		'addOutputDir' => array(
			'label'                   => &$GLOBALS['TL_LANG']['tl_entity_template']['addOutputDir'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'default'                 => true,
			'eval'                    => array('submitOnChange' => true, 'tl_class' => 'w50'),
			'sql'                     => "char(1) NOT NULL default '1'"
		),
		'outputDir' => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['outputDir'],
			'exclude'   => true,
			'inputType' => 'fileTree',
			'eval'      => array('fieldType'=>'radio', 'mandatory' => true, 'tl_class'=>'w50'),
			'sql'       => "binary(16) NULL"
		),
		'moduleName'        => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['moduleName'],
			'exclude'   => true,
			'inputType' => 'text',
			'eval'      => array('mandatory' => true, 'maxlength' => 255, 'tl_class' => 'w50 clr'),
			'sql'       => "varchar(255) NOT NULL default ''"
		),
		'moduleNamespace'        => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['moduleNamespace'],
			'exclude'   => true,
			'inputType' => 'text',
			'eval'      => array('decodeEntities' => true, 'mandatory' => true, 'maxlength' => 255, 'tl_class' => 'w50'),
			'sql'       => "varchar(255) NOT NULL default ''"
		),
		'addAssets'    => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['addAssets'],
			'exclude'   => true,
			'inputType' => 'checkbox',
			'default'   => array('css', 'img', 'js', 'htaccess'),
			'options'   => array('css', 'img', 'js', 'htaccess'),
			'reference' => &$GLOBALS['TL_LANG']['tl_entity_template']['addAssets'],
			'eval'      => array('multiple' => true, 'tl_class' => 'w50 clr'),
			'sql'       => "blob NULL"
		),
		'addConfig'    => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['addConfig'],
			'exclude'   => true,
			'inputType' => 'checkbox',
			'eval'      => array('submitOnChange' => true, 'tl_class' => 'w50 clr'),
			'sql'       => "char(1) NOT NULL default ''"
		),
		'configTemplate' => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['configTemplate'],
			'default'   => 'eg_config_default',
			'exclude'   => true,
			'inputType' => 'select',
			'options'   => \Controller::getTemplateGroup('eg_config_'),
			'eval'      => array('mandatory' => true, 'tl_class' => 'w50'),
			'sql'       => "varchar(255) NOT NULL default ''",
		),
		'addBackendModule'    => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['addBackendModule'],
			'exclude'   => true,
			'inputType' => 'checkbox',
			'eval'      => array('submitOnChange' => true, 'tl_class' => 'w50'),
			'sql'       => "char(1) NOT NULL default ''"
		),
		'moduleGroup' => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['moduleGroup'],
			'exclude'   => true,
			'default'   => 'new',
			'inputType' => 'select',
			'options'   => array('new', 'existing'),
			'reference' => &$GLOBALS['TL_LANG']['tl_entity_template']['moduleGroup'],
			'eval'      => array('submitOnChange' => true, 'tl_class' => 'w50 clr'),
			'sql'       => "varchar(255) NOT NULL default ''"
		),
		'existingModuleGroupName'        => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['existingModuleGroupName'],
			'exclude'   => true,
			'inputType' => 'text',
			'eval'      => array('mandatory' => true, 'maxlength' => 255, 'tl_class' => 'w50'),
			'sql'       => "varchar(255) NOT NULL default ''"
		),
		'addDcas'    => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['addDcas'],
			'exclude'   => true,
			'inputType' => 'checkbox',
			'eval'      => array('submitOnChange' => true, 'tl_class' => 'w50 clr'),
			'sql'       => "char(1) NOT NULL default ''"
		),
		'dcas'        => array
		(
			'label'            => &$GLOBALS['TL_LANG']['tl_entity_template']['dcas'],
			'exclude'          => true,
			'inputType'        => 'select',
			'options_callback' => array('tl_entity_template', 'getDcaEntityTemplatesAsOptions'),
			'eval'             => array('mandatory' => true, 'multiple' => true, 'chosen' => true,
										'tl_class'  => 'long clr',
										'style'     => 'width: 97%'
			),
			'sql'              => "blob NULL"
		),
		'parentDca'        => array
		(
			'label'            => &$GLOBALS['TL_LANG']['tl_entity_template']['parentDca'],
			'exclude'          => true,
			'inputType'        => 'select',
			'options_callback' => array('tl_entity_template', 'getDcaEntityTemplatesAsOptions'),
			'eval'             => array('mandatory' => true, 'chosen' => true, 'includeBlankOption' => true,
										'tl_class'  => 'w50 clr'),
			'sql'              => "int(10) unsigned NOT NULL default '0'"
		),
		'addLanguages'    => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['addLanguages'],
			'exclude'   => true,
			'inputType' => 'checkbox',
			'eval'      => array('submitOnChange' => true, 'tl_class' => 'w50 clr'),
			'sql'       => "char(1) NOT NULL default ''"
		),
		'addModel'    => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['addModel'],
			'exclude'   => true,
			'inputType' => 'checkbox',
			'eval'      => array('submitOnChange' => true, 'tl_class' => 'w50 clr'),
			'sql'       => "char(1) NOT NULL default ''"
		),
		// dca
		'dcaTemplate' => array
		(
			'label'            => &$GLOBALS['TL_LANG']['tl_entity_template']['dcaTemplate'],
			'default'          => 'eg_dca_default',
			'exclude'          => true,
			'inputType'        => 'select',
			'options'          => \Controller::getTemplateGroup('eg_dca_'),
			'eval'             => array('mandatory' => true, 'tl_class' => 'w50 clr'),
			'sql'              => "varchar(255) NOT NULL default ''",
		),
		'dcaName'        => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['dcaName'],
			'exclude'   => true,
			'inputType' => 'text',
			'eval'      => array('mandatory' => true, 'maxlength' => 255, 'tl_class' => 'w50'),
			'sql'       => "varchar(255) NOT NULL default ''"
		),
		'addParentDca'    => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['addParentDca'],
			'exclude'   => true,
			'inputType' => 'checkbox',
			'eval'      => array('submitOnChange' => true, 'tl_class' => 'w50 clr'),
			'sql'       => "char(1) NOT NULL default ''"
		),
		'parentDcaName'  => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['parentDcaName'],
			'exclude'   => true,
			'inputType' => 'text',
			'eval'      => array('maxlength' => 255, 'mandatory' => true, 'tl_class' => 'w50'),
			'sql'       => "varchar(255) NOT NULL default ''"
		),
		'parentDcaForeignKey'  => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['parentDcaForeignKey'],
			'exclude'   => true,
			'inputType' => 'text',
			'eval'      => array('maxlength' => 255, 'mandatory' => true, 'tl_class' => 'w50'),
			'sql'       => "varchar(255) NOT NULL default ''"
		),
		'childDcaName'  => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['childDcaName'],
			'exclude'   => true,
			'inputType' => 'text',
			'eval'      => array('maxlength' => 255, 'tl_class' => 'w50 clr'),
			'sql'       => "varchar(255) NOT NULL default ''"
		),
		'addUserPermissions' => array(
			'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['addUserPermissions'],
			'exclude'   => true,
			'inputType' => 'checkbox',
			'eval'      => array('tl_class' => 'w50', 'submitOnChange' => true),
			'sql'       => "char(1) NOT NULL default ''"
		),
		'userTemplate' => array
		(
			'label'            => &$GLOBALS['TL_LANG']['tl_entity_template']['userTemplate'],
			'default'          => 'eg_user_dca_default',
			'exclude'          => true,
			'inputType'        => 'select',
			'options'          => \Controller::getTemplateGroup('eg_user_dca_'),
			'eval'             => array('mandatory' => true, 'tl_class' => 'w50 clr'),
			'sql'              => "varchar(255) NOT NULL default ''",
		),
		'userGroupTemplate' => array
		(
			'label'            => &$GLOBALS['TL_LANG']['tl_entity_template']['userGroupTemplate'],
			'default'          => 'eg_user_group_dca_default',
			'exclude'          => true,
			'inputType'        => 'select',
			'options'          => \Controller::getTemplateGroup('eg_user_group_dca_'),
			'eval'             => array('mandatory' => true, 'tl_class' => 'w50'),
			'sql'              => "varchar(255) NOT NULL default ''",
		),
		'userLanguageTemplate' => array
		(
			'label'            => &$GLOBALS['TL_LANG']['tl_entity_template']['userLanguageTemplate'],
			'default'          => 'eg_lang_user_dca_default',
			'exclude'          => true,
			'inputType'        => 'select',
			'options'          => \Controller::getTemplateGroup('eg_lang_user_dca_'),
			'eval'             => array('mandatory' => true, 'tl_class' => 'w50 clr'),
			'sql'              => "varchar(255) NOT NULL default ''",
		),
		'userGroupLanguageTemplate' => array
		(
			'label'            => &$GLOBALS['TL_LANG']['tl_entity_template']['userGroupLanguageTemplate'],
			'default'          => 'eg_lang_user_group_dca_default',
			'exclude'          => true,
			'inputType'        => 'select',
			'options'          => \Controller::getTemplateGroup('eg_lang_user_group_dca_'),
			'eval'             => array('mandatory' => true, 'tl_class' => 'w50'),
			'sql'              => "varchar(255) NOT NULL default ''",
		),
		'dataContainer' => array
		(
			'label'            => &$GLOBALS['TL_LANG']['tl_entity_template']['dataContainer'],
			'exclude'          => true,
			'inputType'        => 'select',
			'options'          => array(
				'Table' => 'DC_Table',
				'File' => 'DC_File',
				'Folder' => 'DC_Folder',
			),
			'eval'             => array('mandatory' => true, 'tl_class' => 'w50 clr'),
			'sql'              => "varchar(255) NOT NULL default ''",
		),
		'enableVersioning'    => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['enableVersioning'],
			'exclude'   => true,
			'inputType' => 'checkbox',
			'eval'      => array('tl_class' => 'w50'),
			'sql'       => "char(1) NOT NULL default ''"
		),
		'addOnLoadCallbacks'    => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['addOnLoadCallbacks'],
			'exclude'   => true,
			'inputType' => 'checkbox',
			'eval'      => array('submitOnChange' => true, 'tl_class' => 'w50 clr'),
			'sql'       => "char(1) NOT NULL default ''"
		),
		'onLoadCallbacks' => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['onLoadCallbacks'],
			'exclude'   => true,
			'inputType' => 'multiColumnWizard',
			'eval'      => array(
				'mandatory' => true,
				'tl_class'     => 'w50 clr',
				'columnFields' => array(
					'class'   => array(
						'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['onLoadCallbacks']['class'],
						'exclude'   => true,
						'inputType' => 'text',
						'eval'      => array('style' => 'width: 180px')
					),
					'method' => array(
						'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['onLoadCallbacks']['method'],
						'exclude'   => true,
						'inputType' => 'text',
						'eval'      => array('style' => 'width: 180px')
					),
				)
			),
			'sql'       => "blob NULL"
		),
		'addOnSubmitCallbacks'    => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['addOnSubmitCallbacks'],
			'exclude'   => true,
			'inputType' => 'checkbox',
			'eval'      => array('submitOnChange' => true, 'tl_class' => 'w50 clr'),
			'sql'       => "char(1) NOT NULL default ''"
		),
		'onSubmitCallbacks' => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['onSubmitCallbacks'],
			'exclude'   => true,
			'inputType' => 'multiColumnWizard',
			'eval'      => array(
				'mandatory' => true,
				'tl_class'     => 'w50 clr',
				'columnFields' => array(
					'class'   => array(
						'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['onSubmitCallbacks']['class'],
						'exclude'   => true,
						'inputType' => 'text',
						'eval'      => array('style' => 'width: 180px')
					),
					'method' => array(
						'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['onSubmitCallbacks']['method'],
						'exclude'   => true,
						'inputType' => 'text',
						'eval'      => array('style' => 'width: 180px')
					),
				)
			),
			'sql'       => "blob NULL"
		),
		'sortingMode' => array
		(
			'label'            => &$GLOBALS['TL_LANG']['tl_entity_template']['sortingMode'],
			'exclude'          => true,
			'inputType'        => 'select',
			'options'          => array(0, 1, 2, 3, 4, 5 ,6),
			'reference'        => &$GLOBALS['TL_LANG']['tl_entity_template']['sortingMode']['options'],
			'eval'             => array('mandatory' => true, 'tl_class' => 'w50 clr'),
			'sql'              => "varchar(255) NOT NULL default ''",
		),
		'addSortingFields'    => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['addSortingFields'],
			'exclude'   => true,
			'inputType' => 'checkbox',
			'eval'      => array('submitOnChange' => true, 'tl_class' => 'w50 clr'),
			'sql'       => "char(1) NOT NULL default ''"
		),
		'sortingFields'        => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['sortingFields'],
			'exclude'   => true,
			'inputType' => 'multiColumnWizard',
			'eval'      => array(
				'mandatory' => true,
				'tl_class' => 'w50 clr',
				'columnFields' => array(
					'field' => array(
						'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['sortingFields']['field'],
						'exclude'   => true,
						'inputType' => 'text',
						'eval'      => array('style'=>'width: 180px')
					),
					'sorting' => array(
						'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['sortingFields']['sorting'],
						'exclude'   => true,
						'inputType' => 'select',
						'options'   => array('ASC', 'DESC'),
						'eval'      => array('style'=>'width: 180px')
					),
				)
			),
			'sql'       => "blob NULL"
		),
		'addHeaderFields'    => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['addHeaderFields'],
			'exclude'   => true,
			'inputType' => 'checkbox',
			'eval'      => array('submitOnChange' => true, 'tl_class' => 'w50 clr'),
			'sql'       => "char(1) NOT NULL default ''"
		),
		'headerFields' => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['headerFields'],
			'exclude'   => true,
			'inputType' => 'multiColumnWizard',
			'eval'      => array(
				'mandatory' => true,
				'tl_class'     => 'w50 clr',
				'columnFields' => array(
					'field'   => array(
						'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['headerFields']['field'],
						'exclude'   => true,
						'inputType' => 'text',
						'eval'      => array('style' => 'width: 180px')
					),
				)
			),
			'sql'       => "blob NULL"
		),
		'addGlobalOperations'    => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['addGlobalOperations'],
			'exclude'   => true,
			'inputType' => 'checkbox',
			'eval'      => array('submitOnChange' => true, 'tl_class' => 'w50 clr'),
			'sql'       => "char(1) NOT NULL default ''"
		),
		'globalOperations' => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['globalOperations'],
			'exclude'   => true,
			'inputType' => 'multiColumnWizard',
			'default' => array(
				array('act' => 'all')
			),
			'eval'      => array(
				'mandatory' => true,
				'tl_class'     => 'w50 clr',
				'columnFields' => array(
					'act'   => array(
						'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['globalOperations']['act'],
						'exclude'   => true,
						'inputType' => 'text',
						'eval'      => array('style' => 'width: 180px')
					),
				)
			),
			'sql'       => "blob NULL"
		),
		'addOperations'    => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['addOperations'],
			'exclude'   => true,
			'inputType' => 'checkbox',
			'eval'      => array('submitOnChange' => true, 'tl_class' => 'w50 clr'),
			'sql'       => "char(1) NOT NULL default ''"
		),
		'operations' => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['operations'],
			'exclude'   => true,
			'inputType' => 'multiColumnWizard',
			'default' => array(
				array('act' => 'edit'),
				array('act' => 'copy'),
				array('act' => 'delete'),
				array('act' => 'toggle'),
				array('act' => 'show'),
			),
			'eval'      => array(
				'tl_class'     => 'w50 clr',
				'columnFields' => array(
					'act'   => array(
						'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['operations']['act'],
						'exclude'   => true,
						'inputType' => 'text',
						'eval'      => array('style' => 'width: 180px')
					),
				)
			),
			'sql'       => "blob NULL"
		),
		'addPublish'    => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['addPublish'],
			'exclude'   => true,
			'inputType' => 'checkbox',
			'eval'      => array('tl_class' => 'w50 clr'),
			'sql'       => "char(1) NOT NULL default ''"
		),
		'addTitle'    => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['addTitle'],
			'exclude'   => true,
			'inputType' => 'checkbox',
			'eval'      => array('tl_class' => 'w50'),
			'sql'       => "char(1) NOT NULL default ''"
		),
		// languages
		'dcaLangTemplate' => array
		(
			'label'            => &$GLOBALS['TL_LANG']['tl_entity_template']['dcaLangTemplate'],
			'default'          => 'eg_lang_dca_default',
			'exclude'          => true,
			'inputType'        => 'select',
			'options'          => \Controller::getTemplateGroup('eg_lang_dca_'),
			'eval'             => array('mandatory' => true, 'tl_class' => 'w50 clr'),
			'sql'              => "varchar(255) NOT NULL default ''",
		),
		'modulesLangTemplate' => array
		(
			'label'            => &$GLOBALS['TL_LANG']['tl_entity_template']['modulesLangTemplate'],
			'default'          => 'eg_lang_modules_default',
			'exclude'          => true,
			'inputType'        => 'select',
			'options'          => \Controller::getTemplateGroup('eg_lang_modules_'),
			'eval'             => array('mandatory' => true, 'tl_class' => 'w50'),
			'sql'              => "varchar(255) NOT NULL default ''",
		),
		'localizedEntityName' => array
		(
			'label'            => &$GLOBALS['TL_LANG']['tl_entity_template']['localizedEntityName'],
			'exclude'          => true,
			'inputType'        => 'text',
			'eval'             => array('mandatory' => true, 'tl_class' => 'w50'),
			'sql'              => "varchar(255) NOT NULL default ''",
		),
		'localizedEntityNamePlural' => array
		(
				'label'            => &$GLOBALS['TL_LANG']['tl_entity_template']['localizedEntityNamePlural'],
				'exclude'          => true,
				'inputType'        => 'text',
				'eval'             => array('mandatory' => true, 'tl_class' => 'w50'),
				'sql'              => "varchar(255) NOT NULL default ''",
		),
		'localizedModuleName' => array
		(
			'label'            => &$GLOBALS['TL_LANG']['tl_entity_template']['localizedModuleName'],
			'exclude'          => true,
			'inputType'        => 'text',
			'eval'             => array('mandatory' => true, 'tl_class' => 'w50'),
			'sql'              => "varchar(255) NOT NULL default ''",
		),
		// model
		'modelTemplate' => array
		(
				'label'            => &$GLOBALS['TL_LANG']['tl_entity_template']['modelTemplate'],
				'default'          => 'eg_model_default',
				'exclude'          => true,
				'inputType'        => 'select',
				'options'          => \Controller::getTemplateGroup('eg_model_'),
				'eval'             => array('mandatory' => true, 'tl_class' => 'w50 clr'),
				'sql'              => "varchar(255) NOT NULL default ''",
		),
		'entityClassName' => array
		(
			'label'            => &$GLOBALS['TL_LANG']['tl_entity_template']['entityClassName'],
			'exclude'          => true,
			'inputType'        => 'text',
			'eval'             => array('mandatory' => true, 'tl_class' => 'w50'),
			'sql'              => "varchar(255) NOT NULL default ''",
		)
	)
);


class tl_entity_template extends \Backend
{
	public function generate($row, $href, $label, $title, $icon, $attributes)
	{
		$href .= '&id=' . $row['id'];

		if ($row['type'] == 'module')
			return '<a href="'.$this->addToUrl($href).'" title="'.specialchars($title).'"'.$attributes.'>'.Image::getHtml($icon, $label).'</a> ';
	}

	public static function getDcaEntityTemplatesAsOptions()
	{
		return static::getEntityTemplatesAsOptions('dca');
	}

	public static function getEntityTemplatesAsOptions($strType)
	{
		$arrOptions = array();

		if (($objEntityTemplates = \HeimrichHannot\EntityGenerator\EntityTemplateModel::findBy('type', $strType)) !== null)
		{
			$arrOptions = array_combine($objEntityTemplates->fetchEach('id'), $objEntityTemplates->fetchEach('title'));
			asort($arrOptions);
		}

		return $arrOptions;
	}
}
