<pre>
<?php
/*php -S 0.0.0.0.:8000 -t .*/
ini_set('display_errors',1);
error_reporting(E_ALL);
  
require_once "Carro.php";
require_once "Motor/Motor16.php";
require_once "Motor/Motor20.php";

$motor16 = new Motor16();
$motor20 = new Motor20();
$carro = new Carro('Verde',$motor16);


$carro->abastecer(8.14);
var_dump( $carro );
$carro->ligar();

  $carro->acelerar(5);
  var_dump( $carro );
