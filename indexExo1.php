<style>
    .notebox {
  border: 4px solid #666;
  padding: .5em;
  width:300px;
  height:25px;
}
    .notebox2 {
  border: 4px solid #666;
  padding: .5em;
  width:300px;
  height:70px;
}
    .notebox3 {
  border: 4px solid #666;
  padding: .5em;
  width:300px;
  height:100px;
}
</style>
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
    <div class="notebox">
   User
</div>
    <div class="notebox2">
   NOM : Théo<p> PRENOM : Bilhaut
</div>
    <div class="notebox3">
    afficheUser() 
</div>
    <?php
    require("Exo1.php");
    $User1 = new USER();
    

    $User1->setNOM("Théo<p>");
    $User1->setPrenom("Bilhaut");
    
    $User1 -> afficheUser();
    ?>

</body>
</html>
