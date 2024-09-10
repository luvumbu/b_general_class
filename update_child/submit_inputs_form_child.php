<?php
session_start() ; 
header("Access-Control-Allow-Origin: *");
$servername = "localhost";

require_once '../class/path_config.php' ; 
require_once '../class/DatabaseHandler.php' ; 


 
 $id_projet_child = $_POST['id_projet_child'] ; 
 
$heure_debut_projet_child = $_POST["heure_debut_projet_child"] ; 
$date_debut_projet_child = $_POST["date_debut_projet_child"] ; 

$heure_fin_projet_child = $_POST["heure_fin_projet_child"] ; 
$date_fin_projet_child = $_POST["date_fin_projet_child"] ; 

 

 
 
   
$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
//$databaseHandler->action_sql('UPDATE `projet_child` SET `heure_debut_projet_child` = "'.$heure_debut_projet_child.'",`date_debut_projet_child` = "'.$date_debut_projet_child.'",`heure_fin_projet_child` = "'.$heure_fin_projet_child.'",`date_fin_projet_child` = "'.$date_fin_projet_child.'"  WHERE `id_projet` =1') ;
 

$databaseHandler->action_sql('UPDATE `projet_child` SET `heure_debut_projet_child` = "'.$heure_debut_projet_child.'", `date_debut_projet_child` = "'.$date_debut_projet_child.'", `heure_fin_projet_child` = "'.$heure_fin_projet_child.'", `date_fin_projet_child` = "'.$date_fin_projet_child.'" WHERE `id_projet_child` = "'.$id_projet_child.'"') ;
 




?>