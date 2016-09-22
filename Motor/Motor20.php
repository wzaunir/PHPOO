<?php
namespace Ford\Motor;

use Ford\Motor\MotorBase;

require_once "MotorBase.php";
/*classe motores 2.0*/
class Motor20 extends MotorBase
{  
    const POTENCIA = 2.0;
    
    protected  $potencia = 2.0;
    
    public function acelerar($valor) {
        
        $this->aceleracao = $valor+ 5;
        $torque =  parent::acelerar($valor);        
        return $torque + 0.1;
        
    } 
    public function refrigerar() {
        
    }


}