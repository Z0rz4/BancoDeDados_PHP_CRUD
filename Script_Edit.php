<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bangers&display=swap');

        body {
            color: #ffffff;
            background-color: #131313;
            height: 100vh;
            width: auto;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Bangers', cursive;
        }

        a{
                display: flex;
                justify-content: center;
                align-items: center;
                height: 40px;
                width: 100px;
                margin: 10px;
                border: 0;
                box-shadow: black 5px 10px 30px 2px;
                border-radius: 20px;
                background-color: #282828;
                color: #ffffff;
                font-family: 'Bangers', cursive;
                text-decoration: none;

            }

            a:hover{
                color: green;
            }
    </style>
</head>
<body>
<?php
include "conexao.php";

$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];
$dataNascimento = $_POST['dataNascimento'];

$sql = "UPDATE `dados1` set `nome` = '$nome', `email` = '$email', `telefone` = '$telefone', `endereco` = '$endereco', `dataNascimento` = '$dataNascimento' WHERE id = $id";

if(mysqli_query($conn, $sql)){
    mensagem("$nome Foi alterado com sucesso", 'sucess');
    echo '
    <a href="listar.php">Voltar à tabela</a>
    ';
} else {
    mensagem("$nome Erro! não alterado" ,'danger');
}
?>
</body>
</html>