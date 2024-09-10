 <?php
         $name_projet_ = AsciiConverter::asciiToString($name_projet[$a]);
         $title_projet_ = AsciiConverter::asciiToString($title_projet[$a]);
 
         $description_projet_ = AsciiConverter::asciiToString($description_projet[$a]);
 
 
         $req_sql__ = "SELECT * FROM `projet_child` WHERE `id_parent_projet_child` ='" . $id_projet[$a] . "' ";
 
         $databaseHandler__ = new DatabaseHandler($config_dbname, $config_password);
         $databaseHandler__->getDataFromTable($req_sql__, "id_projet_child");
         $id_projet_child = $databaseHandler__->tableList_info;
 
 
 
         $databaseHandler__ = new DatabaseHandler($config_dbname, $config_password);
         $databaseHandler__->getDataFromTable($req_sql__, "id_user_projet_child");
         $id_user_projet_child = $databaseHandler__->tableList_info;
 
 
         $databaseHandler__ = new DatabaseHandler($config_dbname, $config_password);
         $databaseHandler__->getDataFromTable($req_sql__, "id_sha1_projet_child");
         $id_sha1_projet_child = $databaseHandler__->tableList_info;
 
 
         $databaseHandler__ = new DatabaseHandler($config_dbname, $config_password);
         $databaseHandler__->getDataFromTable($req_sql__, "id_sha1_parent_projet_child");
         $id_sha1_parent_projet_child = $databaseHandler__->tableList_info;
 
 
         $databaseHandler__ = new DatabaseHandler($config_dbname, $config_password);
         $databaseHandler__->getDataFromTable($req_sql__, "id_parent_projet_child");
         $id_parent_projet_child = $databaseHandler__->tableList_info;
 
 
         $databaseHandler__ = new DatabaseHandler($config_dbname, $config_password);
         $databaseHandler__->getDataFromTable($req_sql__, "name_projet_child");
         $name_projet_child = $databaseHandler__->tableList_info;
 
 
         $databaseHandler__ = new DatabaseHandler($config_dbname, $config_password);
         $databaseHandler__->getDataFromTable($req_sql__, "statue_projet_child");
         $statue_projet_child = $databaseHandler__->tableList_info;
 
 
         $databaseHandler__ = new DatabaseHandler($config_dbname, $config_password);
         $databaseHandler__->getDataFromTable($req_sql__, "title_projet_child");
         $title_projet_child = $databaseHandler__->tableList_info;
 
 
         $databaseHandler__ = new DatabaseHandler($config_dbname, $config_password);
         $databaseHandler__->getDataFromTable($req_sql__, "description_projet_child");
         $description_projet_child = $databaseHandler__->tableList_info;
 
 
         $databaseHandler__ = new DatabaseHandler($config_dbname, $config_password);
         $databaseHandler__->getDataFromTable($req_sql__, "visibility_1_projet_child");
         $visibility_1_projet_child = $databaseHandler__->tableList_info;
 
 
         $databaseHandler__ = new DatabaseHandler($config_dbname, $config_password);
         $databaseHandler__->getDataFromTable($req_sql__, "img_projet_child_src");
         $img_projet_child_src = $databaseHandler__->tableList_info;



   
         
         
         
         

         $databaseHandler__ = new DatabaseHandler($config_dbname, $config_password);
         $databaseHandler__->getDataFromTable($req_sql__, "heure_debut_projet_child");
         $heure_debut_projet_child = $databaseHandler__->tableList_info;

         $databaseHandler__ = new DatabaseHandler($config_dbname, $config_password);
         $databaseHandler__->getDataFromTable($req_sql__, "date_debut_projet_child");
         $date_debut_projet_child = $databaseHandler__->tableList_info;

         $databaseHandler__ = new DatabaseHandler($config_dbname, $config_password);
         $databaseHandler__->getDataFromTable($req_sql__, "heure_fin_projet_child");
         $heure_fin_projet_child = $databaseHandler__->tableList_info;

         $databaseHandler__ = new DatabaseHandler($config_dbname, $config_password);
         $databaseHandler__->getDataFromTable($req_sql__, "date_fin_projet_child");
         $date_fin_projet_child = $databaseHandler__->tableList_info;

         ?>