<?php

//per potere utilizzare file config lo devo includere in questo caso uso require_once
// perchè senza dati file config non mi posso collegare al Db e l'applicativo non funzionerebbe
//obbligato ad avere file altrimenti script si ferma;
$config = require 'config.inc.php'; //caturiamo valori file config.php e li utilizziamo; array doi configurazione

//connessione a mysql;

$mysqli = new mysqli(
    $config['mysql_host'],
    $config['mysql_user'],
    $config['mysql_password'],
    $config['mysql_db']
); //istanzio la classe;

var_dump($mysqli);die();
unset($config); //una volta stabilita la connesione posso distruggere la variabile globale senza danneggiare connessione la utilizziamo e poi la distruggiamo;
if ($mysqli ->connect_errno ) {

      echo $conn ->connect_error;
      return;
} else {

      //echo 'Connesione riuscita';
      //var_dump($mysqli);
}
 ?>
