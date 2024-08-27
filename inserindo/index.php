<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JUNIO</title>
    <link rel="stylesheet" href="tela.css">
</head>
<body>

<section id="esquerda">
    <form >
    <h1>REGISTRO DE PESSOAS</h1>

    <label for="nome">Nome</label>
    <input type="text" name="nome" id="nome">
    <label for="telefone">Telefone</label>
    <input type="text" name="telefone" id="telefone">
    <label for="email">Email</label>
    <input type="text" name="email" id="email">
    <input type="submit" value="Registrar">

    </form>

</section>

<section id="direita">

    <table>
        <tr id="titulo">
            <td>NOME</td>
            <td>TELEFONE</td>
            <td colspan="2">EMAIL</td>
        </tr>

        <tr>
            <td>Veronica</td>
            <td>33333</td>
            <td>pandora@outlook.com</td>
            <td><a href="">editar</a><a href="">Excluir</a></td>
        </tr>
    </table>

</section>
    
</body>
</html>