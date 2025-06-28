<?php

$requisicao =$_POST['requisicao'];

switch($requisicao){
case 'Atualizar':
    include 'AtualizarUsuario.php';
    break;

case 'Cadastrar':
    include 'CadastrarUsuario.php';
     break;

 case 'Consultar':
    include 'ConsultarUsuario.php';
    break;

case 'Remover':
    include 'RemoverUsuario.php';
    break;
    
default:
    echo "Opção inválida.";
    break;    
}

?>