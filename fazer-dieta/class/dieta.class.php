<?php

class Dieta
{
  public function resultados()
  {
    $data = [
      'gorduras'        => $this->calculaGorduras(),
      'proteinaDiaria'  => $this->calculaProteinaDiaria(),
      'carboidratos'    => $this->calculaCarboidratos(),
      'ingestaoAgua'    => $this->calculaIngestaoAguaDiaria(),
      'imc'             => $this->calculaIMC(),
      'nivelAtividade'  => $this->calculaNivelAtividadeDiaria(),
      'pesoAlcancavel'  => $this->calculaPesoAlcancavel30Dias(),
    ];

    return $data;
  }

  private function calculaGorduras()
  {
    return [
      'min' => 220,
      'max' => 240
    ];
  }

  private function calculaProteinaDiaria()
  {
    return [
      'min' => 170,
      'max' => 190
    ];
  }

  private function calculaCarboidratos()
  {
    return [
      'min' => 40,
      'max' => 50
    ];
  }

  private function calculaIngestaoAguaDiaria()
  {
    return [
      'min' => 5.2,
    ];
  }

  private function calculaIMC()
  {
    return [
      'min' => 37.2,
    ];
  }

  private function calculaNivelAtividadeDiaria()
  {
    return [
      'id'    => 'MODERADO',
      'valor' => 'Moderado',
    ];
  }

  private function calculaPesoAlcancavel30Dias()
  {
    return [
      'peso' => 115,
    ];
  }
}
