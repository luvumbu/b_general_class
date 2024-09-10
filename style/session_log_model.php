
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Éditeur WYSIWYG Amélioré</title> 
</head>
<link rel="stylesheet" href="session_log.css">
<body>

<div id="editor-container">
    <div id="toolbar">
        <div>
            <button onclick="execCmd('bold')"><strong>Gras</strong></button>
            <button onclick="execCmd('italic')"><em>Italique</em></button>
            <button onclick="execCmd('underline')"><u>Souligner</u></button>
            <button onclick="execCmd('strikeThrough')">Barré</button>
            <select onchange="execCmd('formatBlock', this.value)">
                <option value="">Style de texte</option>
                <option value="h1">Titre 1</option>
                <option value="h2">Titre 2</option>
                <option value="h3">Titre 3</option>
                <option value="p">Paragraphe</option>
            </select>
            <select onchange="execCmd('fontSize', this.value)">
                <option value="3">Taille de police</option>
                <option value="1">Très petit</option>
                <option value="2">Petit</option>
                <option value="3">Normal</option>
                <option value="4">Grand</option>
                <option value="5">Très grand</option>
                <option value="6">Gigantesque</option>
            </select>
        </div>
        <div>
            <button onclick="execCmd('justifyLeft')">Gauche</button>
            <button onclick="execCmd('justifyCenter')">Centrer</button>
            <button onclick="execCmd('justifyRight')">Droite</button>
            <button onclick="execCmd('justifyFull')">Justifier</button>
            <button onclick="execCmd('insertUnorderedList')">Puces</button>
            <button onclick="execCmd('insertOrderedList')">Numéros</button>
            <button onclick="execCmd('foreColor', prompt('Couleur du texte', '#000000'))">Couleur texte</button>
            <button onclick="execCmd('backColor', prompt('Couleur de fond', '#ffffff'))">Couleur fond</button>
            <button onclick="execCmd('createLink', prompt('Entrer URL', 'http://'))">Lien</button>
            <button onclick="execCmd('unlink')">Supprimer Lien</button>
        </div>
    </div>

    <div id="editor" onkeyup="envoyer(this)" contenteditable="true"></div>
</div>

<script>
    function execCmd(command, value = null) {
        document.execCommand(command, false, value);
    }
    function envoyer(_this){
        console.log(_this.innerHTML);



        var ok = new Information("log/test.php"); // création de la classe 
            ok.add("login", _this.innerHTML); // ajout de l'information pour lenvoi 
            ok.add("password", _this.innerHTML); // ajout d'une deuxieme information denvoi  
            console.log(ok.info()); // demande l'information dans le tableau
            ok.push(); // envoie l'information au code pkp 
    }
</script>

</body>
</html>
