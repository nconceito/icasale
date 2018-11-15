<?php

class clsTelefone{

        
    private $TelefoneID;
    private $PessoaID;
    private $Numero;

    function getTelefoneID(){return $this->TelefoneID;}
    function setTelefoneID($Valor){$this->TelefoneID = $Valor;}

    function getPessoaID(){return $this->PessoaID;}
    function setPessoaID($Valor){$this->PessoaID = $Valor;}

    function getNumero(){return $this->Numero;}
    function setNumero($Valor){$this->Numero = $Valor;}

    function Incluir(){

        $sql = "insert into Telefones (
            PessoaID,
            Numero
            ) values (
            ?,
            ?
            )";

        include "config.php";   
        if ($comando = $Dados->prepare($sql)){
            $comando->bind_param("is",
                                $this->PessoaID,
                                $this->Numero
                                );}

        $comando->execute();
    }

    function Salvar(){
        
        $sql = "update Telefones set 
            PessoaID = ?,
            Numero = ?,
            where TelefoneID = ?";
        
        include "config.php";   
        if ($comando = $Dados->prepare($sql)){
            $comando->bind_param("iss",
                                $this->PessoaID,
                                $this->Numero,
                                $this->TelefoneID
                                );}

    }
        
    function Excluir(){

    }
        
}
?>