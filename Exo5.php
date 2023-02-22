<pre>
<?php
echo "index5.php";

class Personnage {
    //propriété
    private $Pseudo;
    private $Vie;
    
    //Methode
    public function __construct($id, $pdo) {
        $req = "SELECT * FROM `personnage` WHERE idPersonnage =" . $id;
        echo $req;
        $requeteStatement = $pdo->query($req);
        if ($requeteStatement) {
            $tab = $requeteStatement->fetch();
            $this->Pseudo = $tab["Pseudo"];
            $this->Vie = $tab["Vie"];
        }
    }

    public function AfficheToi() {
        return "<p>je suis " . $this->Pseudo . " nb de vie: " . $this->Vie . "</p>";
    }
}

?>
</pre>
