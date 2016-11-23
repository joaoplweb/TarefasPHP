<?php

include_once './conexao.php';

if(isset($_POST['id'])){
    $id = $_POST['id'];
    
    try {
        
        $deleteQuery = "DELETE FROM tarefasSupero
                WHERE id = :id";
        
        $statement = $conn->prepare($deleteQuery);
        $statement->execute(array(":id" => $id));
        
        if($statement){
            echo "Tarefa Excluida com Sucesso!!";
        }
        
    } catch (PDOException $ex) {
        echo "Ocorreu um erro" . $ex->getMessage();
    }
}