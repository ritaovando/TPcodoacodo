<?php
//tp_unidad2
echo "Nmbre: Rita Paola <BR>";
echo"Apelido: Ovando <br>";
echo"Edad: 39 <br>";
echo"Hobbie: Tejer <br>";
echo"Editor de Codigo Preferido: Visual Studio <br>";
echo"Sitema Operativo que utilizo: Windows <br>";
//tp_unidad3
//Creo la clase Mascota
class Mascotas{
    //Atributos
    Public $nombre;
    Public $edad;
    Public $tipo;
    Public $peso;
    Protected $nombreDueño;
    //Metodos
    Public function __construct($nombre , $edad , $tipo , $peso){
    $this ->nombre = $nombre;
    $this ->edad   = $edad;
    $this ->tipo   = $tipo;
    $this ->peso   = $peso;
    }
    Public function setnombreDueño($nombreDueño){
        $this -> nombreDueño = $nombreDueño ;
    }
    Public function getnombreDueño (){
        return $this -> nombreDueño;
    }
    Public function getAtributo ($atributo){
        return $this -> $atributo;

    }
}
class Perros extends Mascotas {
    Public $raza; //atributo propio de la clase perro despues hereda todo de la clase mascota
    Public function __construct($raza ,$nombre , $edad , $tipo , $peso)
    { $this-> raza = $raza;
      $this ->nombre = $nombre;
      $this ->edad   = $edad;
      $this ->tipo   = $tipo;
      $this ->peso   = $peso;

    }
}
$Mascotas1 = new Mascotas ('Gudy', 12 , 'vertebrado', '15kg.'); //Instancio un Obj. y le asigno valor
$Mascotas1 -> setnombreDueño ('Rita Ovando');
$tutor = $Mascotas1 ->getnombreDueño();
echo"<pre>";
var_dump($Mascotas1);
echo"</pre>";

echo"<h1>El Responsable de la Mascota ".$Mascotas1->getAtributo('nombre')." es: ".$tutor."</h1>";
$Mascotas2 = new Mascotas ('Manuela', 50 , 'vertebrado', '30kg.'); //Instancio un Obj. y le asigno valor
$Mascotas2 -> setnombreDueño ('Catalina Apaza');
$tutor = $Mascotas2 ->getnombreDueño();
echo"<pre>";
var_dump($Mascotas2);
echo"</pre>";

echo"<h1>El Responsable de la Mascota ".$Mascotas2->getAtributo('nombre')." es: ".$tutor."</h1>";
//instanciamos la clase Perros que herada de mascotas
$Perro1 =new Perros ('Pastor Aleman','Airoo',4,'vertebrado','45kg.');
$Perro1 -> setnombreDueño ('Mateo Apaza');
$tutor = $Perro1 ->getnombreDueño();
echo"<pre>";
var_dump($Perro1);
echo"</pre>";
echo"<h1>El Responsable de la Mascota ".$Perro1 -> getAtributo('raza')." de nombre ".$Perro1->getAtributo('nombre')." es: ".$tutor."</h1>";

?>