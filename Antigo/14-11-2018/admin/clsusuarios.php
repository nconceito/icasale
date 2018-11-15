<?php
class Usuarios {

    private $UsuarioID;
    private $Usuario;
    private $Senha;
    private $Nome;
    private $Cargo;
    private $Desde;
    private $Foto;
    private $Email;
    private $Telefone;
    
    public function getUsuarioID() {return $this->UsuarioID;}
    public function setUsuarioID($UsuarioID) { $this->UsuarioID = $UsuarioID;}
    
    public function getUsuario() {return $this->Usuario;}
    public function setUsuario($Usuario) { $this->Usuario = $Usuario;}

    public function getSenha() {return $this->Senha;}
    public function setSenha($Senha) { $this->Senha = $Senha;}

    public function getNome() {return $this->Nome;}
    public function setNome($Nome) { $this->Nome = $Nome;}

    public function getCargo() {return $this->Cargo;}
    public function setCargo($Cargo) { $this->Cargo = $Cargo;}

    public function getDesde() {return $this->Desde;}
    public function setDesde($Desde) { $this->Desde = $Desde;}

    public function getFoto() {return $this->Foto;}
    public function setFoto($Foto) { $this->Foto = $Foto;}

    public function getEmail() {return $this->Email;}
    public function setEmail($Email) { $this->Email = $Email;}

    public function getTelefone() {return $this->Telefone;}
    public function setTelefone($Telefone) { $this->Telefone = $Telefone;}

    function CarregaUsuario(){

        include "config.php";   
		if ($comando = $Dados->prepare("select * from Usuarios where Usuario = ?")){			
            
            //Echo "Usuário: ".$this->Usuario;
            
            $comando->bind_param("s", $this->Usuario);
			$comando->execute();
			$resultado = $comando->get_result();
            $obj = $resultado->fetch_object();		
            
            $this->Nome=$obj->Nome;
            $this->UsuarioID=$obj->UsuarioID;
            $this->Cargo=$obj->Cargo;
            $this->Desde=$obj->Desde;
            $this->Foto=$obj->Foto;
            $this->Email=$obj->Email;
            $this->Telefone=$obj->Telefone;
            
            $msg='{"Código":0,"Mensagem":"Ok"}';
            return $msg;
        } else {
            
            $msg = '{"Codigo":"1","Mensagem":"Não foi possível carregar o usuário"}';

        }
    }
    function Entrar($Login, $Password){

        include "config.php";   
		if ($comando = $Dados->prepare("select * from Usuarios where Usuario = ? and Senha = ?")){
			$comando->bind_param("ss", $Login, $Senha);
			$comando->execute();
			$resultado = $comando->get_result();
            $obj = $resultado->fetch_object();		
            
            $msg = '{"Codigo":"0","Mensagem":"Ok"}';
            return $msg;
            
        } else {

            $msg='{"Código":2,"Mensagem":"Usuário ou senha incorretos."}';

        }
    }
}
?>