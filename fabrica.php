<pre>
<?php

ini_set('display_errors',1);
error_reporting(E_ALL);
  
require_once "Carro.php";

$carro = new Carro();
//$carro->cor = 'Azul';

$carro2 = new Carro();

/*cria um apelido para o objeto, isto não gera um novo objeto, toda alteração neste objeto reflete para o anterior*/
$meuCarro = $carro2;

/*para clonar um objeto use a funcao clone*/

$meuCarro = clone $carro2;




$carro = new Carro('Verde');
$carro2 = new Carro('Preto');

echo ( $carro );
