<?php

include_once './conexao.php';

try{
    $readQuery = "SELECT * FROM tarefasSupero";
    
    $statement = $conn->query($readQuery);
    
    while($tarefa = $statement->fetch(PDO::FETCH_OBJ)){
        
        $create_date = strftime("%d %b, %Y", strtotime($tarefa->created_at));
        $output = "
            <tr>
                <td title='Clique para editar'><div style='cursor:pointer' onclick=\"EditarTarefa(this)\" onblur=\"AtualizaNome(this, '{$tarefa->id}')\"> $tarefa->name </div></td>
                <td title='Clique para editar'><div style='cursor:pointer' onclick=\"EditarTarefa(this)\" onblur=\"AtualizaDescricao(this, '{$tarefa->id}')\"> $tarefa->description </div> </td>
                <td title='Clique para editar'><div style='cursor:pointer' onclick=\"EditarTarefa(this)\" onblur=\"AtualizaStatus(this, '{$tarefa->id}')\"> $tarefa->status </div> </td>
                <td> $create_date </td>
                <td style=\"width: 5%;\"><button onclick=\"ExcluirTarefa('{$tarefa->id}')\"><i class=\"btn-danger fa fa-times\"></i></button>
                </td>
            </tr>";
        
        echo $output;
    }
    
} catch (PDOException $ex) {
 echo "Ocorreu um erro" . $ex->getMessage();
}