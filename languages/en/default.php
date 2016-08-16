<?php

$arrLang = &$GLOBALS['TL_LANG']['MSC']['entity_generator'];

/**
 * Messages
 */
$arrLang['outputDirNotFound'] = 'The output directory of this template was not found';
$arrLang['assetsSuccessfullyGenerated'] = 'The assets folder was successfully created: "%s".';
$arrLang['fileSuccessfullyGenerated'] = 'The file "%s" has been successfully generated.';
$arrLang['updateDatabase'] = 'Your module has been successfully produced. Remember, to perform a  <a style="text-decoration: underline;" href="contao/main.php?do=composer&update=database">database-update</a> before using.';

/**
 * Buttons
 */
$arrLang['new'] = array('New %s', '%s create');
$arrLang['show'] = array('%s details', 'Show the details of %s ID %s');
$arrLang['edit'] = array('Edit %s', 'Edit %s ID %s');
$arrLang['editheader'] = array('Edit %s settings', 'Edit %s settings ID %s');
$arrLang['copy'] = array('Duplicate %s', 'Duplicate %s ID %s');
$arrLang['delete'] = array('Delete %s', 'Delete %s ID %s');
$arrLang['toggle'] = array('Publish/unpublish %s', 'Publish/unpublish %s ID %s');