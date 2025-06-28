<?php

$host ='localhost';
$nomeBanco = 'db_website';
$usuario = 'root';
$senha = '';

try{
    $conexao = new PDO(
        "mysql:host=$host;
        dbname=$nomeBanco;charset=UTF8",
        $usuario,
        $senha
    );
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "conexão realizada com sucesso";
} catch(PDOException $e){
     echo "ERRO: " . $e->getMessage(); 
}

?>