<?php

    class clsUsuario {

        private $Nome;
        private $Cargo;
        private $Telefone;
        private $Email;
        private $Usuario;
        private $Senha;
        private $Desde;

        function getNome(){return $this->Nome;}
        function setNome($Valor){$this->Nome = $Valor;}

        function getCargo(){return $this->Cargo;}
        function setCargo($Valor){$this->Cargo = $Valor;}

        function getTelefone(){return $this->Telefone;}
        function setTelefone($Valor){$this->Telefone = $Valor;}

        function getEmail(){return $this->Email;}
        function setEmail($Valor){$this->Email = $Valor;}

        function getSenha(){return $this->Senha;}
        function setSenha($Valor){$this->Senha = $Valor;}

        function getUsuario(){return $this->Usuario;}
        function setUsuario($Valor){$this->Usuario = $Valor;}

        function getDesde(){return $this->Desde;}
        function setDesde($Valor){$this->Desde = $Valor;}

        function Incluir(){

            //$sql = "insert into Usuarios (Nome, Cargo, Email, Telefone, Senha, Usuario) values (";
            //$sql = $sql."'".$this->Nome."', ";
            //$sql = $sql."'".$this->Cargo."', ";
            //$sql = $sql."'".$this->Email."', ";
            //$sql = $sql."'".$this->Telefone."', ";
            //$sql = $sql."'".$this->Senha."', ";
            //$sql = $sql."'".$this->Usuario."')";

            //return $sql;

            $sql = "insert into Usuarios 
                    (Nome, Cargo, Email, Telefone, Senha, Usuario, Foto)
                    values 
                    (?, ?, ?, ?, ?, ?,'/admin/fotos/semfoto.png')";

            include "config.php";   
            if ($comando = $Dados->prepare($sql)){
                $comando->bind_param("ssssss", $this->Nome, $this->Cargo, $this->Email, $this->Telefone, $this->Senha, $this->Usuario);
                $comando->execute();                
            }        
        }
    }

    class Pessoa {
        
        Private $PessoaID;
        Private $Nome;
        Private $Apelido;
        Private $Federal;
        Private $Estadual;
        Private $Municipal;
        Private $Rua;
        Private $Numero;
        Private $Bairro;
        Private $Cidade;
        Private $Estado;
        Private $Complemento;

        function getNome(){return $this->Nome;}
        function setNome($Valor){$this->Nome = $Valor;}

        function getApelido(){return $this->Apelido;}
        function setApelido($Valor){$this->Apelido = $Valor;}

        function getFederal(){return $this->Federal;}
        function setFederal($Valor){$this->Federal = $Valor;}

        function getEstadual(){return $this->Estadual;}
        function setEstadual($Valor){$this->Estadual = $Valor;}

        function getMunicipal(){return $this->Municipal;}
        function setMunicipal($Valor){$this->Municipal = $Valor;}

        function getRua(){return $this->Rua;}
        function setRua($Valor){$this->Rua = $Valor;}

        function getNumero(){return $this->Numero;}
        function setNumero($Valor){$this->Numero = $Valor;}

        function getBairro(){return $this->Bairro;}
        function setBairro($Valor){$this->Bairro = $Valor;}

        function getCidade(){return $this->Cidade;}
        function setCidade($Valor){$this->Cidade = $Valor;}

        function getEstado(){return $this->Estado;}
        function setEstado($Valor){$this->Estado = $Valor;}

        function getComplemento(){return $this->Complemento;}
        function setComplemento($Valor){$this->Complemento = $Valor;}

        Function Incluir() {

            $sql = "insert into Pessoas (
                Nome,
                Apelido,
                Federal,
                Estadual,
                Municipal,
                Rua,
                Numero,
                Bairro,
                Cidade,
                Estado,
                Complemento
                ) values (
                    ?,
                    ?,
                    ?,
                    ?,
                    ?,
                    ?,
                    ?,
                    ?,
                    ?,
                    ?,
                    ?,
                    )";

            include "config.php";   
            if ($comando = $Dados->prepare($sql)){
                $comando->bind_param("isssssssssss",
                                    $this->PessoaID,
                                    $this->Nome,
                                    $this->Apelido,
                                    $this->Federal,
                                    $this->Estadual,
                                    $this->Municipal,
                                    $this->Rua,
                                    $this->Numero,
                                    $this->Bairro,
                                    $this->Cidade,
                                    $this->Estado,
                                    $this->Complemento);
            
            $comando->execute();                
            }        


        }

    }

    class Telefones {

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
        
        function Excluir(){}
        
    }
?>