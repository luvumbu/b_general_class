<?php


 
/*
 
$req_sql = "SELECT * FROM `social_media` WHERE 1";
$databaseHandler = new DatabaseHandler($input_1, $input_2);
$databaseHandler->getDataFromTable($req_sql, "social_media_id_sha1");
$name_projet = $databaseHandler->tableList_info;
*/

 
$host = $_SERVER['HTTP_HOST'];


if ( $host =='localhost' || $host== '127.0.0.1' ) {
 
require_once 'form_p_name_log_local.php';
} else {
    
   require_once 'form_p_name_log_local_production.php';
}


?>