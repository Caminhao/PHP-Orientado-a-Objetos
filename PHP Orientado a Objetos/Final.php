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

echo"<b>Pessoa</b></br>Nome: ".$pessoa->getNome()."</br>Idade: ".$pessoa->GetIdade()."</br>Peso: ".$pessoa->GetPeso()."</br>Sexo: ".$pessoa->GetSexo()."</br>";
echo"<b>Livro</b></br>Titulo: ".$livro->getTitulo()."</br>Autor: ".$livro->GetAutor()."</br>Ano: ".$livro->GetAno()."</br>Edicao: ".$livro->GetEdicao()."</br>";
echo"<b>Pessoa</b></br>Marca: ".$carro->getMarca()."</br>Cor: ".$carro->GetCor()."</br>Placa: ".$carro->GetPlaca()."</br>Modelo: ".$carro->GetModelo()."</br>";
?>