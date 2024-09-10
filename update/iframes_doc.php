<?php
session_start();
header("Access-Control-Allow-Origin: *");
$servername = "localhost";

require_once '../class/path_config.php';
require_once '../class/DatabaseHandler.php';




$id_projet = $_POST["id_projet"];
$img_projet_src = $_POST["img_projet_src"];
 

 


$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->action_sql('UPDATE  `projet` SET `img_projet_src` = "'.$img_projet_src.'" WHERE  `id_projet` ="'.$id_projet.'" ');


?>