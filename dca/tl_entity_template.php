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
				'label' => &$GLOBALS['TL_LANG']['tl_entity_template']['generate'],
				'href'  => 'key=generate',
				'icon'  => 'system/modules/entity_generator/assets/img/icon.png',
			)
		)
	),

	// Palettes
	'palettes'    => array
	(
		'__selector__' => array('addConfig', 'addBackendModule', 'insertInExistingModuleGroup', 'addDca', 'addOnLoadCallbacks', 'addOnSubmitCallbacks', 'addSortingFields', 'addHeaderFields', 'addGlobalOperations', 'addOperations', 'addLanguages', 'addModels'),
		'default'      => '{general_legend},title,outputDir;{module_legend},moduleName,moduleNamespace,addAssets,addConfig;{entity_legend},addDca;{language_legend},addLanguages;{model_legend},addModels;'
	),

	// Subpalettes
	'subpalettes' => array
	(
		'addConfig' => 'configTemplate,addBackendModule',
		'addBackendModule' => 'insertInExistingModuleGroup',
		'insertInExistingModuleGroup' => 'existingModuleGroupName',
		'addDca'  => 'dcaTemplate,dcaName,parentDcaName,parentDcaForeignKey,childDcaName,type,dataContainer,enableVersioning,addOnLoadCallbacks,addOnSubmitCallbacks,sortingMode,addSortingFields,addHeaderFields,addGlobalOperations,addOperations,addPublish',
		'addOnLoadCallbacks' => 'onLoadCallbacks',
		'addOnSubmitCallbacks' => 'onSubmitCallbacks',
		'addSortingFields' => 'sortingFields',
		'addHeaderFields' => 'headerFields',
		'addGlobalOperations' => 'globalOperations',
		'addOperations' => 'operations',
		'addLanguages' => 'dcaLangTemplate,modulesLangTemplate,localizedEntityName,localizedModuleName',
		'addModels' => 'modelTemplate'
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
		'title'        => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['title'],
			'exclude'   => true,
			'inputType' => 'text',
			'eval'      => array('mandatory' => true, 'maxlength' => 255, 'tl_class' => 'w50'),
			'sql'       => "varchar(255) NOT NULL default ''"
		),
		'outputDir' => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['outputDir'],
			'exclude'   => true,
			'inputType' => 'fileTree',
			'eval'      => array('fieldType'=>'radio', 'tl_class'=>'w50'),
			'sql'       => "binary(16) NULL"
		),
		'moduleName'        => array
		(
				'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['moduleName'],
				'exclude'   => true,
				'inputType' => 'text',
				'eval'      => array('mandatory' => true, 'maxlength' => 255, 'tl_class' => 'w50'),
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
			'eval'      => array('multiple' => true, 'tl_class' => 'w50'),
			'sql'       => "blob NULL"
		),
		'addConfig'    => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['addConfig'],
			'exclude'   => true,
			'inputType' => 'checkbox',
			'eval'      => array('submitOnChange' => true, 'tl_class' => 'w50'),
			'sql'       => "char(1) NOT NULL default ''"
		),
		'configTemplate' => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['configTemplate'],
			'default'   => 'eg_config_default',
			'exclude'   => true,
			'inputType' => 'select',
			'options'   => \Controller::getTemplateGroup('eg_config_'),
			'eval'      => array('mandatory' => true, 'tl_class' => 'w50 clr'),
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
		'insertInExistingModuleGroup' => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['insertInExistingModuleGroup'],
			'exclude'   => true,
			'inputType' => 'checkbox',
			'eval'      => array('submitOnChange' => true, 'tl_class' => 'w50 clr'),
			'sql'       => "char(1) NOT NULL default ''"
		),
		'existingModuleGroupName'        => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['existingModuleGroupName'],
			'exclude'   => true,
			'inputType' => 'text',
			'eval'      => array('mandatory' => true, 'maxlength' => 255, 'tl_class' => 'w50'),
			'sql'       => "varchar(255) NOT NULL default ''"
		),
		'addDca'    => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['addDca'],
			'exclude'   => true,
			'inputType' => 'checkbox',
			'eval'      => array('submitOnChange' => true, 'tl_class' => 'w50'),
			'sql'       => "char(1) NOT NULL default ''"
		),
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
		'parentDcaName'  => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['parentDcaName'],
			'exclude'   => true,
			'inputType' => 'text',
			'eval'      => array('maxlength' => 255, 'tl_class' => 'w50'),
			'sql'       => "varchar(255) NOT NULL default ''"
		),
		'parentDcaForeignKey'  => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['parentDcaForeignKey'],
			'exclude'   => true,
			'inputType' => 'text',
			'eval'      => array('maxlength' => 255, 'tl_class' => 'w50'),
			'sql'       => "varchar(255) NOT NULL default ''"
		),
		'childDcaName'  => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['childDcaName'],
			'exclude'   => true,
			'inputType' => 'text',
			'eval'      => array('maxlength' => 255, 'tl_class' => 'w50'),
			'sql'       => "varchar(255) NOT NULL default ''"
		),
		'type'        => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['type'],
			'exclude'   => true,
			'inputType' => 'select',
			'options'   => array('normal', 'archive', 'child'),
			'reference' => &$GLOBALS['TL_LANG']['tl_entity_template']['type'],
			'eval'      => array('mandatory' => true, 'maxlength' => 255, 'tl_class' => 'w50'),
			'sql'       => "varchar(255) NOT NULL default ''"
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
				'tl_class'     => 'w50',
				'columnFields' => array(
					'class'   => array(
						'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['class'],
						'exclude'   => true,
						'inputType' => 'text',
						'eval'      => array('style' => 'width: 180px')
					),
					'method' => array(
						'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['method'],
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
			'eval'      => array('submitOnChange' => true, 'tl_class' => 'w50'),
			'sql'       => "char(1) NOT NULL default ''"
		),
		'onSubmitCallbacks' => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['onSubmitCallbacks'],
			'exclude'   => true,
			'inputType' => 'multiColumnWizard',
			'eval'      => array(
				'mandatory' => true,
				'tl_class'     => 'w50',
				'columnFields' => array(
					'class'   => array(
						'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['class'],
						'exclude'   => true,
						'inputType' => 'text',
						'eval'      => array('style' => 'width: 180px')
					),
					'method' => array(
						'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['method'],
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
			'eval'             => array('mandatory' => true, 'tl_class' => 'w50'),
			'sql'              => "varchar(255) NOT NULL default ''",
		),
		'addSortingFields'    => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['addSortingFields'],
			'exclude'   => true,
			'inputType' => 'checkbox',
			'eval'      => array('submitOnChange' => true, 'tl_class' => 'w50'),
			'sql'       => "char(1) NOT NULL default ''"
		),
		'sortingFields'        => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['sortingFields'],
			'exclude'   => true,
			'inputType' => 'multiColumnWizard',
			'eval'      => array(
				'mandatory' => true,
				'tl_class' => 'w50',
				'columnFields' => array(
					'field' => array(
						'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['field'],
						'exclude'   => true,
						'inputType' => 'text',
						'eval'      => array('style'=>'width: 180px')
					),
					'sorting' => array(
						'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['sorting'],
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
			'eval'      => array('submitOnChange' => true, 'tl_class' => 'w50'),
			'sql'       => "char(1) NOT NULL default ''"
		),
		'headerFields' => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['headerFields'],
			'exclude'   => true,
			'inputType' => 'multiColumnWizard',
			'eval'      => array(
				'mandatory' => true,
				'tl_class'     => 'w50',
				'columnFields' => array(
					'field'   => array(
						'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['field'],
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
			'eval'      => array('submitOnChange' => true, 'tl_class' => 'w50'),
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
				'tl_class'     => 'w50',
				'columnFields' => array(
					'field'   => array(
						'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['field'],
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
			'eval'      => array('submitOnChange' => true, 'tl_class' => 'w50'),
			'sql'       => "char(1) NOT NULL default ''"
		),
		'operations' => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['operations'],
			'exclude'   => true,
			'inputType' => 'multiColumnWizard',
			'default' => array (
				array('act' => 'edit'),
				array('act' => 'copy'),
				array('act' => 'delete'),
				array('act' => 'show'),
			),
			'eval'      => array(
				'tl_class'     => 'w50',
				'columnFields' => array(
					'field'   => array(
						'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['field'],
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
			'eval'      => array('tl_class' => 'w50'),
			'sql'       => "char(1) NOT NULL default ''"
		),
		'addLanguages'    => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['addLanguages'],
			'exclude'   => true,
			'inputType' => 'checkbox',
			'eval'      => array('submitOnChange' => true, 'tl_class' => 'w50'),
			'sql'       => "char(1) NOT NULL default ''"
		),
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
		'localizedModuleName' => array
		(
			'label'            => &$GLOBALS['TL_LANG']['tl_entity_template']['localizedModuleName'],
			'exclude'          => true,
			'inputType'        => 'text',
			'eval'             => array('mandatory' => true, 'tl_class' => 'w50'),
			'sql'              => "varchar(255) NOT NULL default ''",
		),
		'addModels'    => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['addModels'],
			'exclude'   => true,
			'inputType' => 'checkbox',
			'eval'      => array('submitOnChange' => true, 'tl_class' => 'w50'),
			'sql'       => "char(1) NOT NULL default ''"
		),
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
	)
);


class tl_entity_template extends \Backend
{

}
