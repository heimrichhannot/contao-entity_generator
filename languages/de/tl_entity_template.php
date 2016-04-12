<?php

$arrLang = &$GLOBALS['TL_LANG']['tl_entity_template'];

/**
 * Fields
 */
$arrLang['title'] = array('Titel', 'Geben Sie hier einen beschreibenden Titel für die Vorlage ein.');
$arrLang['outputDir'] = array('Ausgabeverzeichnis', 'Wählen Sie hier das Ausgabeverzeichnis aus (z. B. "files/generated_modules"). In diesem wird ein Unterverzeichnis für das erstellte Modul erzeugt. Wird hier nichts ausgewählt, ist das Ausgabeverzeichnis "files".');

$arrLang['moduleName'] = array('Name des Moduls', 'Geben Sie hier den Namen des Moduls ein, das durch die Vorlage erzeugt wird (z. B. "my_module").');
$arrLang['moduleNamespace'] = array('Modul-Namespace', 'Geben Sie hier den Namespace ein, in dem das Modul liegen soll (z. B. "HeimrichHannot\MyModule").');
$arrLang['addAssets'] = array('Assets-Ordner anlegen', 'Wählen Sie diese Option, um Assets-Ordner zu erstellen.');
$arrLang['addConfig'] = array('config.php hinzufügen', 'Wählen Sie diese Option, um eine config.php zu erzeugen.');
$arrLang['configTemplate'] = array('config.php-Template', 'Wählen Sie hier das Template für die config.php aus.');
$arrLang['addBackendModule'] = array('Backend-Modul hinzufügen', 'Wählen Sie diese Option, um ein Backend-Modul hinzuzufügen.');
$arrLang['insertInExistingModuleGroup'] = array('Modul zu bestehender Modulgruppe hinzufügen', 'Wählen Sie diese Option, um das zu erzeugenede Modul in eine bestehende Modulgruppe hinzuzufügen.');
$arrLang['existingModuleGroupName'] = array('Modulgruppe', 'Geben Sie hier den Namen der Modulgruppe ein, in die das neue Modul eingefügt werden soll (z. B. "content").');

$arrLang['addDca'] = array('DCA hinzufügen', 'Wählen Sie diese Option, um eine DCA-Datei zu erzeugen.');
$arrLang['dcaTemplate'] = array('DCA-Template', 'Wählen Sie hier das Template für die DCA-Datei aus.');
$arrLang['dcaName'] = array('DCA-Name', 'Geben Sie hier den Namen der DCA-Datei (ohne "tl_") ein (z. B. "my_entity").');
$arrLang['parentDcaName'] = array('Eltern-DCA-Name', 'Geben Sie hier den Namen des Eltern-DCAs (ohne "tl_") ein (z. B. "my_parent_entity").');
$arrLang['parentDcaForeignKey'] = array('Eltern-DCA-Fremdschlüsselname', 'Geben Sie hier den Namen des gewünschten Eltern-DCA-Fremdschlüssels ein (z. B. "title").');
$arrLang['childDcaName'] = array('Kind-DCA-Name', 'Geben Sie hier den Namen des Kind-DCAs (ohne "tl_") ein (z. B. "my_child_entity").');
$arrLang['type'] = array('Typ', 'Wählen Sie hier den Typ des DCAs aus.');
$arrLang['dataContainer'] = array('DataContainer-Typ', 'Wählen Sie hier den DataContainer-Typ aus.');
$arrLang['enableVersioning'] = array('Versionierung aktivieren', 'Wählen Sie diese Option, um die Contao-Versionierung für diesen DCA zu aktivieren.');
$arrLang['addOnLoadCallbacks'] = array('OnLoad-Callbacks hinzufügen', 'Wählen Sie diese Option, um onLoad-Callbacks hinzuzufügen.');
$arrLang['onLoadCallbacks'] = array('OnLoad-Callbacks', 'Geben Sie hier die gewünschten Callbacks ein.');
$arrLang['onLoadCallbacks']['class'] = array('Klasse', 'Geben Sie hier den Klassennamen inklusive dem kompletten Namespace ein (z. B. "HeimrichHannot\MyModule\MyClass").');
$arrLang['onLoadCallbacks']['method'] = array('Methode', 'Geben Sie hier den Methodennamen ein (z. B. "doStuff").');
$arrLang['addOnSubmitCallbacks'] = array('OnSubmit-Callbacks hinzufügen', 'Wählen Sie diese Option, um onSubmit-Callbacks hinzuzufügen.');
$arrLang['onSubmitCallbacks'] = array('OnSubmit-Callbacks', 'Geben Sie hier die gewünschten Callbacks ein.');
$arrLang['onSubmitCallbacks']['class'] = array('Klasse', 'Geben Sie hier den Klassennamen inklusive dem kompletten Namespace ein (z. B. "HeimrichHannot\MyModule\MyClass").');
$arrLang['onSubmitCallbacks']['method'] = array('Methode', 'Geben Sie hier den Methodennamen ein (z. B. "doStuff").');
$arrLang['sortingMode'] = array('Sortiermodus', 'Wählen Sie hier den gewünschten Sortiermodus aus.');
$arrLang['sortingMode']['options'] = array(
	'Keine Sortierung',
	'Sortierung nach einem festen Feld',
	'Sortierung nach einem variablen Feld',
	'Sortierung anhand der Elterntabelle',
	'Darstellung der Kinddatensätze eines Elterndatensatzes (vgl. Stylesheets-Modul)',
	'Darstellung als Baum (vgl. Seitenstruktur)',
	'Sortierung der Kinddatensätze anhand eines Baumes (vgl. Artikelverwaltung)'
);
$arrLang['addSortingFields'] = array('Sortierfelder hinzufügen', 'Wählen Sie diese Option, um dem DCA Sortierfelder zuzuweisen.');
$arrLang['sortingFields'] = array('Sortierfelder', 'Geben Sie hier die gewünschten Sortierfelder ein.');
$arrLang['sortingFields']['field'] = array('Feldname', 'Geben Sie hier den Namen des Sortierfelds ein (z. B. "title").');
$arrLang['sortingFields']['sorting'] = array('Richtung', 'Wählen Sie hier die Sortierrichtung aus.');
$arrLang['addHeaderFields'] = array('Header-Felder hinzufügen', 'Wählen Sie diese Option, um dem DCA Header-Felder zuzuweisen.');
$arrLang['headerFields'] = array('Header-Felder', 'Geben Sie hier die gewünschten Header-Felder ein.');
$arrLang['headerFields']['field'] = array('Feldname', 'Geben Sie hier den Namen des Header-Felds ein (z. B. "title").');
$arrLang['addGlobalOperations'] = array('Globale Operationen hinzufügen', 'Wählen Sie diese Option, um dem DCA globale Operationen hinzuzufügen.');
$arrLang['globalOperations'] = array('Globale Operationen', 'Geben Sie hier die gewünschten globalen Operationen ein.');
$arrLang['globalOperations']['act'] = array('Name', 'Geben Sie hier einen Namen ein.');
$arrLang['addOperations'] = array('Operationen hinzufügen', 'Wählen Sie diese Option, um dem DCA Operationen hinzuzufügen.');
$arrLang['operations'] = array('Operationen', 'Geben Sie hier die gewünschten Operationen ein.');
$arrLang['operations']['act'] = array('Name', 'Geben Sie hier einen Namen ein.');
$arrLang['addPublish'] = array('Veröffentlichen hinzufügen', 'Wählen Sie diese Option, um im DCA Funktionen zum Veröffentlichen aktivieren.');

$arrLang['addLanguages'] = array('Sprachdateien hinzufügen', 'Wählen Sie diese Option, um Sprachdateien ("languages") zu erzeugen.');
$arrLang['dcaLangTemplate'] = array('Sprach-Template', 'Wählen Sie hier das Template für die Sprachdateien aus ("languages/de/tl_*.php").');
$arrLang['modulesLangTemplate'] = array('Modules-Template', 'Wählen Sie hier das Template für die Modules-Sprachdatei aus ("languages/de/modules.php").');
$arrLang['localizedEntityName'] = array('Lokalisierter Name der Entität', 'Geben Sie hier den übersetzten Namen der Entität im Singular ein (z. B. "Entität").');
$arrLang['localizedEntityNamePlural'] = array('Lokalisierter Name der Entität (Plural)', 'Geben Sie hier den übersetzten Namen der Entität im Plural ein (z. B. "Entitäten").');
$arrLang['localizedModuleName'] = array('Lokalisierter Modulname', 'Geben Sie hier den übersetzten Modulnamen ein (z. B. "Mein Modul").');

$arrLang['addModels'] = array('Models hinzufügen', 'Wählen Sie diese Option, um Model-Dateien ("models") zu erzeugen.');
$arrLang['modelTemplate'] = array('Model-Template', 'Wählen Sie hier das Template für die Models aus.');

/**
 * Legends
 */
$arrLang['general_legend'] = 'Allgemeine Einstellungen';
$arrLang['module_legend'] = 'Moduleinstellungen';
$arrLang['entity_legend'] = 'Entitätseinstellungen';
$arrLang['language_legend'] = 'Spracheinstellungen';
$arrLang['model_legend'] = 'Model-Einstellungen';


/**
 * Buttons
 */
$arrLang['new'] = array('Neue Vorlage', 'Eine neue Vorlage erstellen');
$arrLang['show'] = array('Vorlage Details', 'Die Details der Vorlage ID %s anzeigen');
$arrLang['edit'] = array('Vorlage bearbeiten', 'Vorlage ID %s bearbeiten');
$arrLang['copy'] = array('Vorlage duplizieren', 'Vorlage ID %s duplizieren');
$arrLang['delete'] = array('Vorlage löschen', 'Vorlage ID %s löschen');
$arrLang['generate'] = array('Dateien im Zielverzeichnis erstellen', 'Dateien im Zielverzeichnis erstellen');
