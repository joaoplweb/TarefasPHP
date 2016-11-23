<?php

include_once './conexao.php';

if(isset($_POST['name']) && isset($_POST['description'])){
    $name = $_POST['name'];
    $description = $_POST['description'];
    
    try {
        
        $createQuery = "INSERT INTO tarefasSupero(name, description, created_at)
                VALUES(:name, :desc, now())";
        
        $statement = $conn->prepare($createQuery);
        $statement->execute(array(":name" => $name, ":desc" => $description));
        
        if($statement){
            echo "Tarefa Criada!";
        }
        
    } catch (PDOException $ex) {
        echo "Ocorreu um erro" . $ex->getMessage();
    }
}