<?php

/*    include "classes/clsPessoas.php";
    $pessoa = new clsPessoa();

    $p = $pessoa->Carregar("Nome","%a%","s");
    
    $Cliente = json_decode($p);

    for ($i = 0; $i <= count($Cliente->Pessoa)-1; $i++){
        echo "<br>";
        echo "Nome: " . $Cliente->Pessoa[$i]->Nome . "<br>";
        echo "Apelido: " . $Cliente->Pessoa[$i]->Apelido . "<br>";
        echo "Nascimento: " . date("d/m/Y", strtotime($Cliente->Pessoa[$i]->Nascimento)) . "<br>";
        echo "Rua: " . $Cliente->Pessoa[$i]->Rua . "<br>";
        echo "Número: " . $Cliente->Pessoa[$i]->Numero . "<br>";
        echo "Bairro: " . $Cliente->Pessoa[$i]->Bairro . "<br>";
        echo "Cidade: " . $Cliente->Pessoa[$i]->Cidade . "<br>";
        echo "Estado: " . $Cliente->Pessoa[$i]->Estado . "<br>";
        echo "CEP: " . $Cliente->Pessoa[$i]->CEP . "<br>";
        echo "Complemento: " . $Cliente->Pessoa[$i]->Complemento . "<br>";
        echo "Tipo: " . $Cliente->Pessoa[$i]->TipoPessoa . "<br>";

    }
    */
    
    
    include "classes/clsImovel.php";
    
    $Imovel = new clsImovel();
    
 /*   $Imovel->CarregarID(1);    
    
    $Imovel->setTitulo("Casa no Cidade Aracy");
    $Imovel->setTipoImovel(1);
    $Imovel->setEndereco("Rua Maristela Tagliatela Custódio");
    $Imovel->setNumero("124");
    $Imovel->setBairro("Cidade Aracy");
    $Imovel->setCidade("São Carlos");
    $Imovel->setEstado("SP");
    $Imovel->setCEP("13573-026");
    $Imovel->setComplemento("Casa com um coqueiro em frente DA CASA.");
    $Imovel->setAreaUtil("40");
    $Imovel->setAreaTotal("80");
    $Imovel->setValorCondominio("0");
    $Imovel->setValorIPTU("120");
    $Imovel->setValorAluguel("600");
    $Imovel->setValorVenda("0");
    $Imovel->setDormitorios("1");
    $Imovel->setBanheiros("1");
    $Imovel->setVagas("2");
    $Imovel->setSuites("0");
    
    $Imovel->Salvar();

    $Imovel->Limpar();
*/
    $Imovel->CarregarID(1);

    echo "Código: " . $Imovel->getImovelID() . "<br>";
    echo "Titulo: " . $Imovel->getTitulo() . "<br>";
    echo "Tipo: " . $Imovel->getTipoImovel() . "<br>";
    echo "Endereço: " . $Imovel->getEndereco() . "<br>";
    echo "Numero: " . $Imovel->getNumero() . "<br>";
    echo "Bairro: " . $Imovel->getBairro() . "<br>";
    echo "Cidade: " . $Imovel->getCidade() . "<br>";
    echo "Estado: " . $Imovel->getEstado() . "<br>";
    echo "CEP: " . $Imovel->getCEP() . "<br>";
    echo "Complemento: " . $Imovel->getComplemento() . "<br>";
    echo "AreaUtil: " . $Imovel->getAreaUtil() . "<br>";
    echo "AreaTotal: " . $Imovel->getAreaTotal() . "<br>";
    echo "Condomínio: " . $Imovel->getValorCondominio() . "<br>";
    echo "IPTU: " . $Imovel->getValorIPTU() . "<br>";
    echo "Aluguel: " . $Imovel->getValorAluguel() . "<br>";
    echo "Venda: " . $Imovel->getValorVenda() . "<br>";
    echo "Dormitórios: " . $Imovel->getDormitorios() . "<br>";
    echo "Banheiros: " . $Imovel->getBanheiros() . "<br>";
    echo "Vagas: " . $Imovel->getVagas() . "<br>";
    echo "Suites: " . $Imovel->getSuites() . "<br><br>";
    
?>