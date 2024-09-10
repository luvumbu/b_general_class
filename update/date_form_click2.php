<?php
session_start();
header("Access-Control-Allow-Origin: *");
$servername = "localhost";

require_once '../class/path_config.php';
require_once '../class/DatabaseHandler.php';


echo 'test ok '   ; 





echo $_POST["date_form_1_"]  ; 
echo $_POST["date_form_2_"]  ; 
echo $_POST["date_form_3_"]  ; 
echo $_POST["date_form_4_"]  ; 


 

 

$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->action_sql('UPDATE `projet` SET `heure_debut_projet` = "555555555555500", `date_debut_projet` = "00555555555555501", `heure_fin_projet` = "0000001", `date_fin_projet` = "00000000000000000000000001" WHERE `projet`.`id_projet` = 1;');


 

?>