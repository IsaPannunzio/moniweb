<?php    

$bdServidor = "localhost";
$bdUsuario = "sistemamonitoria";
$bdSenha = "sistemademonitoria";
$bdBanco = "moniweb";

$conexao = mysqli_connect($bdServidor, $bdUsuario, $bdSenha, $bdBanco);

if(!$conexao){
    echo "Erro.";
    echo mysqli_connect_error();
    die();
}

?>
