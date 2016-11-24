$(document).ready(function () {

    $('#create-tarefa').submit(function (event) {
        event.preventDefault();


        var form = $(this);
        var formData = form.serialize();

        $.ajax({
            url: 'create.php',
            method: 'POST',
            data: formData,
            success: function (data) {
                $('#ajax_msg').css("display", "block").delay(3000).slideUp(300).html(data);
                document.getElementById("create-tarefa").reset();
            }
        });



    });

    $('#task-list').load('read.php');
});


function EditarTarefa(div) {
    div.style.border = "1px solid lavender";
    div.style.padding = "5px";
    div.style.background = "branco";
    div.contentEditable = true;
}

function AtualizaNome(target, taskId) {
    var data = target.textContent;
    target.style.border = "none";
    target.style.padding = "0px";
    target.style.background = "#ececec";
    target.contentEditable = false;

    $.ajax({
        url: 'update.php',
        method: 'POST',
        data: {name: data, id: taskId},
        success: function (data) {
            $('#ajax_msg').css("display", "block").delay(3000).slideUp(300).html(data);
            document.getElementById("create-tarefa").reset();
        }
    });
}

function AtualizaDescricao(target, taskId) {
    var data = target.textContent;
    target.style.border = "none";
    target.style.padding = "0px";
    target.style.background = "#ececec";
    target.contentEditable = false;

    $.ajax({
        url: 'update.php',
        method: 'POST',
        data: {description: data, id: taskId},
        success: function (data) {
            $('#ajax_msg').css("display", "block").delay(3000).slideUp(300).html(data);
            document.getElementById("create-tarefa").reset();
        }
    });
}

function AtualizaStatus(target, taskId) {
    var data = target.textContent;
    target.style.border = "none";
    target.style.padding = "0px";
    target.style.background = "#ececec";
    target.contentEditable = false;

    $.ajax({
        url: 'update.php',
        method: 'POST',
        data: {status: data, id: taskId},
        success: function (data) {
            $('#ajax_msg').css("display", "block").delay(3000).slideUp(300).html(data);
            document.getElementById("create-tarefa").reset();
        }
    });
}

function ExcluirTarefa(taskId) {
    if(confirm("Você tem certeza que quer deletar a tarefa?")){
        $.ajax({
        url: 'delete.php',
        method: 'POST',
        data: {id: taskId},
        success: function (data) {
            $('#ajax_msg').css("display", "block").delay(3000).slideUp(300).html(data);
            document.getElementById("create-tarefa").reset();
        }
    });
    
    $('#task-list').load('read.php');
    }
    
    return false;
}