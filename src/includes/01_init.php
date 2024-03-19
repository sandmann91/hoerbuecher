<?php

$_system_id = 4;

// Benutzer für 
$setUserForDev = false;

if (isset($_GET['dev-param']) && $_GET['dev-param'] == 'd29QQ9RnHlIwaZI7Ep43!LOqN') {
    $setUserForDev = true;
}

// Damit die Kommandozeile funktioniert
if(!$_SERVER['DOCUMENT_ROOT']) {
    $_root = __DIR__;
}

require('includes/01_init_orthor.php');

// App Initalisieren
$app = new App();

// Einstellungen 
$Einstellungen = new Einstellungen("_einstellungen");

// TODO: FORCE RELOAD MUSS NOCH DEAKTIVIERT WERDEN!
$Einstellungen->refreshGlobal();



?>