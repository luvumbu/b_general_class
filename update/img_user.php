<?php 
session_start(); 
require_once '../class/path_config.php'; 
require_once '../class/DatabaseHandler.php';  
require_once '../class/ImageResizer.php'; // Assurez-vous que le fichier contenant la classe est inclus

// Chemin vers le fichier source
$file_path = $_SESSION["file_path"];
$imagePath = '../img_user_action/' . $file_path;

// Extraire l'extension du fichier
$extension = strtolower(pathinfo($file_path, PATHINFO_EXTENSION));

// Liste des extensions d'image acceptées
$allowed_extensions = ['jpg', 'jpeg', 'png', 'gif'];

if (in_array($extension, $allowed_extensions)) {
    // Si l'extension est une image, redimensionner l'image
    $resizer = new ImageResizer($imagePath);
    
    // Redimensionner l'image à une nouvelle largeur et hauteur
    $resizer->resize(400, 400);

    // Sauvegarder l'image redimensionnée
    $resizer->save($imagePath);
}

// Mettre à jour la base de données quel que soit le type de fichier
if (isset($_SESSION["img_user_action_chil"])) {
    $cookie_img = $_SESSION["cookie_img"]; 
    $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
    $databaseHandler->action_sql("UPDATE `projet_child` SET `img_projet_child_src` = '$file_path' WHERE `id_projet_child` = '$cookie_img'");
    unset($_SESSION["img_user_action_chil"]);
} else {
    $session_general = $_SESSION["session_general"][0];
    $cookie_img = $_SESSION["cookie_img"];

    if ($_SESSION["cookie_img"] == "user_log") {
        $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
        $databaseHandler->action_sql("UPDATE $config_dbname SET `img_user` = '$file_path' WHERE  `id_user` = '".$session_general."';");
    } else {

    $session_general = $_SESSION["session_general"][0];

        $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
        $databaseHandler->action_sql("UPDATE `projet` SET `img_projet_src` = '$file_path' WHERE `id_projet` = '$cookie_img'");

       $databaseHandler->action_sql('INSERT INTO  `projet_img` (`id_projet_img`, `id_user_projet_img`, `img_projet_src_img`, `date_inscription_projet_img`) VALUES ("'.$cookie_img.'", "'.$session_general.'", "'.$file_path.'", CURRENT_TIMESTAMP);');
 
        
    }
}

// Réinitialiser les variables de session
$_SESSION["file_path"] = ""; 
$_SESSION["cookie_img"] = ""; 

?>
<script>
      window.location.href = "../index.php";
</script>
