<?php
     class clsImovel{

        
        //Variáveis locais
        private $Tabela = "Imoveis";
        private $CampoID = "ImovelID";


        private $ImovelID;
        private $Titulo;
        private $TipoImovel;
        private $Endereco;
        private $Numero;
        private $Bairro;
        private $Cidade;
        private $Estado;
        private $CEP;
        private $Complemento;
        private $AreaUtil;
        private $AreaTotal;
        private $ValorCondominio;
        private $ValorIPTU;
        private $ValorAluguel;
        private $ValorVenda;
        private $Dormitorios;
        private $Banheiros;
        private $Vagas;
        private $Suites;

        //Propriedades
        function getImovelID(){return $this->ImovelID;}


        function getTitulo(){return $this->Titulo;}
        function setTitulo($valor){$this->Titulo=$valor;}

        function getTipoImovel(){return $this->TipoImovel;}
        function setTipoImovel($valor){$this->TipoImovel=$valor;}

        function getEndereco(){return $this->Endereco;}
        function setEndereco($valor){$this->Endereco=$valor;}

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

        function getAreaUtil(){return $this->AreaUtil;}
        function setAreaUtil($valor){$this->AreaUtil=$valor;}

        function getAreaTotal(){return $this->AreaTotal;}
        function setAreaTotal($valor){$this->AreaTotal=$valor;}

        function getValorCondominio(){return $this->ValorCondominio;}
        function setValorCondominio($valor){$this->ValorCondominio=$valor;}

        function getValorIPTU(){return $this->ValorIPTU;}
        function setValorIPTU($valor){$this->ValorIPTU=$valor;}

        function getValorAluguel(){return $this->ValorAluguel;}
        function setValorAluguel($valor){$this->ValorAluguel=$valor;}

        function getValorVenda(){return $this->ValorVenda;}
        function setValorVenda($valor){$this->ValorVenda=$valor;}

        function getDormitorios(){return $this->Dormitorios;}
        function setDormitorios($valor){$this->Dormitorios=$valor;}

        function getBanheiros(){return $this->Banheiros;}
        function setBanheiros($valor){$this->Banheiros=$valor;}

        function getVagas(){return $this->Vagas;}
        function setVagas($valor){$this->Vagas=$valor;}

        function getSuites(){return $this->Suites;}
        function setSuites($valor){$this->Suites=$valor;}

        //Métodos

        //Método Criar
        function Incluir(){

            $sql = "insert into ". $this->Tabela."
                (
                    Titulo,
                    TipoImovel,
                    Endereco,
                    Numero,
                    Bairro,
                    Cidade,
                    Estado,
                    CEP,
                    Complemento,
                    AreaUtil,
                    AreaTotal,
                    ValorCondominio,
                    ValorIPTU,
                    ValorAluguel,
                    ValorVenda,
                    Dormitorios,
                    Banheiros,
                    Vagas,
                    Suites
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
                    "sssssssssssssssssss",
                    $this->Titulo,
                    $this->TipoImovel,
                    $this->Endereco,
                    $this->Numero,
                    $this->Bairro,
                    $this->Cidade,
                    $this->Estado,
                    $this->CEP,
                    $this->Complemento,
                    $this->AreaUtil,
                    $this->AreaTotal,
                    $this->ValorCondominio,
                    $this->ValorIPTU,
                    $this->ValorAluguel,
                    $this->ValorVenda,
                    $this->Dormitorios,
                    $this->Banheiros,
                    $this->Vagas,
                    $this->Suites
                );
                
                $comando->execute();                
                
                $msg='{"Código":0,"Mensagem":"Ok"}';
                return $msg;
                
            } else {
                
                $msg = '{"Codigo":"1","Mensagem":"Não foi possível incluir."}';
                echo $msg;
                
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

                
                $this->ImovelID=$obj->ImovelID;
                $this->Titulo=$obj->Titulo;
                $this->TipoImovel=$obj->TipoImovel;
                $this->Endereco=$obj->Endereco;
                $this->Numero=$obj->Numero;
                $this->Bairro=$obj->Bairro;
                $this->Cidade=$obj->Cidade;
                $this->Estado=$obj->Estado;
                $this->CEP=$obj->CEP;
                $this->Complemento=$obj->Complemento;
                $this->AreaUtil=$obj->AreaUtil;
                $this->AreaTotal=$obj->AreaTotal;
                $this->ValorCondominio=$obj->ValorCondominio;
                $this->ValorIPTU=$obj->ValorIPTU;
                $this->ValorAluguel=$obj->ValorAluguel;
                $this->ValorVenda=$obj->ValorVenda;
                $this->Dormitorios=$obj->Dormitorios;
                $this->Banheiros=$obj->Banheiros;
                $this->Vagas=$obj->Vagas;
                $this->Suites=$obj->Suites;
                
                
                
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
                $obj = $resultado->fetch_object();

                $retorno='
                {"Imovel":[';
                
                while ($obj = $resultado->fetch_array()){

                    $retorno = $retorno . '
                    {
                        "ImovelID":'.$obj["ImovelID"].',
                        "Titulo":'.$obj["Titulo"].',
                        "TipoImovel":'.$obj["TipoImovel"].',
                        "Endereco":'.$obj["Endereco"].',
                        "Numero":'.$obj["Numero"].',
                        "Bairro":'.$obj["Bairro"].',
                        "Cidade":'.$obj["Cidade"].',
                        "Estado":'.$obj["Estado"].',
                        "CEP":'.$obj["CEP"].',
                        "Complemento":'.$obj["Complemento"].',
                        "AreaUtil":'.$obj["AreaUtil"].',
                        "AreaTotal":'.$obj["AreaTotal"].',
                        "ValorCondominio":'.$obj["ValorCondominio"].',
                        "ValorIPTU":'.$obj["ValorIPTU"].',
                        "ValorAluguel":'.$obj["ValorAluguel"].',
                        "ValorVenda":'.$obj["ValorVenda"].',
                        "Dormitorios":'.$obj["Dormitorios"].',
                        "Banheiros":'.$obj["Banheiros"].',
                        "Vagas":'.$obj["Vagas"].'
                        "Suites":'.$obj["Suites"].',
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

            
            $sql = "update " . $this->Tabela . " set
            
            Titulo = ?,
            TipoImovel = ?,
            Endereco = ?,
            Numero = ?,
            Bairro = ?,
            Cidade = ?,
            Estado = ?,
            CEP = ?,
            Complemento = ?,
            AreaUtil = ?,
            AreaTotal = ?,
            ValorCondominio = ?,
            ValorIPTU = ?,
            ValorAluguel = ?,
            ValorVenda = ?,
            Dormitorios = ?,
            Banheiros = ?,
            Vagas = ?,
            Suites = ?
            where " . $this->CampoID . " = ?";

            echo $sql;
            
            if ($comando = $Dados->prepare($sql)){			


                $comando->bind_param(
                    
                    "sssssssssssssssssssi",

                    $this->Titulo,
                    $this->TipoImovel,
                    $this->Endereco,
                    $this->Numero,
                    $this->Bairro,
                    $this->Cidade,
                    $this->Estado,
                    $this->CEP,
                    $this->Complemento,
                    $this->AreaUtil,
                    $this->AreaTotal,
                    $this->ValorCondominio,
                    $this->ValorIPTU,
                    $this->ValorAluguel,
                    $this->ValorVenda,
                    $this->Dormitorios,
                    $this->Banheiros,
                    $this->Vagas,
                    $this->Suites,
                    $this->ImovelID
                );               

                
                
                $comando->execute();
                echo "<br><br>Linhas afetadas: "  . $comando->affected_rows;
                

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

            $this->Titulo="";
            $this->TipoImovel="";
            $this->Endereco="";
            $this->Numero="";
            $this->Bairro="";
            $this->Cidade="";
            $this->Estado="";
            $this->CEP="";
            $this->Complemento="";
            $this->AreaUtil="";
            $this->AreaTotal="";
            $this->ValorCondominio="";
            $this->ValorIPTU="";
            $this->ValorAluguel="";
            $this->ValorVenda="";
            $this->Dormitorios="";
            $this->Banheiros="";
            $this->Vagas="";
            $this->Suites="";
            $this->ImovelID="";

        }
    }

?>