<?php
class Animal{
    public function roar(){
        echo "El";
    }
}

class Gato extends Animal{
    public $nombre;
    public function __construct($nombre)
    {
        $this->nombre=$nombre;
    }
    public function roar (){
        echo $this->nombre." miau, MIAU!!";
    }
}
class Perro extends Animal{
    public $nombre;
    public function __construct($nombre)
    {
        $this->nombre=$nombre;
    }
    public function roar(){
        echo $this->nombre." ladra, Wau ";
    }
}
class Vaca extends Animal{
    public $nombre;
    public function __construct($nombre)
    {
        $this->nombre=$nombre;
    }
    public function roar(){
        echo $this->nombre." le hace Mu!!";
    }
}

class Abecedario extends Animal{
    public $sonido;
    public function __construct($sonido)
    {
        $this->sonido=$sonido;
    }
    public function roar() {
        echo $this->sonido."A, B, C, D, E, F, G, H, I, J, K, L, M, N, O, P, Q, R, S, T, U, V, W, X, Y, Z";
    }
}

    

function roarAnimal(Animal $animal)
{
    $animal->roar();
}
$gato= new Gato("gato");
$perro=new Perro("perro");
$vaca=new Vaca("vaca");
$abecedario =new Abecedario("Abecedario");



if (isset($_POST['gato'])){
    ?>
    <script>
        var msg=new SpeechSynthesisUtterance("<?php roarAnimal($gato);?>");
        window.speechSynthesis.speak(msg);
    </script>
    <?php
}
else if (isset($_POST['perro'])){
    ?>
    <script>
        var msg=new SpeechSynthesisUtterance("<?php roarAnimal($perro);?>");
        window.speechSynthesis.speak(msg);
    </script>
    <?php
}
else if (isset($_POST['vaca'])){
    ?>
    <script>
        var msg=new SpeechSynthesisUtterance("<?php roarAnimal($vaca);?>");
        window.speechSynthesis.speak(msg);
    </script>
    <?php
}
else if (isset($_POST['abecedario'])) {
    ?>
    <script>
        var msg=new SpeechSynthesisUtterance("<?php roarAnimal($abecedario);?>");
        window.speechSynthesis.speak(msg);
    </script>
    <?php
}