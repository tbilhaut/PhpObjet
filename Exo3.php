
<pre>
    <?php
    echo "index2.php";
class Personnage {
    //propriété
    private $Pseudo;
    private $Vie;
    
    //Methode
    public function __construct($Speudo){
        $this->Vie = 100;
        $this->Speudo = $Pseudo;
    }

    public function  afficheVie() {
        echo "Mon pseudo est ".$this->PSeudo;
        echo "Ma vie est de ".$this->Vie;
    }
  

}
?>

</pre>
