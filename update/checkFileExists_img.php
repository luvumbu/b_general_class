<?php
 

 
   
 $databaseHandler = new DatabaseHandler($config_dbname,$config_password);
 $databaseHandler->action_sql("UPDATE  $config_dbname SET `img_user` = '' WHERE  `id_user` ='".$_SESSION["session_general"][0]."' ") ;



?>