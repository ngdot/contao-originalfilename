<?php

// Anpassung der Palette
$GLOBALS['TL_DCA']['tl_files']['palettes']['default'] = str_replace (
    'name',
    'name,original_name',
    $GLOBALS['TL_DCA']['tl_files']['palettes']['default']
);

// Hinzufügen der Feld-Konfiguration
$GLOBALS['TL_DCA']['tl_files']['fields']['original_name'] = array (
    'label'     => &$GLOBALS['TL_LANG']['tl_files']['original_name'],
    'exclude'   => true,
    'inputType' => 'text',
    'eval'      => array(
    	'tl_class' => 'w50'
    ),
    'sql'       => "varchar(255) NOT NULL default ''"
);