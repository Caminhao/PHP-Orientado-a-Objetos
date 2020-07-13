<?php
  class Livro{
  private $titulo;
  private $autor;
  private $ano;
  private $edicao;

  public function getTitulo(){
      return $this->titulo;
  }
  public function setTitulo($titulo){
      $this->titulo = $titulo;
  }
  public function getAutor(){
      return $this->autor;
  }
  public function setAutor($autor){
      $this->autor = $autor;
  }
  public function getAno(){
      return $this->ano;
  }
  public function setAno($ano){
      $this->ano = $ano;
  }
  public function getEdicao(){
      return $this->edicao;
  }
  public function setEdicao($edicao){
      $this->edicao = $edicao;
  }
}
?>
