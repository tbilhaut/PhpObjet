
<pre>
    <?php
    echo "index.php";
class USER {
    //propriété
    private $Nom;
    private $Prenom;
    
    //Methode
    public function  afficheUser() {
        echo "je suis un User<p>";
        echo "Mon nom est ".$this->Nom;
        echo "Mon prénom est ".$this->Prenom;

    }
    public function setNOM($NewNom) {
        return $this->Nom = $NewNom ;  
    }
    public function setPrenom($NewPrenom) {
        return $this->Prenom = $NewPrenom ;
    }
}
?>

</pre>
