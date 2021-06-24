<?php
require_once 'BD.class.php';

class Plano
{
  private $conn = null;

  function __construct($link = '')
  {
    $this->conn = BD::conn();
  }

  public function infos()
  {
    return [
      'peso_atual'        => 100,
      'peso_alvo'         => 80,
      'altura'            => 174,
      'nivel_atividade'   => 'Muito ativo',
      'nivel_atividade_valor'   => 16,
      'calorias_diarias'  => 2500,
      'proteina'          => 140,
      'gorduras'          => 170,
      'carboidratos'      => 30,
      'ingestao_agua'     => 4.5,
      'peso_30_dias'      => 85,
    ];
  }
}