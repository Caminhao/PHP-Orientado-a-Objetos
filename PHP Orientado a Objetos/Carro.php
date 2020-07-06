<?php
class Carro{
private $marca;
private $cor;
private $placa;
private $modelo;

public function getMarca(){
    return $this->marca;
}
public function setMarca($marca){
    $this->marca = $marca;
}
public function getCor(){
    return $this->cor;
}
public function setCor($cor){
    $this->cor = $cor;
}
public function getPlaca(){
    return $this->placa;
}
public function setPlaca($placa){
    $this->placa = $placa;
}
public function getModelo(){
    return $this->modelo;
}
public function setModelo($modelo){
    $this->modelo = $modelo;
}
}
?>