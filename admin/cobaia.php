<?php

    include_once "classes/clsPessoas.php";

    $Pessoa = new clsPessoa();
    
    $Pessoa->CarregarID(5);

    echo "Código: ".$Pessoa->getPessoaID()."<br>";
    echo "Tipo de pessoa: ".$Pessoa->getTipoPessoa()."<br>";
    echo "Nome: ".$Pessoa->getNome()."<br>";
    echo "Apelido: ".$Pessoa->getApelido()."<br>";
    echo "Nascimento: " . date('d/m/Y', strtotime($Pessoa->getNascimento()))."<br>";


    
    echo "CPF: ".$Pessoa->getFederal()."<br>";
    echo "RG: ".$Pessoa->getEstadual()."<br>";
    echo "Inscição Municipal: ".$Pessoa->getMunicipal()."<br>";
    echo "Endereço: ".$Pessoa->getRua().", ".$Pessoa->getNumero()." - ".$Pessoa->getBairro()." - ".$Pessoa->getComplemento()."<br>";
    echo "".$Pessoa->getCidade()." - ".$Pessoa->getEstado()." - ".$Pessoa->getCEP()."<br>";

?>