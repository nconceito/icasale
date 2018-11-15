<?php

    include "classes.php";

    if(isset($_POST["acao"])){

        //Ação: Novo Usuário
        if($_POST["acao"] == "nu"){

            $NovoUsuario = new clsUsuario();

            $NovoUsuario->setNome($_POST["nome"]);
            $NovoUsuario->setCargo($_POST["cargo"]);
            $NovoUsuario->setTelefone($_POST["telefone"]);
            $NovoUsuario->setEmail($_POST["email"]);
            $NovoUsuario->setUsuario($_POST["usuario"]);
            $NovoUsuario->setSenha($_POST["senha"]);

            $NovoUsuario->Incluir();

        } else {
 
            echo '{
                    "Codigo":"99",
                    "Mensagem":"Sem ação!"
                }"';
        }
    }
?>