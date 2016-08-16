<?php

$arrLang = &$GLOBALS['TL_LANG']['tl_entity_template'];

/**
 * Fields
 */
$arrLang['title'] = array('Title', 'Enter a descriptive title for the template.');
$arrLang['type'] = array('Type', 'Select the type of template.');
$arrLang['type']['module'] = 'Module';
$arrLang['type']['dca'] = 'DCA';
$arrLang['type']['language'] = 'Language';
$arrLang['type']['model'] = 'Model';

$arrLang['addOutputDir'] = array('Select custom output directory', 'CAUTION: Is this option not active, a subdirectory for the module is in "system/modules" will be created.');
$arrLang['outputDir'] = array('Output directory', 'Here you can select the output directory (eg. "files/generated_modules"). In this subdirectory the created module will be generated.');
$arrLang['moduleName'] = array('Module name', 'Enter the name of the module that is created by the template (e.g. "my_module").');
$arrLang['moduleNamespace'] = array('Module namespace', 'Enter here the namespace of the module (e.g. "HeimrichHannot\MyModule").');
$arrLang['addAssets'] = array('Create assets folder', 'Select this option to create assets folder.');
$arrLang['addConfig'] = array('Add config.php', 'Select this option to create the config.php.');
$arrLang['configTemplate'] = array('config.php template', 'Select the template for the config.php.');
$arrLang['addBackendModule'] = array('Add a back end module', 'Select this option to add a back end module.');
$arrLang['moduleGroup'] = array('Modulegroup', 'Select if the module should be added to an new or existing group.');
$arrLang['moduleGroup']['new'] = 'Add to new module group';
$arrLang['moduleGroup']['existing'] = 'Add to existing module group';
$arrLang['existingModuleGroupName'] = array('Module group', 'Enter the name of the module group, in which the new module should be inserted (eg. As "content").');
$arrLang['addDcas'] = array('Add DCA', 'Select this option to create a DCA file.');
$arrLang['dcas'] = array('DCA templates', 'Select the DCA templates that belong to this module. Please do not select any parent DCAs, since they must be assigned to the properties of "parent-DCA template" in a DCA template.');
$arrLang['parentDca'] = array('Parents DCA template', 'Select the parent DCA template that is part of this DCA.');
$arrLang['addLanguages'] = array('Add language', 'Select this option to generate language files ("languages").');
$arrLang['addModel'] = array('Add model', 'Select this option to generate a model class for the DCA.');
$arrLang['entityClassName'] = array('Class name', 'Enter the class name of the model without a namespace (e.g. Entity).');

$arrLang['dcaTemplate'] = array('DCA template', 'Select the template for DCA file.');
$arrLang['dcaName'] = array('DCA name', 'Enter the name of the DCA file (without "tl_") (for. Example "my_entity").');
$arrLang['addParentDca'] = array('Add Parent DCA', 'Select this option if the new entity should be obtained a parent entity.');
$arrLang['parentDcaTemplate'] = array('Parent DCA template', 'Select the template for the parent DCA file.');
$arrLang['parentDcaName'] = array('Parent DCA name', 'Enter the name of the parent DCA (without "tl_") (for example "my_parent_entity").');
$arrLang['parentDcaForeignKey'] = array('Parent DCA foreign key name', 'Enter the name of the parent DCA foreign key (for example: "title").');
$arrLang['childDcaName'] = array('Child DCA name', 'Enter the name of the child DCA (without "tl_") (for example: "my_child_entity").');
$arrLang['addUserPermissions'] = array('Add user permissions to the archive', 'Select this option to add user rights to an archive DCA. IMPORTANT: This setting is only useful for archives!');
$arrLang['userTemplate'] = array('User DCA template', 'Select the template for the tl_user files.');
$arrLang['userGroupTemplate'] = array('User group DCA template', 'Select the template for the tl_user group files.');
$arrLang['dataContainer'] = array('DataContainer type', 'Select the DataContainer type.');
$arrLang['enableVersioning'] = array('Add versioning', 'Select this option to activate the contao versioning for this DCA.');
$arrLang['addOnLoadCallbacks'] = array('Add onload callbacks', 'Select this option to add onload callbacks.');
$arrLang['onLoadCallbacks'] = array('onload callbacks', 'Enter the required callbacks.');
$arrLang['onLoadCallbacks']['class'] = array('Class', 'Enter the class name including the complete namespace (e.g. "HeimrichHannot\MyModule\MyClass")');
$arrLang['onLoadCallbacks']['method'] = array('Method', 'Enter the method name (e.g. "doStuff").');
$arrLang['addOnSubmitCallbacks'] = array('Add onsubmit callbacks', 'Select this option to add onsubmit callbacks.');
$arrLang['onSubmitCallbacks'] = array('onsubmit callbacks', 'Enter the required callbacks.');
$arrLang['onSubmitCallbacks']['class'] = array('Class', 'Enter the class name including the complete namespace (e.g. "HeimrichHannot\MyModule\MyClass")');
$arrLang['onSubmitCallbacks']['method'] = array('Method', 'Enter the method name (e.g. "doStuff").');
$arrLang['sortingMode'] = array('Sorting mode', 'Here you can select the desired sorting mode.');
$arrLang['sortingMode']['options'] = array(
	'Records are not sorted',
	'Records are sorted by a fixed field',
	'Records are sorted by a switchable field',
	'Records are sorted by the parent table',
	'Displays the child records of a parent record (see style sheets module)',
	'Records are displayed as tree (see site structure)',
	'Displays the child records within a tree structure (see articles module)'
);
$arrLang['addSortingFields'] = array('Add sorting fields', 'Select this option to assign the DCA sorting fields.');
$arrLang['sortingFields'] = array('Sorting fields', 'Enter the desired sorting fields.');
$arrLang['sortingFields']['field'] = array('Field name', 'Enter the name of the sort field (for example: "title").');
$arrLang['sortingFields']['sorting'] = array('Direction', 'Here you can select the sort direction.');
$arrLang['addHeaderFields'] = array('Add header fields', 'Select this option to assign the DCA header fields.');
$arrLang['headerFields'] = array('Header fields', 'Enter the required header fields.');
$arrLang['headerFields']['field'] = array('Field name', 'Enter the name of the header field (for example: "title").');
$arrLang['addGlobalOperations'] = array('Add global operations', 'Select this option to enter the DCA global operations.');
$arrLang['globalOperations'] = array('Global operations', 'Enter the desired global operations.');
$arrLang['globalOperations']['act'] = array('Name', 'Enter a name.');
$arrLang['addOperations'] = array('Add operations', 'Select this option to enter the DCA operations.');
$arrLang['operations'] = array('Operations', 'Enter the desired operations.');
$arrLang['operations']['act'] = array('Name', 'Enter a name.');
$arrLang['addPublish'] = array('Add publish/unpublish', 'Select this option to activate the features publish/unpublish for this DCA.');
$arrLang['addTitle'] = array('Add title field', 'Select this option to add a title field to this DCA ("title").');

$arrLang['dcaLangTemplate'] = array('Language template', 'Here you can select the template for the language files ("languages/de/tl_*.php").');
$arrLang['modulesLangTemplate'] = array('Modules template', 'Here you can select the template for the module-language file ("languages/de/modules.php").');
$arrLang['localizedEntityName'] = array('Localized name of the entity (singular)', 'Enter the translated name of the entity in the singular (for example: "Entity").');
$arrLang['localizedEntityNamePlural'] = array('Localized Name of entity (plural)', 'Enter the translated name of the entity in the plural (for example: "Entities").');
$arrLang['localizedModuleName'] = array('Localized module name', 'Enter the translated module name (e.g. "My module")');

$arrLang['modelTemplate'] = array('Model template', 'Select the template for the models.');

/**
 * Legends
 */
$arrLang['general_legend'] = 'General settings';
$arrLang['module_legend'] = 'Module settings';
$arrLang['entity_legend'] = 'Entity settings';
$arrLang['language_legend'] = 'Language settings';
$arrLang['model_legend'] = 'Model settings';


/**
 * Buttons
 */
$arrLang['new'] = array('New template', 'Create a new template');
$arrLang['show'] = array('Template details', 'Shwo the details of template ID %s');
$arrLang['edit'] = array('Edit template', 'Edit template ID %s');
$arrLang['copy'] = array('Duplicate template', 'Duplicate template ID %s');
$arrLang['delete'] = array('Delete template', 'Delete template ID %s');
$arrLang['generate'] = array('Create files in the destination directory', 'Create files in the destination directory');
