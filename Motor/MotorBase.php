<?php
/**
 * Classe Abstrata: Base para todos os motores 
 */
namespace Ford\Motor;

abstract class MotorBase
{
  
  const POTENCIA = 1.0;
  protected $aceleracao = 0;
  private $ligado = false;
  
  protected $potencia = 1.0;
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
   * @param refrigerar
   */
  abstract public function refrigerar();
  /**
   *@param boolean $simnao
   * 
   */
  public function ligar($simnao)
  {
    $this->ligado = $simnao;
    return $this->ligado;
  }
  public function getPotencia()
  {
     return $this->potencia;
  }
}