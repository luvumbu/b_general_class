<?php
// Démarre la session PHP pour conserver les données utilisateur entre les pages
session_start();
?>

<!-- Inclusion du fichier JavaScript externe -->
<script src="class/js.js"></script>

<!DOCTYPE html>
<html lang="fr">
<link rel="stylesheet" href="css/index.css">
<head>
  <!-- Définit l'encodage des caractères en UTF-8 -->
  <meta charset="UTF-8">

  <!-- Rend le site responsive pour les appareils mobiles -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Ajout d'une icône pour l'onglet du navigateur -->
  <link rel="icon" type="image/x-icon" href="https://image.spreadshirtmedia.net/image-server/...">

  <!-- Titre de la page -->
  <title>Document</title>
</head>

<body>
  <!-- Inclusion potentielle d'une feuille de style CSS (commentée) -->
  <!-- <link rel="stylesheet" href="monFormulaire1.css"> -->

  <?php
  // Inclusion des fichiers de classe PHP nécessaires
  require_once 'class/Creat_form.php';
  require_once 'class/AsciiConverter.php';
  require_once 'class/chercherIndex.php';
  require_once 'class/IsLocal.php';
  require_once 'class/give_url.php';

 

  // Si la session n'est pas déjà active (l'utilisateur n'est pas connecté)
  if (!isset($_SESSION["session_log"])) {

    // Déclaration des variables de formulaire
    $label_1 = "label_1";
    $label_1_text = "Dbname"; // Texte pour le label 1
    $label_2_text = "Username"; // Texte pour le label 2

    // Déclaration des noms et événements pour les champs input
    $input_1 = "input_1";
    $input_1_onkeyup = $input_1 . "_onkeyup(this)";

    $label_2 = "label_2";
    $input_2 = "input_2";
    $input_2_onkeyup = $input_2 . "_onkeyup(this)";

    $btn = "btn";
    $btn2 = "xx";

    // Lien vers une fonctionnalité "Mot de passe oublié"
    $info___ = "Mot de passe oublié";
    $src_info = "http://google.com";

    // Création d'une nouvelle instance de formulaire
    $monFormulaire1 = new Creat_form("form_p_name", "form", "");

    // Ajout d'une feuille de style au formulaire
    $monFormulaire1->stylesheet("css/monFormulaire1.css");

    /*
    Plusieurs autres feuilles de styles peuvent être ajoutées, mais elles sont commentées ici
    $monFormulaire1->stylesheet("monFormulaire2.css");
    $monFormulaire1->stylesheet("monFormulaire3.css");
    */

    // Si la valeur est vide, l'élément est ajouté après le body, sinon l'identifiant est pris en compte
    $monFormulaire1->construct_setAtribut("class", "monFormulaire1");

    // Structure du label 1
    $monFormulaire1_label_1 = [
      [$label_1, "label"],
      [$label_1, "", $label_1_text]
    ];

    // Structure du champ input 1 avec placeholder et valeur par défaut "root"
    $monFormulaire1_input_1 = [
      [$input_1, "input"],
      [$input_1, "placeholder", $label_1_text],
      [$input_1, "value", "root"]
    ];

    // Structure du label 2
    $monFormulaire1_label_2 = [
      [$label_2, "label"],
      [$label_2, "", $label_2_text]
    ];

    // Structure du champ input 2 avec placeholder et valeur par défaut "root"
    $monFormulaire1_input_2 = [
      [$input_2, "input"],
      [$input_2, "placeholder", $label_2_text],
      [$input_2, "type", "password"],

      [$input_2, "value", "root"]
  
    ];

    // Div contenant le lien "Mot de passe oublié"
    $monFormulaire1_div_1 = [
      [$btn2, "div"],
      [$btn2, "", "<a href='" . $src_info . "'>" . $info___ . "</a>"],
      [$btn2, "class", "xx"]
    ];

    // Div pour le bouton submit avec une action onclick
    $monFormulaire1_div_2 = [
      [$btn, "div"],
      [$btn, "class", "submit"],
      [$btn, "onclick", $input_1_onkeyup],
      [$btn, "", "submit"]
    ];

    // Ajout d'attributs au formulaire et ses enfants
    $monFormulaire1->select_Atribut("input", "select", "form_p_name.php");
    $monFormulaire1->add_child_array($monFormulaire1_label_1);
    $monFormulaire1->add_child_array($monFormulaire1_input_1);
    $monFormulaire1->add_child_array($monFormulaire1_label_2);
    $monFormulaire1->add_child_array($monFormulaire1_input_2);
    $monFormulaire1->add_child_array($monFormulaire1_div_1);

    // Si la vérification de la base de données est réussie
    if ($monFormulaire1->databaseHandler_verif == 1) {
      $monFormulaire1_div_3 = [
        [$btn, "div"],
        [$btn, "style", "background-color:blue;"]
      ];
    }

    // Sauvegarde de la vérification de la base de données dans la session
    $_SESSION["path_config"] = $monFormulaire1->databaseHandler_verif;

    // Ajout du bouton submit et autres éléments au formulaire
    $monFormulaire1->add_child_array($monFormulaire1_div_2);
    $monFormulaire1->select_Atribut("input", "select", "form_p_name.php");
    $monFormulaire1->select_Atribut_function("input");
    $monFormulaire1->add_child_array($monFormulaire1_div_3);


    $path = "class/path_config.php";

    require $path;






    // Example usage
    if (checkFileExists($path)) {




      // Créer une instance de DatabaseHandler
      $databaseHandler = new DatabaseHandler($config_dbname, $config_password);

      // Vérifier si la connexion est réussie
      if ($databaseHandler->get_verif()) {
        // Nom de la table à vérifier

        // Appeler la méthode pour obtenir les colonnes de la table
        $databaseHandler->getListOfTables_Child($config_dbname);

        // Accéder à la propriété contenant la liste des colonnes
        $columns = $databaseHandler->get_tableList_child();


        if (count($columns) == 0) {
          delete_file($path);
  ?>
          <script>
            const myTimeout = setTimeout(myGreeting, 400);

            function myGreeting() {
              location.reload();
            }
          </script>
  <?php
        }
      } else {
        echo "Connexion impossible";
      }
    }
  } else {
    // Si la session est déjà active, inclusion des fichiers pour la configuration et la gestion de session
    require 'class/path_config.php';
    require_once 'view/body.php';
  }
  ?>

  <style>

  </style>



</body>

</html>