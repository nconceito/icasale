<?php
    class clsPessoa{

        //Variáveis locais
        private $Tabela = "Pessoas";
        private $CampoID = "PessoaID";

        private $PessoaID;
        private $Nome;
        private $Apelido;
        private $Nascimento;
        private $Federal;
        private $Estadual;
        private $Municipal;
        private $Rua;
        private $Numero;
        private $Bairro;
        private $Cidade;
        private $Estado;
        private $CEP;
        private $Complemento;
        private $TipoPessoa;


        //Propriedades
        function getPessoaID(){return $this->PessoaID;}

        function getNome(){return $this->Nome;}
        function setNome($valor){$this->Nome=$valor;}

        function getApelido(){return $this->Apelido;}
        function setApelido($valor){$this->Apelido=$valor;}

        function getNascimento(){return $this->Nascimento;}
        function setNascimento($valor){$this->Nascimento=$valor;}

        function getFederal(){return $this->Federal;}
        function setFederal($valor){$this->Federal=$valor;}

        function getEstadual(){return $this->Estadual;}
        function setEstadual($valor){$this->Estadual=$valor;}

        function getMunicipal(){return $this->Municipal;}
        function setMunicipal($valor){$this->Municipal=$valor;}

        function getRua(){return $this->Rua;}
        function setRua($valor){$this->Rua=$valor;}

        function getNumero(){return $this->Numero;}
        function setNumero($valor){$this->Numero=$valor;}

        function getBairro(){return $this->Bairro;}
        function setBairro($valor){$this->Bairro=$valor;}

        function getCidade(){return $this->Cidade;}
        function setCidade($valor){$this->Cidade=$valor;}

        function getEstado(){return $this->Estado;}
        function setEstado($valor){$this->Estado=$valor;}

        function getCEP(){return $this->CEP;}
        function setCEP($valor){$this->CEP=$valor;}

        function getComplemento(){return $this->Complemento;}
        function setComplemento($valor){$this->Complemento=$valor;}

        function getTipoPessoa(){return $this->TipoPessoa;}
        function setTipoPessoa($valor){$this->TipoPessoa=$valor;}

        //Métodos

        //Método Criar
        function Incluir(){

            $sql = "insert into ". $this->Tabela."
                (
                    Nome,
                    Apelido, 
                    Nascimento,
                    Federal, 
                    Estadual, 
                    Municipal, 
                    Rua, 
                    Número, 
                    Bairro,
                    Cidade, 
                    Estado, 
                    CEP, 
                    Complemento,
                    TipoPessoa
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
                    ?, 
                    ?, 
                    ?
                )";
                
            include "config.php";  

            if ($comando = $Dados->prepare($sql)){
                $comando->bind_param(
                    "ssssssssssssss",
                    $this->Nome,
                    $this->Apelido,
                    $this->Nascimento,
                    $this->Federal,
                    $this->Estadual,
                    $this->Municipal,
                    $this->Rua,
                    $this->Numero,
                    $this->Bairro,
                    $this->Cidade,
                    $this->Estado,
                    $this->CEP,
                    $this->Complemento,
                    $this->TipoPessoa            
                );
                
                
                $comando->execute();
                
                
                $msg='{"Código":0,"Mensagem":"Ok"}';
                return $msg;
                
            } else {
                
                $msg = '{"Codigo":"1","Mensagem":"Não foi possível incluir."}';
                echo $msg;
                
                var_dump($comando);                
                return $msg;

            }
        }

        //Método Carregar por ID

        function CarregarID($ID){

            include "config.php";

            $sql = "select * from ".$this->Tabela." where " . $this->CampoID . " = ?";

            if ($comando = $Dados->prepare($sql)){

                $comando->bind_param("i", $ID);
                $comando->execute();
                $resultado = $comando->get_result();
                $obj = $resultado->fetch_object();

                $this->PessoaID =$obj->PessoaID;
                $this->Nome=$obj->Nome;
                $this->Apelido=$obj->Apelido;
                $this->Nascimento=$obj->Nascimento;
                $this->Federal=$obj->Federal;
                $this->Estadual=$obj->Estadual;
                $this->Municipal=$obj->Municipal;
                $this->Rua=$obj->Rua;
                $this->Numero=$obj->Número;
                $this->Bairro=$obj->Bairro;
                $this->Cidade=$obj->Cidade;
                $this->Estado=$obj->Estado;
                $this->CEP=$obj->CEP;
                $this->Complemento=$obj->Complemento;
                $this->TipoPessoa=$obj->TipoPessoa;
        
                $msg='{"Código":0,"Mensagem":"Ok"}';
                return $msg;

            } else {

                $msg = '{"Codigo":"1","Mensagem":"Não foi possível carregar."}';
                return $msg;
            }
        }

        //Método Carregar por campo, valor e tipo
        function Carregar($Campo, $Valor, $Tipo){

            include "config.php";

            $sql = "select * from ".$this->Tabela." where ".$Campo." like ?";

            if ($comando = $Dados->prepare($sql)){

                $comando->bind_param($Tipo, $Valor);
                $comando->execute();
                $resultado = $comando->get_result();

                $retorno='
                {"Pessoa":[';
                
                while ($obj = $resultado->fetch_array()){

                    $retorno = $retorno . '
                    {
                        "PessoaID":'.$obj["PessoaID"].',
                        "Nome":"'.$obj["Nome"].'",
                        "Apelido":"'.$obj["Apelido"].'",
                        "Nascimento":"'.$obj["Nascimento"].'",
                        "Estadual":"'.$obj["Estadual"].'",
                        "Municipal":"'.$obj["Municipal"].'",
                        "Rua":"'.$obj["Rua"].'",
                        "Numero":"'.$obj["Número"].'",
                        "Bairro":"'.$obj["Bairro"].'",
                        "Cidade":"'.$obj["Cidade"].'",
                        "Estado":"'.$obj["Estado"].'",
                        "CEP":"'.$obj["CEP"].'",
                        "Complemento":"'.$obj["Complemento"].'",
                        "TipoPessoa":"'.$obj["TipoPessoa"].'"
                    },';
                }
                
                $tamanho = strlen($retorno);

                $retorno = substr($retorno,0, $tamanho-1);
                $retorno = $retorno . "                
                ]}";
                return $retorno;

                $msg='{"Código":0,"Mensagem":"Ok"}';
                return $msg;

            } else {

                $msg = '{"Codigo":"1","Mensagem":"Não foi possível carregar."}';

            }
        }

        //Método Atualizar
        function Salvar(){

            include "config.php";

            $Nasc = date("Y-m-d", strtotime($this->Nascimento));

            $sql = "update " . $this->Tabela . " set             
            
            Nome = '$this->Nome',
            Apelido = '$this->Apelido',
            Nascimento = '$Nasc',
            Federal = '$this->Federal',
            Estadual = '$this->Estadual',
            Municipal = '$this->Municipal',
            Rua = '$this->Rua',
            Número = '$this->Numero',
            Bairro = '$this->Bairro',
            Cidade = '$this->Cidade',
            Estado = '$this->Estado',
            CEP = '$this->CEP',
            Complemento = '$this->Complemento',
            TipoPessoa = '$this->TipoPessoa'
            
            where " . $this->CampoID . " = ?";

          
            if ($comando = $Dados->prepare($sql)){			

                $comando->bind_param("i", $this->PessoaID);
                $comando->execute();
                
                //var_dump($comando);

                $msg='{"Código":0,"Mensagem":"Ok"}';
                return $msg;

            } else {

                $msg = '{"Codigo":"1","Mensagem":"Não foi possível carregar."}';
                return $msg;

            }
        }

        //Método Excluir

        function Excluir(){

            include "config.php";  
            
            $sql = "Delete from " . $Tabela . " where " . $CampoID . " = ?";

            if ($comando = $Dados->prepare($sql)){			

                $comando->bind_param("i", $this->$PropriedadeID);
                $comando->execute();

                $msg='{"Código":0,"Mensagem":"Ok"}';
                return $msg;

            } else {

                $msg = '{"Codigo":"1","Mensagem":"Não foi possível Excluir."}';

            }
        }

        function Limpar(){

            $this->PessoaID = 0;
            $this->Nome="";
            $this->Apelido="";
            $this->Nascimento="";
            $this->Federal="";
            $this->Estadual="";
            $this->Municipal="";
            $this->Rua="";
            $this->Numero="";
            $this->Bairro="";
            $this->Cidade="";
            $this->Estado="";
            $this->CEP="";
            $this->Complemento="";
            $this->TipoPessoa="";
        }
    }
?>