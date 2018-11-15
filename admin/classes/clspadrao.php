<?php
    class padrao{

        //Variáveis locais
        $Tabela = "NomeDaTabela";
        $CampoID = "NomeDoCampoID";
        
        private $Propriedade1
        private $Propriedade2
        private $Propriedade3

        //Propriedades
        function getPropriedade1(){return $Propriedade1;}
        function setPropriedade1($valor){$Propriedade1=$valor;}
        
        function getPropriedade2(){return $Propriedade2;}
        function setPropriedade2($valor){$Propriedade2=$valor;}

        function getPropriedade3(){return $Propriedade3;}
        function setPropriedade3($valor){$Propriedade3=$valor;}

        //Métodos

        //Método Criar
        function Incluir(){

            $sql = "insert into ".$Tabela." (
                Propriedade1,
                Propriedade2,
                Propriedade3,
            ) values (
                ?,
                ?,
                ?
            )";

            include "config.php";   
            if ($comando = $Dados->prepare($sql)){
                $comando->bind_param(
                    "sss",
                    $this->Propriedade1,
                    $this->Propriedade2,
                    $this->Propriedade3
                );

                $comando->execute();
                
                $msg='{"Código":0,"Mensagem":"Ok"}';
                return $msg;

            } else {

                $msg = '{"Codigo":"1","Mensagem":"Não foi possível incluir."}';
                return $msg;

            }
        }

        //Método Carregar por ID

        function CarregarID($ID){

            include "config.php";   

            $sql = "select * from ".$Tabela." where "./* Nome do campo ID */." = ?";

            if ($comando = $Dados->prepare($sql)){

                $comando->bind_param("i", $this->$ID);
                $comando->execute();
                $resultado = $comando->get_result();
                $obj = $resultado->fetch_object();

                $this->Propriedade1 = $obj->Propriedade1;
                $this->Propriedade2 = $obj->Propriedade2;
                $this->Propriedade3 = $obj->Propriedade3;

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

            $sql = "select * from ".$Tabela." where ".$Campo." = ?";

            if ($comando = $Dados->prepare($sql)){

                $comando->bind_param($Tipo, $this->$Valor);
                $comando->execute();
                $resultado = $comando->get_result();
                $obj = $resultado->fetch_object();

                $this->Propriedade1=$obj->Propriedade1;
                $this->Propriedade2=$obj->Propriedade2;
                $this->Propriedade3=$obj->Propriedade3;

                $msg='{"Código":0,"Mensagem":"Ok"}';
                return $msg;

            } else {

                $msg = '{"Codigo":"1","Mensagem":"Não foi possível carregar."}';

            }
        }

        //Método Atualizar
        function Salvar(){

            include "config.php";

            $sql = "update ".$tabela." set             
            Propriedade1 = '".$this->Propriedade1."',
            Propriedade2 = '".$this->Propriedade2."',
            Propriedade3 = '".$this->Propriedade3."'
            ";

            if ($comando = $Dados->prepare($sql)){			

                $comando->bind_param("i", $this->$PropriedadeID);
                $comando->execute();
                $resultado = $comando->get_result();
                $obj = $resultado->fetch_object();		

                $this->Propriedade1=$obj->Propriedade1;
                $this->Propriedade2=$obj->Propriedade2;
                $this->Propriedade3=$obj->Propriedade3;

                $msg='{"Código":0,"Mensagem":"Ok"}';
                return $msg;

            } else {

                $msg = '{"Codigo":"1","Mensagem":"Não foi possível carregar."}';

            }
        }

        //Método Excluir

        function Excluir(){

            include "config.php";  
            
            $sql = "Delete from " . $Tabela . " where " . /* Nome do campo ID */ . " = ?";

            if ($comando = $Dados->prepare("select * from ".$Tabela." where "./* Nome do campo ID */." = ?")){			

                $comando->bind_param("i", $this->$PropriedadeID);
                $comando->execute();

                $msg='{"Código":0,"Mensagem":"Ok"}';
                return $msg;

            } else {

                $msg = '{"Codigo":"1","Mensagem":"Não foi possível Excluir."}';

            }
        }
    }
?>