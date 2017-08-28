<?php

$arrLang = &$GLOBALS['TL_LANG']['tl_entity_template'];

/**
 * Fields
 */
$arrLang['title']            = ['Titel', 'Geben Sie hier einen beschreibenden Titel für die Vorlage ein.'];
$arrLang['type']             = ['Typ', 'Wählen Sie hier den Typ der Vorlage aus.'];
$arrLang['type']['module']   = 'Modul';
$arrLang['type']['dca']      = 'DCA';
$arrLang['type']['language'] = 'Sprache';
$arrLang['type']['model']    = 'Model';

$arrLang['addOutputDir']            = ['Eigenes Ausgabeverzeichnis auswählen', 'VORSICHT: Ist diese Option nicht aktiv, wird in "system/modules" ein Unterverzeichnis für das Modul erstellt.'];
$arrLang['outputDir']               = ['Ausgabeverzeichnis', 'Wählen Sie hier das Ausgabeverzeichnis aus (z. B. "files/generated_modules"). In diesem wird ein Unterverzeichnis für das erstellte Modul erzeugt.'];
$arrLang['moduleName']              = ['Name des Moduls', 'Geben Sie hier den Namen des Moduls ein, das durch die Vorlage erzeugt wird (z. B. "my_module").'];
$arrLang['moduleNamespace']         = ['Modul-Namespace', 'Geben Sie hier den Namespace ein, in dem das Modul liegen soll (z. B. "HeimrichHannot\MyModule").'];
$arrLang['addAssets']               = ['Assets-Ordner anlegen', 'Wählen Sie diese Option, um Assets-Ordner zu erstellen.'];
$arrLang['addConfig']               = ['config.php hinzufügen', 'Wählen Sie diese Option, um eine config.php zu erzeugen.'];
$arrLang['configTemplate']          = ['config.php-Template', 'Wählen Sie hier das Template für die config.php aus.'];
$arrLang['addBackendModule']        = ['Backend-Modul hinzufügen', 'Wählen Sie diese Option, um ein Backend-Modul hinzuzufügen.'];
$arrLang['moduleGroup']             = ['Modulgruppe', 'Wählen Sie hier aus, ob das Modul in eine neue oder eine bereits bestehende Gruppe hinzugefügt werden soll.'];
$arrLang['moduleGroup']['new']      = 'Zu neuer Modulgruppe hinzufügen';
$arrLang['moduleGroup']['existing'] = 'Zu bestehender Modulgruppe hinzufügen';
$arrLang['existingModuleGroupName'] = ['Modulgruppe', 'Geben Sie hier den Namen der Modulgruppe ein, in die das neue Modul eingefügt werden soll (z. B. "content").'];
$arrLang['addDcas']                 = ['DCA hinzufügen', 'Wählen Sie diese Option, um eine DCA-Datei zu erzeugen.'];
$arrLang['dcas']                    = ['DCA-Vorlagen', 'Wählen Sie hier die DCA-Vorlagen aus, die zu diesem Modul gehören. Bitte wählen Sie hier keine Eltern-DCAs aus, da diese über die Eigenschaft "Eltern-DCA-Vorlage" in einer DCA-Vorlage zugewiesen werden müssen.'];
$arrLang['parentDca']               = ['Eltern-DCA-Vorlage', 'Wählen Sie hier die Eltern-DCA-Vorlage aus, die zu diesem DCA gehört.'];
$arrLang['addLanguages']            = ['Sprachen hinzufügen', 'Wählen Sie diese Option, um Sprachdateien ("languages") zu erzeugen.'];
$arrLang['addModel']                = ['Model hinzufügen', 'Wählen Sie diese Option, um für den DCA eine Model-Klasse zu erzeugen.'];
$arrLang['entityClassName']         = ['Klassenname', 'Geben Sie hier den Klassennamen des Models ohne Namespace ein (z. B. Entity).'];

$arrLang['dcaTemplate']                 = ['DCA-Template', 'Wählen Sie hier das Template für die DCA-Datei aus.'];
$arrLang['dcaName']                     = ['DCA-Name', 'Geben Sie hier den Namen der DCA-Datei (ohne "tl_") ein (z. B. "my_entity").'];
$arrLang['addParentDca']                = ['Eltern-DCA hinzufügen', 'Wählen Sie diese Option, wenn die neue Entität eine Elternentität erhalten soll.'];
$arrLang['parentDcaTemplate']           = ['Eltern-DCA-Template', 'Wählen Sie hier das Template für die Eltern-DCA-Datei aus.'];
$arrLang['parentDcaName']               = ['Eltern-DCA-Name', 'Geben Sie hier den Namen des Eltern-DCAs (ohne "tl_") ein (z. B. "my_parent_entity").'];
$arrLang['parentDcaForeignKey']         = ['Eltern-DCA-Fremdschlüsselname', 'Geben Sie hier den Namen des gewünschten Eltern-DCA-Fremdschlüssels ein (z. B. "title").'];
$arrLang['childDcaName']                = ['Kind-DCA-Name', 'Geben Sie hier den Namen des Kind-DCAs (ohne "tl_") ein (z. B. "my_child_entity").'];
$arrLang['addUserPermissions']          = ['Benutzerrechte für ein Archiv hinzufügen', 'Wählen Sie diese Option, für ein Archiv-DCA Benutzerrechte hinzuzufügen. WICHTIG: Diese Einstellung ist nur für Archive sinnvoll!'];
$arrLang['userTemplate']                = ['Benutzer-DCA-Template', 'Wählen Sie hier das Template für die tl_user-Dateien aus.'];
$arrLang['userGroupTemplate']           = ['Benutzergruppe-DCA-Template', 'Wählen Sie hier das Template für die tl_user_group-Dateien aus.'];
$arrLang['dataContainer']               = ['DataContainer-Typ', 'Wählen Sie hier den DataContainer-Typ aus.'];
$arrLang['enableVersioning']            = ['Versionierung aktivieren', 'Wählen Sie diese Option, um die Contao-Versionierung für diesen DCA zu aktivieren.'];
$arrLang['addOnLoadCallbacks']          = ['OnLoad-Callbacks hinzufügen', 'Wählen Sie diese Option, um onLoad-Callbacks hinzuzufügen.'];
$arrLang['onLoadCallbacks']             = ['OnLoad-Callbacks', 'Geben Sie hier die gewünschten Callbacks ein.'];
$arrLang['onLoadCallbacks']['class']    = ['Klasse', 'Geben Sie hier den Klassennamen inklusive dem kompletten Namespace ein (z. B. "HeimrichHannot\MyModule\MyClass").'];
$arrLang['onLoadCallbacks']['method']   = ['Methode', 'Geben Sie hier den Methodennamen ein (z. B. "doStuff").'];
$arrLang['addOnSubmitCallbacks']        = ['OnSubmit-Callbacks hinzufügen', 'Wählen Sie diese Option, um onSubmit-Callbacks hinzuzufügen.'];
$arrLang['onSubmitCallbacks']           = ['OnSubmit-Callbacks', 'Geben Sie hier die gewünschten Callbacks ein.'];
$arrLang['onSubmitCallbacks']['class']  = ['Klasse', 'Geben Sie hier den Klassennamen inklusive dem kompletten Namespace ein (z. B. "HeimrichHannot\MyModule\MyClass").'];
$arrLang['onSubmitCallbacks']['method'] = ['Methode', 'Geben Sie hier den Methodennamen ein (z. B. "doStuff").'];
$arrLang['sortingMode']                 = ['Sortiermodus', 'Wählen Sie hier den gewünschten Sortiermodus aus.'];
$arrLang['sortingMode']['options']      = [
    'Keine Sortierung',
    'Sortierung nach einem festen Feld',
    'Sortierung nach einem variablen Feld',
    'Sortierung anhand der Elterntabelle',
    'Darstellung der Kinddatensätze eines Elterndatensatzes (vgl. Stylesheets-Modul)',
    'Darstellung als Baum (vgl. Seitenstruktur)',
    'Sortierung der Kinddatensätze anhand eines Baumes (vgl. Artikelverwaltung)'
];
$arrLang['addSortingFields']            = ['Sortierfelder hinzufügen', 'Wählen Sie diese Option, um dem DCA Sortierfelder zuzuweisen.'];
$arrLang['sortingFields']               = ['Sortierfelder', 'Geben Sie hier die gewünschten Sortierfelder ein.'];
$arrLang['sortingFields']['field']      = ['Feldname', 'Geben Sie hier den Namen des Sortierfelds ein (z. B. "title").'];
$arrLang['sortingFields']['sorting']    = ['Richtung', 'Wählen Sie hier die Sortierrichtung aus.'];
$arrLang['addHeaderFields']             = ['Header-Felder hinzufügen', 'Wählen Sie diese Option, um dem DCA Header-Felder zuzuweisen.'];
$arrLang['headerFields']                = ['Header-Felder', 'Geben Sie hier die gewünschten Header-Felder ein.'];
$arrLang['headerFields']['field']       = ['Feldname', 'Geben Sie hier den Namen des Header-Felds ein (z. B. "title").'];
$arrLang['addGlobalOperations']         = ['Globale Operationen hinzufügen', 'Wählen Sie diese Option, um dem DCA globale Operationen hinzuzufügen.'];
$arrLang['globalOperations']            = ['Globale Operationen', 'Geben Sie hier die gewünschten globalen Operationen ein.'];
$arrLang['globalOperations']['act']     = ['Name', ''];
$arrLang['addOperations']               = ['Operationen hinzufügen', 'Wählen Sie diese Option, um dem DCA Operationen hinzuzufügen.'];
$arrLang['operations']                  = ['Operationen', 'Geben Sie hier die gewünschten Operationen ein.'];
$arrLang['operations']['act']           = ['Name', ''];
$arrLang['addPublish']                  = ['Veröffentlichen hinzufügen', 'Wählen Sie diese Option, um im DCA Funktionen zum Veröffentlichen aktivieren.'];
$arrLang['addTitle']                    = ['Titelfeld hinzufügen', 'Wählen Sie diese Option, um dem DCA ein Titel-Feld ("title") hinzuzufügen.'];

$arrLang['dcaLangTemplate']           = ['Sprach-Template', 'Wählen Sie hier das Template für die Sprachdateien aus ("languages/de/tl_*.php").'];
$arrLang['modulesLangTemplate']       = ['Modules-Template', 'Wählen Sie hier das Template für die Modules-Sprachdatei aus ("languages/de/modules.php").'];
$arrLang['localizedEntityName']       = ['Lokalisierter Name der Entität', 'Geben Sie hier den übersetzten Namen der Entität im Singular ein (z. B. "Entität").'];
$arrLang['localizedEntityNamePlural'] = ['Lokalisierter Name der Entität (Plural)', 'Geben Sie hier den übersetzten Namen der Entität im Plural ein (z. B. "Entitäten").'];
$arrLang['localizedModuleName']       = ['Lokalisierter Modulname', 'Geben Sie hier den übersetzten Modulnamen ein (z. B. "Mein Modul").'];

$arrLang['modelTemplate'] = ['Model-Template', 'Wählen Sie hier das Template für die Models aus.'];

/**
 * Legends
 */
$arrLang['general_legend']  = 'Allgemeine Einstellungen';
$arrLang['module_legend']   = 'Moduleinstellungen';
$arrLang['entity_legend']   = 'Entitätseinstellungen';
$arrLang['language_legend'] = 'Spracheinstellungen';
$arrLang['model_legend']    = 'Model-Einstellungen';


/**
 * Buttons
 */
$arrLang['new']      = ['Neue Vorlage', 'Eine neue Vorlage erstellen'];
$arrLang['show']     = ['Vorlage Details', 'Die Details der Vorlage ID %s anzeigen'];
$arrLang['edit']     = ['Vorlage bearbeiten', 'Vorlage ID %s bearbeiten'];
$arrLang['copy']     = ['Vorlage duplizieren', 'Vorlage ID %s duplizieren'];
$arrLang['delete']   = ['Vorlage löschen', 'Vorlage ID %s löschen'];
$arrLang['generate'] = ['Dateien im Zielverzeichnis erstellen', 'Dateien im Zielverzeichnis erstellen'];
