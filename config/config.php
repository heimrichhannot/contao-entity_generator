<?php

/**
 * Backend modules
 */
$GLOBALS['BE_MOD']['devtools']['entity_generator'] = array(
	'tables' => array('tl_entity_template'),
	'generate' => array('HeimrichHannot\EntityGenerator\ModuleEntityGenerator', 'generate'),
	'icon'   => 'system/modules/entity_generator/assets/img/icon.png',
);