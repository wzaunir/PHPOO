<pre>
<?php
/*php -S 0.0.0.0.:8000 -t .*/
ini_set('display_errors',1);
error_reporting(E_ALL);
  
require_once "Carro.php";
require_once "./Motor/MotorBase.php";
require_once "Motor/Motor16.php";
require_once "Motor/Motor20.php";
require_once "Motor/Motor20Turbo.php";
require_once 'Rodas/RodaAco.php';
require_once 'Acessorios/MotorBase.php';
$motor16 = new Ford\Motor\Motor16();
$motor20 = new Ford\Motor\Motor20();

$motorTurbo = new Ford\Motor\Motor20Turbo();
$carro = new Ford\Carro('Verde',$motorTurbo);

$roda  = new RodaAco();
        
print_r($roda);

$carro->abastecer(8.15);
//var_dump( $carro );

$carro->ligar();
$carro->acelerar(35);
var_dump( $carro );
echo json_encode($roda);

$motorAgua = new Bosh\Motor\MotorBase();