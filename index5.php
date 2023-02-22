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
require("Exo5.php");
$ipServerSQL = "localhost";
$NomBase = "personnage";
$UserBDD = "root";
$PassBDD = "";
$BasePDO = null;

$BasePDO = new PDO("mysql:host=".$ipServerSQL.";dbname=".$NomBase.";", $UserBDD, $PassBDD);
$Personnage1 = new Personnage(1, $BasePDO);
echo $Personnage1->AfficheToi();
?>

</body>
</html>
