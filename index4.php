<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
<?php
    require("Exo4.php");
$Personnage1 = new Personnage("Théodu80");
$Personnage2 = new Personnage("Victim91");
$Personnage1->attaquer($Personnage2);
$Personnage2->defense(50);
$Personnage2 -> afficheVie();

?>
</body>
</html>
