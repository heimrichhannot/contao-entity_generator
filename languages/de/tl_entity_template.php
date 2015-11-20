<?php

$arrLang = &$GLOBALS['TL_LANG']['tl_entity_template'];

/**
 * Fields
 */
$arrLang['title'] = array('Titel', 'Geben Sie hier einen beschreibenden Titel für die Vorlage ein.');
$arrLang['outputDir'] = array('Ausgabeverzeichnis', 'Wählen Sie hier das Ausgabeverzeichnis aus (z. B. "files/generated_modules"). In diesem wird ein Unterverzeichnis für das erstellte Modul erzeugt. Wird hier nichts ausgewählt, ist das Ausgabeverzeichnis "files".');

$arrLang['moduleName'] = array('Name des Moduls', 'Geben Sie hier den Namen des Moduls ein, das durch die Vorlage erzeugt wird (z. B. "my_module").');
$arrLang['moduleNamespace'] = array('Modul-Namespace', 'Geben Sie hier den Namespace ein, in dem das Modul liegen soll (z. B. "HeimrichHannot\MyModule").');

$arrLang['sortingMode']['options'] = array(
	'Keine Sortierung',
	'Sortierung nach einem festen Feld',
	'Sortierung nach einem variablen Feld',
	'Sortierung anhand der Elterntabelle',
	'Darstellung der Kinddatensätze eines Elterndatensatzes (vgl. Stylesheets-Modul)',
	'Darstellung als Baum (vgl. Seitenstruktur)',
	'Sortierung der Kinddatensätze anhand eines Baumes (vgl. Artikelverwaltung)'
);

/**
 * Legends
 */
$arrLang['general_legend'] = 'Allgemeine Einstellungen';
$arrLang['module_legend'] = 'Moduleinstellungen';
$arrLang['entity_legend'] = 'Entitätseinstellungen';
$arrLang['language_legend'] = 'Spracheinstellungen';
$arrLang['model_legend'] = 'Modelleinstellungen';


/**
 * Buttons
 */
$arrLang['new'] = array('Neue Vorlage', 'Eine neue Vorlage erstellen');
$arrLang['show'] = array('Vorlage Details', 'Die Details der Vorlage ID %s anzeigen');
$arrLang['edit'] = array('Vorlage bearbeiten', 'Vorlage ID %s bearbeiten');
$arrLang['copy'] = array('Vorlage duplizieren', 'Vorlage ID %s duplizieren');
$arrLang['delete'] = array('Vorlage löschen', 'Vorlage ID %s löschen');
$arrLang['generate'] = array('Dateien im Zielverzeichnis erstellen', 'Dateien im Zielverzeichnis erstellen');
