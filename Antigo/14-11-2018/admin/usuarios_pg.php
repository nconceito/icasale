<?php

    if($_SESSION['usuario'] == "admin"){
   

?>

<section class="content-header">
    <h1>
        Usuários
        <small>Cadastro, bloqueio desbloqueio, etc...</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="."><i class="fa fa-dashboard"></i> Início</a></li>
        <li><i class="fa fa-home"></i> Usuários</li>
    </ol>
    <br>

</section>

<!-- Main content -->
<section class="content">    
    <div class="box box-info color-palette-box">
        <div class="box-header with-border">
            <h3 class="box-title"><i class="fa fa-user"></i> Novo Usuário</h3>
        </div>
        <div class="box-body">
            <!-- Form Name -->
            <?php
                //<legend>Dados do Proprietário do Imóvel</legend>
            ?>
            <div class="row">
                <form action = "./ajax.php" method ="POST" class="form-horizontal">
                    <fieldset>
                        <input type="hidden" value ="nu" name="acao">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="inputName" class="col-sm-2 col-lg-2 control-label">Nome</label>
                                <div class="col-sm-10 col-lg-10">
                                    <input type="text" value = "" class="form-control " id="Nome" name="nome" placeholder="Nome" required />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="inputEmail" class="col-sm-2 control-label">Email</label>
                                <div class="col-sm-10 col-lg-10">
                                    <input type="email" value = "" class="form-control" id="email" name="email" placeholder="Email" required />
                                </div>
                            </div>
                            </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="inputFone" class="col-sm-2 control-label">Telefone</label>
                                <div class="col-sm-10 col-lg-10">
                                    <input type="text" value = "" class="form-control" id="Telefone"  name="telefone"  placeholder="Telefone" required />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="inputCargo" class="col-sm-2 control-label">Cargo</label>
                                <div class="col-sm-10 col-lg-10">
                                    <input type="text" value = "" class="form-control" id="Cargo" name="cargo" placeholder="Cargo" required />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="inputUsuario" class="col-sm-2 control-label">Usuário</label>
                                <div class="col-sm-10 col-lg-10">
                                    <input type="text" value = "" class="form-control" id="Usuario"  name="usuario"  placeholder="Usuário" required />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="inputSenha" class="col-sm-2 control-label">Senha</label>
                                <div class="col-sm-10 col-lg-10">
                                    <input type="password" value = "" class="form-control" id="Senha"  name="senha"  placeholder="Senha" required />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="inputSenha" class="col-sm-2 control-label">Repetir Senha</label>
                                <div class="col-sm-10 col-lg-10">
                                    <input type="password" value = "" class="form-control" id="ConfirmaSenha"  name="confirma"  placeholder="Repetir Senha" required />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-8">
                                    <button type="submit" class="btn btn-success">Salvar</button>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div><!-- /.box-body -->
    </div><!-- /.box -->

</section>



 <?php
 } else {
     echo "Acesso negado";
 }
 
 ?>