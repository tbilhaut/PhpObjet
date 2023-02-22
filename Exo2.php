<pre>
    <?php
    echo "index2.php";
class Personnage {
    //propriété
    private $Pseudo;
    private $Vie;
    
    //Methode
    public function __construct(){
        $this->Vie = 100;
    }

    public function  afficheVie() {
        echo "Ma vie est de ".$this->Vie;
    }
  

}
?>

</pre>
