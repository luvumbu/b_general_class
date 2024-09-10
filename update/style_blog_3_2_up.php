<?php
session_start() ; 
header("Access-Control-Allow-Origin: *");
$servername = "localhost";

require_once '../class/path_config.php' ; 
require_once '../class/DatabaseHandler.php' ; 
require_once '../class/AsciiConverter.php' ; 


 
 
   
   $name_projet = $_POST["name_projet"] ; 
   $id_projet = $_POST["id_projet"] ; 

   $title_projet = $_POST["title_projet"] ; 

 $description_projet = $_POST["description_projet"] ; 

 

// Conversion de chaîne de caractères à ASCII
$name_projet = AsciiConverter::stringToAscii($name_projet); // Affiche "72,101,108,108,111"

$title_projet = AsciiConverter::stringToAscii($title_projet); // Affiche "72,101,108,108,111"
$description_projet = AsciiConverter::stringToAscii($description_projet); // Affiche "72,101,108,108,111"






$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->action_sql('UPDATE  `projet` SET `name_projet` = "'.$name_projet.'" ,`title_projet` ="'.$title_projet.'",`description_projet` ="'.$description_projet.'"  WHERE  `id_projet` = "'.$id_projet.'"') ;
 


 



?>