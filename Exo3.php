
<pre>
    <?php
    echo "index3.php";
class Personnage {
    //propriété
    private $Pseudo;
    private $Vie;
    
    //Methode
    public function __construct($Pseudo){
        $this->Vie = 100;
        $this->Pseudo = $Pseudo;
    }

    public function  afficheVie() {
        echo "Mon pseudo est ".$this->Pseudo;
        echo "Ma vie est de ".$this->Vie;
    }
}
?>
</pre>
