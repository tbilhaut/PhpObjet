
<pre>
    <?php
    echo "index2.php";
class Personnage {
    //propriété
    private $Speudo;
    private $Vie;
    
    //Methode
    public function __construct($Speudo){
        $this->Vie = 100;
        $this->Speudo = $Speudo;
    }

    public function  afficheVie() {
        echo "Mon speudo est ".$this->Speudo;
        echo "Ma vie est de ".$this->Vie;
    }
  

}
?>

</pre>
