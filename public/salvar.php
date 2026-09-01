<?php
include '../infra/conexao.php';



if ($_server["REQUEST_METHOD"] = "POST") {

$tipo_usuario = $_POST['tipo_usuario'];

if ($tipo_usuario == "cliente") {
    $nome = $_POST['nome_cliente'];
    $email = $_POST['email_cliente'];
    $telefone = $_POST['telefone_cliente'];
    $endereco = $_POST['endereco_cliente'];

$sql = "INSERT INTO clientes (nome, email, telefone, endereco) VALUES ('$nome', '$email', '$telefone', '$endereco')";

if($conexao->query($sql) === TRUE) {
    echo "CADASTRO REALIZADO!";
} else {
    echo "ERRO NO CADASTRO: " .$conexao->error;
}
}

if ($tipo_usuario == "restaurante") {
    $nome = $_POST['nome_restaurante'];
    $categoria = $_POST['categoria'];
    $telefone = $_POST['telefone_restaurante'];
    $endereco = $_POST ['endereco_restaurante'];

$sql = "INSERT INTO restaurante (nome, categoria, telefone, endereco) VALUES ('$nome', '$categoria', '$telefone', '$endereco')";

if($conexao->query($sql) === TRUE) {
    echo "CADASTRO REALIZADO!";
} else {
    echo "ERRO NO CADASTRO: " .$conexao->error;
}
}

}
?>

