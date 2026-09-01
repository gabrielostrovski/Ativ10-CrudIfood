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

        <form action="cadastro">
            <label>Cadastrar como:</label>

            <br>

            <label>
                <input type="radio" id="botao_cliente" name="tipo_usuario" value="cliente"> Cliente
            </label>

            <br>

             <label>
                <input type="radio" id="botao_restaurante" name="tipo_usuario" value="restaurante"> Restaurante
            </label>

            <div id="formulario_cliente" class="form">
                
            <h3>Cadastro de Cliente</h3>
                <label>Nome:</label>
                <input type="text" name="nome" required>
                <br>
                <label>Email:</label>
                <input type="email" name="email" required>
                <br>
                <label>Telefone:</label>
                <input type="tel" name="telefone" required>
                <br>
                <label>Endereço:</label>
                <input type="text" name="endereco" required>

            </div>

            <div id="formulario_restaurante" class="form">
                <h3>Cadastro de Restaurante</h3>
                <label>Nome:</label>
                <input type="text" name="nome_restaurante" required>
                <br>
                <label>Categoria:</label>
                <input type="text" name="categoria" required>
                <br>
                <label>Telefone:</label>
                <input type="tel" name="telefone_restaurante" required>
                <br>
                <label>Endereço:</label>
                <input type="text" name="endereco_restaurante" required>

        </form>
    </div>
</main>
    <script src="script/index.js"></script>
</body>
</html>