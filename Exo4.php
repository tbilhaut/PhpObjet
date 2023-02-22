<pre>
<?php

class Personnage {
    //propriétés
    private $Pseudo;
    private $Vie;
    
    //Méthodes
    public function __construct($Pseudo){
        $this->Vie = 100;
        $this->Pseudo = $Pseudo;
    }

    public function attaquer($Personnage){
        echo $this->Pseudo . " attaque " . $Personnage->Pseudo;
    }

    public function defense($ValAttaque){
        $this->Vie -= $ValAttaque;
        echo "<p>" . $this->Pseudo . " subit " . $ValAttaque . " points de dégâts.</p>";
        if($this->Vie == 0){
            echo "<p>" . $this->Pseudo . "est mort RIP</p>";
        }
    }
    public function  afficheVie() {
        echo "<p>Vie : ". $this->Vie . " de ". $this->Pseudo ."</p>";
    }
}
?>
</pre>
