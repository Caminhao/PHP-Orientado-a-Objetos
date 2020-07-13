<?php
require_once "Pessoa.php";
require_once "Livro.php";
require_once "Carro.php";

$pessoa = new Pessoa();
$pessoa->setNome("Jorge");
$pessoa->setIdade("29");
$pessoa->setPeso("66");
$pessoa->setSexo("masculino");

$livro = new Livro();
$livro->setTitulo("A Droga da Obediência");
$livro->setAutor("Pedro Bandeira");
$livro->setAno("1984");
$livro->setEdicao("1");

$carro = new Carro();
$carro->setMarca("Chevrolet");
$carro->setCor("Branco");
$carro->setPlaca("FRI-4371");
$carro->setModelo("Corsa");

echo "<b>Pessoa</b></br>Nome: ".$pessoa->getNome()."</br>Idade: ".$pessoa->getIdade()."</br>Peso: ".$pessoa->getPeso()."</br>Sexo: ".$pessoa->getSexo()."</br>";
echo "<b>Livro</b></br>Titulo: ".$livro->getTitulo()."</br>Autor: ".$livro->getAutor()."</br>Ano: ".$livro->getAno()."</br>Edicao: ".$livro->getEdicao()."</br>";
echo "<b>Pessoa</b></br>Marca: ".$carro->getMarca()."</br>Cor: ".$carro->getCor()."</br>Placa: ".$carro->getPlaca()."</br>Modelo: ".$carro->getModelo()."</br>";
?>
