<?php

include_once './conexao.php';

if(isset($_POST['name']) && isset($_POST['id'])){
    $name = trim($_POST['name']);
    $id = $_POST['id'];
    
    try {
        
        $updateQuery = "UPDATE tarefasSupero SET name = :name
                WHERE id = :id";
        
        $statement = $conn->prepare($updateQuery);
        $statement->execute(array(":name" => $name, ":id" => $id));
        
        if($statement){
            echo "Tarefa Atualizada com Sucesso!";
        }
        
    } catch (PDOException $ex) {
        echo "Ocorreu um erro" . $ex->getMessage();
    }
}

else if(isset($_POST['description']) && isset($_POST['id'])){
    $description = trim($_POST['description']);
    $id = $_POST['id'];
    
    try {
        
        $updateQuery = "UPDATE tarefasSupero SET description = :description
                WHERE id = :id";
        
        $statement = $conn->prepare($updateQuery);
        $statement->execute(array(":description" => $description, ":id" => $id));
        
        if($statement){
            echo "Descrição Atualizada com Sucesso!";
        }
        
    } catch (PDOException $ex) {
        echo "Ocorreu um erro" . $ex->getMessage();
    }
}

else if(isset($_POST['status']) && isset($_POST['id'])){
    $status = trim($_POST['status']);
    $id = $_POST['id'];
    
    try {
        
        $updateQuery = "UPDATE tarefasSupero SET status = :status
                WHERE id = :id";
        
        $statement = $conn->prepare($updateQuery);
        $statement->execute(array(":status" => $status, ":id" => $id));
        
        if($statement){
            echo "Status Atualizada com Sucesso!";
        }
        
    } catch (PDOException $ex) {
        echo "Ocorreu um erro" . $ex->getMessage();
    }
}