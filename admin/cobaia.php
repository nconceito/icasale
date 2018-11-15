<?php

    include_once "classes/clsPessoas.php";

    $Pessoa = new clsPessoa();
    
    $Pessoa->setNome("Jefferson Diniz");
    $Pessoa->setApelido("Jersão")  ;
    $Pessoa->setNascimento("1979-12-12")  ;
    $Pessoa->setFederal("28614026870");
    $Pessoa->setEstadual("30.645-215-7");
    $Pessoa->setMunicipal("");
    $Pessoa->setRua("Av. José Pereira Lopes");
    $Pessoa->setNumero("32");
    $Pessoa->setBairro("Jd. Paulista");
    $Pessoa->setCidade("São Carlos");
    $Pessoa->setEstado("SP");
    $Pessoa->setCEP("13.574-380");
    $Pessoa->setComplemento("Casa Marrom");
    $Pessoa->setTipoPessoa("Física");

    $Pessoa->Incluir();

    $Pessoa->Limpar();

    $Pessoa->CarregarID(2);

    echo $Pessoa->getNome()."<br>";
    echo $Pessoa->getApelido()."<br>";
    echo $Pessoa->getNascimento()."<br>";
    echo $Pessoa->getFederal()."<br>";
    echo $Pessoa->getEstadual()."<br>";
    echo $Pessoa->getMunicipal()."<br>";
    echo $Pessoa->getRua()."<br>";
    echo $Pessoa->getNumero()."<br>";
    echo $Pessoa->getBairro()."<br>";
    echo $Pessoa->getCidade()."<br>";
    echo $Pessoa->getEstado()."<br>";
    echo $Pessoa->getCEP()."<br>";
    echo $Pessoa->getComplemento()."<br>";
    echo $Pessoa->getTipoPessoa()."<br>";

?>