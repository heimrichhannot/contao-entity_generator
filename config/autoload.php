<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2015 Leo Feyer
 *
 * @package Entity_generator
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
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
	'eg_lang_modules_default'     => 'system/modules/entity_generator/templates/languages',
	'eg_lang_dca_default'         => 'system/modules/entity_generator/templates/languages',
	'eg_lang_dca_archive_default' => 'system/modules/entity_generator/templates/languages',
	'eg_config_default'           => 'system/modules/entity_generator/templates/config',
	'eg_model_default'            => 'system/modules/entity_generator/templates/models',
	'eg_model_archive_default'    => 'system/modules/entity_generator/templates/models',
	'eg_user_group_dca_default'   => 'system/modules/entity_generator/templates/dca',
	'eg_user_dca_default'         => 'system/modules/entity_generator/templates/dca',
	'eg_dca_archive_default'      => 'system/modules/entity_generator/templates/dca',
	'eg_dca_default'              => 'system/modules/entity_generator/templates/dca',
));
