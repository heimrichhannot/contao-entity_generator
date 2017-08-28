<?php

/**
 * Backend modules
 */
$GLOBALS['BE_MOD']['system']['entity_generator'] = [
	'tables' => ['tl_entity_template'],
	'generate' => ['HeimrichHannot\EntityGenerator\ModuleEntityGenerator', 'generate'],
	'icon'   => 'system/modules/entity_generator/assets/img/icon.png',
];

/**
 * Models
 */
$GLOBALS['TL_MODELS']['tl_entity_template'] = 'HeimrichHannot\EntityGenerator\EntityTemplateModel';