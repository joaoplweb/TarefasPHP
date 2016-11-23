<?php $pageTitle = "Gerenciador de Tarefas Supero"?>

<?php include_once './partials/header.php';?>

<div class="container-fluid">
    <section class="col .col-xs-12 .col-sm-6 .col-md-8 col-lg-6 branco">
        <h3 class="text-primary">Nova tarefa </h3><hr>
        <form id="create-tarefa" action="" method="post">
            <div class="form-group">
                <label for="name" class="col-md-2 control-label">Nome</label>
                <div class="col-md-10">
                    <input name="name" class="form-control" id="name" type="text">
                </div>
            </div>

            <div class="form-group">
                <label for="description" class="col-md-2 control-label">Descrição</label>
                <div class="col-md-10">
                    <textarea class="form-control" rows="3" name="description" id="description"></textarea>
                </div>
            </div>
            <button type="submit" name="createBtn" class="btn btn-success pull-right">
                Criar Tarefa <i class="fa fa-plus"></i></button>
        </form>
    </section>
</div>

<?php include_once './partials/footer.php';?>