<?php
/*classe abstrata*/
abstract class MotorBase
{
  
  const POTENCIA = 1.0;
  private $aceleracao = 0;
  private $ligado = false;
  /**
   * Retorna o torque da aceleracao
   * @param float $valor
   * @return float $torque
   */
  public function acelerar($valor)
  {
    $this->aceleracao += $valor;
    return $this->aceleracao * self::POTENCIA;
  }

  /**
   *@param boolean $simnao
   */
  public function ligar($simnao)
  {
    $this->ligado = $simnao;
    return $this->ligado;
  }
}