<?php
    include("fonctions.php");

    $_POST["verbe"]=htmlspecialchars($_POST["verbe"]);
    echo "<h1>".$_POST["verbe"]." au ".$_POST["temps"]." de ".$_POST["mode"]."</h1><hr>";

    conjuger($_POST["verbe"], $_POST["mode"], $_POST["temps"]);

?>

