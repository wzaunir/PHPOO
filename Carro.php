<?php

/*Criando uma classe */
class Carro 
{
  public $cor;
  private $quantCombustivel;
  
  const MARCA = "Ford";  
  const MODELO = "Fiesta";
  const ANO = 2016;

  static public $chassi = "xyz";
  
  private $motor;
  
  public function __construct($cor = "Branco", MotorBase $motor)
  {
    $this->cor = $cor;
    $this->motor = $motor;
  }
  
  public function __toString(){
  
   return self::MARCA.':'.self::MODELO.':'.self::ANO; 
   
  }
  
  public function __set($atributo,$valor){
    
    $this->$atributo = $valor;
  }
  
  public function __get($atributo){
  
   return $this->$atributo; 
   
  }
  
  /**
  * @param float $torque
  * 
  */  
  private function andar($torque)
  {
    $combustivelGasto = $torque / 100;
    $this->quantCombustivel -= $combustivelGasto;
  }
  public function acelerar($potencia)
  {
    $torque = $this->motor->acelerar($potencia);
    $this->andar($torque);
    
  }
  public function frear()
  {
    
  }
  public function ligar()
  {
    try{
          
      if($this->marcadorCombustivel() > 0)
      {
	$this->motor->ligar(true);
      }
    } catch (Exception $e)
    {
      echo $e->getMessage();
    }
    
    
  }
  public function desligar()
  {
    $this->motor->ligar(false);
  }
  /**
   * Abastecer o carro
   * @param float $litros
   * @return float 
   */
  public function abastecer($litros)
  {
    $this->quantCombustivel += $litros;    
    return $this->quantCombustivel;
    
  }
  
  public function marcadorCombustivel()
  {
    if ($this->quantCombustivel < 5)
    {
      throw new Exception ("Combustivel acabando"); 
    }
  }
  static public function radio()
  {
    echo "Radio ligado";
   
  }
}