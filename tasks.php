<?php $pageTitle = "Gerenciador de Tarefas Supero"?>

<?php include_once './partials/header.php';?>

<div class="container-fluid">
    <section class="col .col-xs-12 .col-sm-6 .col-md-8 col-lg-12 main">
        <h3 class="text-primary">Gerenciador de Tarefa </h3><hr>

        <table class="table table-striped table-bordered table-responsive">
            <thead>
            <tr><th>Nome</th><th>Descrição</th><th>Status</th><th>Criado</th><th>Ação</th></tr>
            </thead>
            
            <tbody id="task-list"> </tbody>
        </table>
    </section>
</div>

<?php include_once './partials/footer.php';?>