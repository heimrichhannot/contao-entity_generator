<?php

$GLOBALS['TL_DCA']['tl_entity_template'] = [

    // Config
    'config'      => [
        'dataContainer'    => 'Table',
        'switchToEdit'     => true,
        'enableVersioning' => true,
        'sql'              => [
            'keys' => [
                'id' => 'primary'
            ]
        ]
    ],

    // List
    'list'        => [
        'sorting'           => [
            'mode'        => 1,
            'fields'      => ['title'],
            'flag'        => 1,
            'panelLayout' => 'filter;search,limit',
        ],
        'label'             => [
            'fields' => ['title', 'formID'],
            'format' => '%s <span style="color:#b3b3b3;padding-left:3px">[%s]</span>'
        ],
        'global_operations' => [
            'all' => [
                'label'      => &$GLOBALS['TL_LANG']['MSC']['all'],
                'href'       => 'act=select',
                'class'      => 'header_edit_all',
                'attributes' => 'onclick="Backend.getScrollOffset()" accesskey="e"'
            ]
        ],
        'operations'        => [
            'edit'     => [
                'label' => &$GLOBALS['TL_LANG']['tl_entity_template']['edit'],
                'href'  => 'act=edit',
                'icon'  => 'edit.gif'
            ],
            'copy'     => [
                'label' => &$GLOBALS['TL_LANG']['tl_entity_template']['copy'],
                'href'  => 'act=copy',
                'icon'  => 'copy.gif'
            ],
            'delete'   => [
                'label'      => &$GLOBALS['TL_LANG']['tl_entity_template']['delete'],
                'href'       => 'act=delete',
                'icon'       => 'delete.gif',
                'attributes' => 'onclick="if(!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm']
                    . '\'))return false;Backend.getScrollOffset()"'
            ],
            'show'     => [
                'label' => &$GLOBALS['TL_LANG']['tl_entity_template']['show'],
                'href'  => 'act=show',
                'icon'  => 'show.gif'
            ],
            'generate' => [
                'label'           => &$GLOBALS['TL_LANG']['tl_entity_template']['generate'],
                'href'            => 'key=generate',
                'icon'            => 'system/modules/entity_generator/assets/img/icon.png',
                'button_callback' => ['tl_entity_template', 'generate']
            ]
        ]
    ],

    // Palettes
    'palettes'    => [
        '__selector__' => [
            'type',
            'addOutputDir',
            'addDcas',
            'addUserPermissions',
            'addParentDca',
            'addLanguages',
            'addModel',
            'addConfig',
            'addBackendModule',
            'moduleGroup',
            'addOnLoadCallbacks',
            'addOnSubmitCallbacks',
            'addSortingFields',
            'addHeaderFields',
            'addGlobalOperations',
            'addOperations'
        ],
        'default'      => '{general_legend},title,type;',
        'module'       => '{general_legend},title,type;{module_legend},addOutputDir,moduleName,moduleNamespace,addAssets,addConfig,addDcas;',
        'dca'          => '{general_legend},title,type;{entity_legend},dcaTemplate,dcaName,childDcaName,addUserPermissions,dataContainer,enableVersioning,addOnLoadCallbacks,addOnSubmitCallbacks,sortingMode,addSortingFields,addHeaderFields,addGlobalOperations,addOperations,addPublish,addTitle,addParentDca;{language_legend},addLanguages;{model_legend},addModel;'
    ],

    // Subpalettes
    'subpalettes' => [
        'addOutputDir'         => 'outputDir',
        'addConfig'            => 'configTemplate,addBackendModule',
        'addDcas'              => 'dcas',
        'addUserPermissions'   => 'userTemplate,userGroupTemplate,userLanguageTemplate,userGroupLanguageTemplate',
        'addParentDca'         => 'parentDca,parentDcaForeignKey',
        'addLanguages'         => 'dcaLangTemplate,localizedEntityName,localizedEntityNamePlural',
        'addModel'             => 'modelTemplate,entityClassName',
        'addBackendModule'     => 'modulesLangTemplate,moduleGroup',
        'moduleGroup_new'      => 'localizedModuleName',
        'moduleGroup_existing' => 'existingModuleGroupName',
        'addOnLoadCallbacks'   => 'onLoadCallbacks',
        'addOnSubmitCallbacks' => 'onSubmitCallbacks',
        'addSortingFields'     => 'sortingFields',
        'addHeaderFields'      => 'headerFields',
        'addGlobalOperations'  => 'globalOperations',
        'addOperations'        => 'operations'
    ],

    // Fields
    'fields'      => [
        'id'                        => [
            'sql' => "int(10) unsigned NOT NULL auto_increment"
        ],
        'tstamp'                    => [
            'sql' => "int(10) unsigned NOT NULL default '0'"
        ],
        'type'                      => [
            'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['type'],
            'exclude'   => true,
            'inputType' => 'select',
            'options'   => ['module', 'dca'],
            'default'   => 'module',
            'reference' => &$GLOBALS['TL_LANG']['tl_entity_template']['type'],
            'eval'      => ['mandatory' => true, 'submitOnChange' => true, 'maxlength' => 255, 'tl_class' => 'w50'],
            'sql'       => "varchar(255) NOT NULL default 'module'"
        ],
        'title'                     => [
            'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['title'],
            'exclude'   => true,
            'inputType' => 'text',
            'eval'      => ['mandatory' => true, 'maxlength' => 255, 'tl_class' => 'w50'],
            'sql'       => "varchar(255) NOT NULL default ''"
        ],
        'addOutputDir'              => [
            'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['addOutputDir'],
            'exclude'   => true,
            'inputType' => 'checkbox',
            'default'   => true,
            'eval'      => ['submitOnChange' => true, 'tl_class' => 'w50'],
            'sql'       => "char(1) NOT NULL default '1'"
        ],
        'outputDir'                 => [
            'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['outputDir'],
            'exclude'   => true,
            'inputType' => 'fileTree',
            'eval'      => ['fieldType' => 'radio', 'mandatory' => true, 'tl_class' => 'w50 clr autoheight'],
            'sql'       => "binary(16) NULL"
        ],
        'moduleName'                => [
            'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['moduleName'],
            'exclude'   => true,
            'inputType' => 'text',
            'eval'      => ['mandatory' => true, 'maxlength' => 255, 'tl_class' => 'w50 clr'],
            'sql'       => "varchar(255) NOT NULL default ''"
        ],
        'moduleNamespace'           => [
            'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['moduleNamespace'],
            'exclude'   => true,
            'inputType' => 'text',
            'eval'      => ['decodeEntities' => true, 'mandatory' => true, 'maxlength' => 255, 'tl_class' => 'w50'],
            'sql'       => "varchar(255) NOT NULL default ''"
        ],
        'addAssets'                 => [
            'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['addAssets'],
            'exclude'   => true,
            'inputType' => 'checkbox',
            'default'   => ['css', 'img', 'js', 'htaccess'],
            'options'   => ['css', 'img', 'js', 'htaccess'],
            'reference' => &$GLOBALS['TL_LANG']['tl_entity_template']['addAssets'],
            'eval'      => ['multiple' => true, 'tl_class' => 'w50 clr autoheight'],
            'sql'       => "blob NULL"
        ],
        'addConfig'                 => [
            'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['addConfig'],
            'exclude'   => true,
            'inputType' => 'checkbox',
            'eval'      => ['submitOnChange' => true, 'tl_class' => 'w50 clr'],
            'sql'       => "char(1) NOT NULL default ''"
        ],
        'configTemplate'            => [
            'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['configTemplate'],
            'default'   => 'eg_config_default',
            'exclude'   => true,
            'inputType' => 'select',
            'options'   => \Controller::getTemplateGroup('eg_config_'),
            'eval'      => ['mandatory' => true, 'tl_class' => 'w50'],
            'sql'       => "varchar(255) NOT NULL default ''",
        ],
        'addBackendModule'          => [
            'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['addBackendModule'],
            'exclude'   => true,
            'inputType' => 'checkbox',
            'eval'      => ['submitOnChange' => true, 'tl_class' => 'w50'],
            'sql'       => "char(1) NOT NULL default ''"
        ],
        'moduleGroup'               => [
            'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['moduleGroup'],
            'exclude'   => true,
            'default'   => 'new',
            'inputType' => 'select',
            'options'   => ['new', 'existing'],
            'reference' => &$GLOBALS['TL_LANG']['tl_entity_template']['moduleGroup'],
            'eval'      => ['submitOnChange' => true, 'tl_class' => 'w50 clr'],
            'sql'       => "varchar(255) NOT NULL default ''"
        ],
        'existingModuleGroupName'   => [
            'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['existingModuleGroupName'],
            'exclude'   => true,
            'inputType' => 'text',
            'eval'      => ['mandatory' => true, 'maxlength' => 255, 'tl_class' => 'w50'],
            'sql'       => "varchar(255) NOT NULL default ''"
        ],
        'addDcas'                   => [
            'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['addDcas'],
            'exclude'   => true,
            'inputType' => 'checkbox',
            'eval'      => ['submitOnChange' => true, 'tl_class' => 'w50 clr'],
            'sql'       => "char(1) NOT NULL default ''"
        ],
        'dcas'                      => [
            'label'            => &$GLOBALS['TL_LANG']['tl_entity_template']['dcas'],
            'exclude'          => true,
            'inputType'        => 'select',
            'options_callback' => ['tl_entity_template', 'getDcaEntityTemplatesAsOptions'],
            'eval'             => [
                'mandatory' => true,
                'multiple'  => true,
                'chosen'    => true,
                'tl_class'  => 'long clr',
                'style'     => 'width: 97%'
            ],
            'sql'              => "blob NULL"
        ],
        'parentDca'                 => [
            'label'            => &$GLOBALS['TL_LANG']['tl_entity_template']['parentDca'],
            'exclude'          => true,
            'inputType'        => 'select',
            'options_callback' => ['tl_entity_template', 'getDcaEntityTemplatesAsOptions'],
            'eval'             => [
                'mandatory'          => true,
                'chosen'             => true,
                'includeBlankOption' => true,
                'tl_class'           => 'w50 clr'
            ],
            'sql'              => "int(10) unsigned NOT NULL default '0'"
        ],
        'addLanguages'              => [
            'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['addLanguages'],
            'exclude'   => true,
            'inputType' => 'checkbox',
            'eval'      => ['submitOnChange' => true, 'tl_class' => 'w50 clr'],
            'sql'       => "char(1) NOT NULL default ''"
        ],
        'addModel'                  => [
            'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['addModel'],
            'exclude'   => true,
            'inputType' => 'checkbox',
            'eval'      => ['submitOnChange' => true, 'tl_class' => 'w50 clr'],
            'sql'       => "char(1) NOT NULL default ''"
        ],
        // dca
        'dcaTemplate'               => [
            'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['dcaTemplate'],
            'default'   => 'eg_dca_default',
            'exclude'   => true,
            'inputType' => 'select',
            'options'   => \Controller::getTemplateGroup('eg_dca_'),
            'eval'      => ['mandatory' => true, 'tl_class' => 'w50 clr'],
            'sql'       => "varchar(255) NOT NULL default ''",
        ],
        'dcaName'                   => [
            'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['dcaName'],
            'exclude'   => true,
            'inputType' => 'text',
            'eval'      => ['mandatory' => true, 'maxlength' => 255, 'tl_class' => 'w50'],
            'sql'       => "varchar(255) NOT NULL default ''"
        ],
        'addParentDca'              => [
            'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['addParentDca'],
            'exclude'   => true,
            'inputType' => 'checkbox',
            'eval'      => ['submitOnChange' => true, 'tl_class' => 'w50 clr'],
            'sql'       => "char(1) NOT NULL default ''"
        ],
        'parentDcaName'             => [
            'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['parentDcaName'],
            'exclude'   => true,
            'inputType' => 'text',
            'eval'      => ['maxlength' => 255, 'mandatory' => true, 'tl_class' => 'w50'],
            'sql'       => "varchar(255) NOT NULL default ''"
        ],
        'parentDcaForeignKey'       => [
            'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['parentDcaForeignKey'],
            'exclude'   => true,
            'inputType' => 'text',
            'eval'      => ['maxlength' => 255, 'mandatory' => true, 'tl_class' => 'w50'],
            'sql'       => "varchar(255) NOT NULL default ''"
        ],
        'childDcaName'              => [
            'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['childDcaName'],
            'exclude'   => true,
            'inputType' => 'text',
            'eval'      => ['maxlength' => 255, 'tl_class' => 'w50 clr'],
            'sql'       => "varchar(255) NOT NULL default ''"
        ],
        'addUserPermissions'        => [
            'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['addUserPermissions'],
            'exclude'   => true,
            'inputType' => 'checkbox',
            'eval'      => ['tl_class' => 'w50', 'submitOnChange' => true],
            'sql'       => "char(1) NOT NULL default ''"
        ],
        'userTemplate'              => [
            'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['userTemplate'],
            'default'   => 'eg_user_dca_default',
            'exclude'   => true,
            'inputType' => 'select',
            'options'   => \Controller::getTemplateGroup('eg_user_dca_'),
            'eval'      => ['mandatory' => true, 'tl_class' => 'w50 clr'],
            'sql'       => "varchar(255) NOT NULL default ''",
        ],
        'userGroupTemplate'         => [
            'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['userGroupTemplate'],
            'default'   => 'eg_user_group_dca_default',
            'exclude'   => true,
            'inputType' => 'select',
            'options'   => \Controller::getTemplateGroup('eg_user_group_dca_'),
            'eval'      => ['mandatory' => true, 'tl_class' => 'w50'],
            'sql'       => "varchar(255) NOT NULL default ''",
        ],
        'userLanguageTemplate'      => [
            'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['userLanguageTemplate'],
            'default'   => 'eg_lang_user_dca_default',
            'exclude'   => true,
            'inputType' => 'select',
            'options'   => \Controller::getTemplateGroup('eg_lang_user_dca_'),
            'eval'      => ['mandatory' => true, 'tl_class' => 'w50 clr'],
            'sql'       => "varchar(255) NOT NULL default ''",
        ],
        'userGroupLanguageTemplate' => [
            'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['userGroupLanguageTemplate'],
            'default'   => 'eg_lang_user_group_dca_default',
            'exclude'   => true,
            'inputType' => 'select',
            'options'   => \Controller::getTemplateGroup('eg_lang_user_group_dca_'),
            'eval'      => ['mandatory' => true, 'tl_class' => 'w50'],
            'sql'       => "varchar(255) NOT NULL default ''",
        ],
        'dataContainer'             => [
            'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['dataContainer'],
            'exclude'   => true,
            'inputType' => 'select',
            'options'   => [
                'Table'  => 'DC_Table',
                'File'   => 'DC_File',
                'Folder' => 'DC_Folder',
            ],
            'eval'      => ['mandatory' => true, 'tl_class' => 'w50 clr'],
            'sql'       => "varchar(255) NOT NULL default ''",
        ],
        'enableVersioning'          => [
            'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['enableVersioning'],
            'exclude'   => true,
            'inputType' => 'checkbox',
            'eval'      => ['tl_class' => 'w50'],
            'sql'       => "char(1) NOT NULL default ''"
        ],
        'addOnLoadCallbacks'        => [
            'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['addOnLoadCallbacks'],
            'exclude'   => true,
            'inputType' => 'checkbox',
            'eval'      => ['submitOnChange' => true, 'tl_class' => 'w50 clr'],
            'sql'       => "char(1) NOT NULL default ''"
        ],
        'onLoadCallbacks'           => [
            'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['onLoadCallbacks'],
            'exclude'   => true,
            'inputType' => 'multiColumnEditor',
            'eval'      => [
                'mandatory'         => true,
                'tl_class'          => 'w50 clr autoheight',
                'multiColumnEditor' => [
                    'fields' => [
                        'class'  => [
                            'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['onLoadCallbacks']['class'],
                            'exclude'   => true,
                            'inputType' => 'text',
                            'eval'      => ['groupStyle' => 'width: 180px']
                        ],
                        'method' => [
                            'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['onLoadCallbacks']['method'],
                            'exclude'   => true,
                            'inputType' => 'text',
                            'eval'      => ['groupStyle' => 'width: 180px']
                        ]
                    ],
                ],
            ],
            'sql'       => "blob NULL"
        ],
        'addOnSubmitCallbacks'      => [
            'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['addOnSubmitCallbacks'],
            'exclude'   => true,
            'inputType' => 'checkbox',
            'eval'      => ['submitOnChange' => true, 'tl_class' => 'w50 clr'],
            'sql'       => "char(1) NOT NULL default ''"
        ],
        'onSubmitCallbacks'         => [
            'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['onSubmitCallbacks'],
            'exclude'   => true,
            'inputType' => 'multiColumnEditor',
            'eval'      => [
                'mandatory'         => true,
                'tl_class'          => 'w50 clr autoheight',
                'multiColumnEditor' => [
                    'fields' => [
                        'class'  => [
                            'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['onSubmitCallbacks']['class'],
                            'exclude'   => true,
                            'inputType' => 'text',
                            'eval'      => ['groupStyle' => 'width: 180px']
                        ],
                        'method' => [
                            'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['onSubmitCallbacks']['method'],
                            'exclude'   => true,
                            'inputType' => 'text',
                            'eval'      => ['groupStyle' => 'width: 180px']
                        ],
                    ]
                ]
            ],
            'sql'       => "blob NULL"
        ],
        'sortingMode'               => [
            'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['sortingMode'],
            'exclude'   => true,
            'inputType' => 'select',
            'options'   => [0, 1, 2, 3, 4, 5, 6],
            'reference' => &$GLOBALS['TL_LANG']['tl_entity_template']['sortingMode']['options'],
            'eval'      => ['mandatory' => true, 'tl_class' => 'w50 clr'],
            'sql'       => "varchar(255) NOT NULL default ''",
        ],
        'addSortingFields'          => [
            'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['addSortingFields'],
            'exclude'   => true,
            'inputType' => 'checkbox',
            'eval'      => ['submitOnChange' => true, 'tl_class' => 'w50 clr'],
            'sql'       => "char(1) NOT NULL default ''"
        ],
        'sortingFields'             => [
            'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['sortingFields'],
            'exclude'   => true,
            'inputType' => 'multiColumnEditor',
            'eval'      => [
                'mandatory'         => true,
                'tl_class'          => 'w50 clr autoheight',
                'multiColumnEditor' => [
                    'fields' => [
                        'field'   => [
                            'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['sortingFields']['field'],
                            'exclude'   => true,
                            'inputType' => 'text',
                            'eval'      => ['groupStyle' => 'width: 180px']
                        ],
                        'sorting' => [
                            'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['sortingFields']['sorting'],
                            'exclude'   => true,
                            'inputType' => 'select',
                            'options'   => ['ASC', 'DESC'],
                            'eval'      => ['groupStyle' => 'width: 180px']
                        ],
                    ]
                ]
            ],
            'sql'       => "blob NULL"
        ],
        'addHeaderFields'           => [
            'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['addHeaderFields'],
            'exclude'   => true,
            'inputType' => 'checkbox',
            'eval'      => ['submitOnChange' => true, 'tl_class' => 'w50 clr'],
            'sql'       => "char(1) NOT NULL default ''"
        ],
        'headerFields'              => [
            'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['headerFields'],
            'exclude'   => true,
            'inputType' => 'multiColumnEditor',
            'eval'      => [
                'mandatory'         => true,
                'tl_class'          => 'w50 clr autoheight',
                'multiColumnEditor' => [
                    'fields' => [
                        'field' => [
                            'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['headerFields']['field'],
                            'exclude'   => true,
                            'inputType' => 'text',
                            'eval'      => ['groupStyle' => 'width: 180px']
                        ],
                    ]
                ]
            ],
            'sql'       => "blob NULL"
        ],
        'addGlobalOperations'       => [
            'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['addGlobalOperations'],
            'exclude'   => true,
            'inputType' => 'checkbox',
            'eval'      => ['submitOnChange' => true, 'tl_class' => 'w50 clr'],
            'sql'       => "char(1) NOT NULL default ''"
        ],
        'globalOperations'          => [
            'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['globalOperations'],
            'exclude'   => true,
            'inputType' => 'multiColumnEditor',
            'default'   => [
                ['act' => 'all']
            ],
            'eval'      => [
                'mandatory'         => true,
                'tl_class'          => 'w50 clr autoheight',
                'multiColumnEditor' => [
                    'sortable' => true,
                    'fields' => [
                        'act' => [
                            'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['globalOperations']['act'],
                            'exclude'   => true,
                            'inputType' => 'text',
                            'eval'      => ['groupStyle' => 'width: 180px']
                        ],
                    ]
                ]
            ],
            'sql'       => "blob NULL"
        ],
        'addOperations'             => [
            'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['addOperations'],
            'exclude'   => true,
            'inputType' => 'checkbox',
            'eval'      => ['submitOnChange' => true, 'tl_class' => 'w50 clr'],
            'sql'       => "char(1) NOT NULL default ''"
        ],
        'operations'                => [
            'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['operations'],
            'exclude'   => true,
            'inputType' => 'multiColumnEditor',
            'default'   => [
                ['act' => 'edit'],
                ['act' => 'copy'],
                ['act' => 'delete'],
                ['act' => 'toggle'],
                ['act' => 'show'],
            ],
            'eval'      => [
                'tl_class'          => 'w50 clr autoheight',
                'multiColumnEditor' => [
                    'sortable' => true,
                    'fields' => [
                        'act' => [
                            'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['operations']['act'],
                            'exclude'   => true,
                            'inputType' => 'text',
                            'eval'      => ['groupStyle' => 'width: 180px']
                        ]
                    ]
                ]
            ],
            'sql'       => "blob NULL"
        ],
        'addPublish'                => [
            'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['addPublish'],
            'exclude'   => true,
            'inputType' => 'checkbox',
            'eval'      => ['tl_class' => 'w50 clr'],
            'sql'       => "char(1) NOT NULL default ''"
        ],
        'addTitle'                  => [
            'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['addTitle'],
            'exclude'   => true,
            'inputType' => 'checkbox',
            'eval'      => ['tl_class' => 'w50'],
            'sql'       => "char(1) NOT NULL default ''"
        ],
        // languages
        'dcaLangTemplate'           => [
            'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['dcaLangTemplate'],
            'default'   => 'eg_lang_dca_default',
            'exclude'   => true,
            'inputType' => 'select',
            'options'   => \Controller::getTemplateGroup('eg_lang_dca_'),
            'eval'      => ['mandatory' => true, 'tl_class' => 'w50 clr'],
            'sql'       => "varchar(255) NOT NULL default ''",
        ],
        'modulesLangTemplate'       => [
            'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['modulesLangTemplate'],
            'default'   => 'eg_lang_modules_default',
            'exclude'   => true,
            'inputType' => 'select',
            'options'   => \Controller::getTemplateGroup('eg_lang_modules_'),
            'eval'      => ['mandatory' => true, 'tl_class' => 'w50'],
            'sql'       => "varchar(255) NOT NULL default ''",
        ],
        'localizedEntityName'       => [
            'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['localizedEntityName'],
            'exclude'   => true,
            'inputType' => 'text',
            'eval'      => ['mandatory' => true, 'tl_class' => 'w50'],
            'sql'       => "varchar(255) NOT NULL default ''",
        ],
        'localizedEntityNamePlural' => [
            'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['localizedEntityNamePlural'],
            'exclude'   => true,
            'inputType' => 'text',
            'eval'      => ['mandatory' => true, 'tl_class' => 'w50'],
            'sql'       => "varchar(255) NOT NULL default ''",
        ],
        'localizedModuleName'       => [
            'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['localizedModuleName'],
            'exclude'   => true,
            'inputType' => 'text',
            'eval'      => ['mandatory' => true, 'tl_class' => 'w50'],
            'sql'       => "varchar(255) NOT NULL default ''",
        ],
        // model
        'modelTemplate'             => [
            'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['modelTemplate'],
            'default'   => 'eg_model_default',
            'exclude'   => true,
            'inputType' => 'select',
            'options'   => \Controller::getTemplateGroup('eg_model_'),
            'eval'      => ['mandatory' => true, 'tl_class' => 'w50 clr'],
            'sql'       => "varchar(255) NOT NULL default ''",
        ],
        'entityClassName'           => [
            'label'     => &$GLOBALS['TL_LANG']['tl_entity_template']['entityClassName'],
            'exclude'   => true,
            'inputType' => 'text',
            'eval'      => ['mandatory' => true, 'tl_class' => 'w50'],
            'sql'       => "varchar(255) NOT NULL default ''",
        ]
    ]
];


class tl_entity_template extends \Backend
{
    public function generate($row, $href, $label, $title, $icon, $attributes)
    {
        $href .= '&id=' . $row['id'];

        if ($row['type'] == 'module') {
            return '<a href="' . $this->addToUrl($href) . '" title="' . specialchars($title) . '"' . $attributes . '>' . Image::getHtml($icon, $label) . '</a> ';
        }
    }

    public static function getDcaEntityTemplatesAsOptions()
    {
        return static::getEntityTemplatesAsOptions('dca');
    }

    public static function getEntityTemplatesAsOptions($strType)
    {
        $arrOptions = [];

        if (($objEntityTemplates = \HeimrichHannot\EntityGenerator\EntityTemplateModel::findBy('type', $strType)) !== null) {
            $arrOptions = array_combine($objEntityTemplates->fetchEach('id'), $objEntityTemplates->fetchEach('title'));
            asort($arrOptions);
        }

        return $arrOptions;
    }
}
