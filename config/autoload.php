<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2016 Leo Feyer
 *
 * @license LGPL-3.0+
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'HeimrichHannot',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Modules
	'HeimrichHannot\EntityGenerator\ModuleEntityGenerator' => 'system/modules/entity_generator/modules/ModuleEntityGenerator.php',

	// Models
	'HeimrichHannot\EntityGenerator\EntityTemplateModel'   => 'system/modules/entity_generator/models/EntityTemplateModel.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'eg_lang_modules_default'        => 'system/modules/entity_generator/templates/languages',
	'eg_lang_user_dca_default'       => 'system/modules/entity_generator/templates/languages',
	'eg_lang_dca_default'            => 'system/modules/entity_generator/templates/languages',
	'eg_lang_user_group_dca_default' => 'system/modules/entity_generator/templates/languages',
	'eg_config_default'              => 'system/modules/entity_generator/templates/config',
	'htaccess'                       => 'system/modules/entity_generator/templates/assets',
	'eg_model_default'               => 'system/modules/entity_generator/templates/models',
	'eg_user_group_dca_default'      => 'system/modules/entity_generator/templates/dca',
	'eg_user_dca_default'            => 'system/modules/entity_generator/templates/dca',
	'eg_dca_archive_default'         => 'system/modules/entity_generator/templates/dca',
	'eg_dca_default'                 => 'system/modules/entity_generator/templates/dca',
));
