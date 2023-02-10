<?php

class Producto{

    private $nombre = "Nintendo Switch";
    public $precio = 300;
    public $sku = "lo que te salga de los cojones";

    public function __construct($nombre, $precio, $sku)
    {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->sku = $sku;
    }
    
    // public $nombre = "Fran";
    protected $nonono; //Sólo accesible desde la clase
    private $sisisi; //Ni se muestra ni se usa

    public function getName (){
        return $this->nombre;
    }
    public function setName(string $name){
        $this->nombre = $name;
    }

    public function getPrice (){
        return $this->precio;
    }
    public function setPrice(int $price){
        $this->precio = $price;
    }

    public function getSku (){
        return $this->sku;
    }
    public function setSku(string $newSku){
        $this->sku = $newSku;
    }

    public function Mensaje(){
        return $this->nombre." tiene un precio de ".$this->precio." Sku: ".$this->sku;
    }

    public function toArray(){
        return ["Nombre"=>$this ->nombre,"Precio"=>$this ->precio,"Sku"=>$this ->sku];
    }
}

$producto1 = new Producto("switch", 339, "ejejeje");
$producto2 = new Producto("ps2", 139, "aassje");
// $producto1 -> setName("Pepe");
// var_dump($producto1->getName());
// $producto1 -> setPrice(60);
// var_dump($producto1->getPrice());
// $producto1 -> setSku("Sku example");
// var_dump($producto1->getSku());

echo "<br>";

var_dump($producto1->Mensaje());
echo "<br>";
var_dump($producto2->Mensaje());
echo "<br>";
var_dump($producto2->toArray());



// var_dump($producto1->nombre); //No te deja entrar
// var_dump($producto1->getName()); //Si te deja, si está protegido no te pisa nada
// var_dump($producto1->setName("Pepe"))


?>