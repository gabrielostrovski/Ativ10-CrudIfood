<?php
include '../infra/conexao.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Sistema do Ifood</title>
</head>
<body>

<main>
    <h1>Ifood</h1>

    <div>
        <h2>CADASTRO</h2>

        <form action="public/salvar.php" method="POST"> 
            <label>Cadastrar como:</label>

            <br>

            <label>
                <input type="radio" id="botao_cliente" name="tipo_usuario" value="cliente" onchange="verificaopcao()"> Cliente
            </label>

            <br>

             <label>
                <input type="radio" id="botao_restaurante" name="tipo_usuario" value="restaurante" onchange="verificaopcao()"> Restaurante
            </label>

            <div id="formulario_cliente" class="form">
                
            <h3>Informações do Cliente</h3>
                <label>Nome:</label>
                <input type="text" name="nome_cliente">
                <br>
                <label>Email:</label>
                <input type="email" name="email_cliente">
                <br>
                <label>Telefone:</label>
                <input type="tel" name="telefone_cliente">
                <br>
                <label>Endereço:</label>
                <input type="text" name="endereco_cliente">
                <button type="submit">CADASTRAR</button>
            </div>

            <div id="formulario_restaurante" class="form">
                <h3>Informações do Restaurante</h3>
                <label>Nome:</label>
                <input type="text" name="nome_restaurante">
                <br>
                <label>Categoria:</label>
                <input type="text" name="categoria">
                <br>
                <label>Telefone:</label>
                <input type="tel" name="telefone_restaurante">
                <br>
                <label>Endereço:</label>
                <input type="text" name="endereco_restaurante">
                <button type="submit">CADASTRAR</button>
            </div>
        </form>
    </div>
</main>
    <script src="script/index.js"></script>
</body>
</html>