<section class="content-header">
    <h1>
        Perfil
        <small>Perfil do usuário</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="."><i class="fa fa-dashboard"></i> Início</a></li>
        <li><i class="fa fa-home"></i> Perfil</li>
    </ol>
    <br>

    <div class = "container">

        <div class="col-md-3">
            <!-- Profile Image -->
            <div class="box box-primary">
                <div class="box-body box-profile">
                    <img class="profile-user-img img-responsive img-circle" src="<?php echo $user->getFoto(); ?>"  alt="Foto do Usuário">
                    <h3 class="profile-username text-center"><?php echo $user->getNome(); ?></h3>
                    <p class="text-muted text-center"><?php echo $user->getCargo(); ?></p>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->

        <div class="col-md-9">
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#settings" data-toggle="tab">Configurações</a></li>
                </ul>
                <div class="tab-content">

                    <div class="active tab-pane" id="settings">
                        <form class="form-horizontal">
                            <div class="form-group">
                                <label for="inputName" class="col-sm-2 control-label">Nome</label>
                                <div class="col-sm-10">
                                    <input type="text" value = "<?php echo $user->getNome(); ?>" class="form-control" id="inputName" placeholder="Nome">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail" class="col-sm-2 control-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" value = "<?php echo $user->getEmail(); ?>" class="form-control" id="inputEmail" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputName" class="col-sm-2 control-label">Telefone</label>
                                <div class="col-sm-10">
                                    <input type="text" value = "<?php echo $user->getTelefone(); ?>" class="form-control" id="inputFone" placeholder="Telefone">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputExperience" class="col-sm-2 control-label">Cargo</label>
                                <div class="col-sm-10">
                                    <input type="text" value = "<?php echo $user->getCargo(); ?>" class="form-control" id="inputExperience" placeholder="Cargo"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-success">Salvar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
            </div>
            <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->        


    </div>
</section>