<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bangers&display=swap');
    body{
        overflow: hidden;
        height: 100vh;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #131313;
        color: #ffffff;
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
        color:green;
    }
    </style>
</head>
<body>
    <?php
include "conexao.php";
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];
$dataNascimento = $_POST['dataNascimento'];

$sql = "INSERT INTO `dados1`(`nome`, `email`, `telefone`,`endereco`,`dataNascimento`) VALUES ('$nome','$email','$telefone','$endereco','$dataNascimento')";

if(mysqli_query($conn, $sql)){
    mensagem("Usuário cadastrado com sucesso", 'sucess');
    echo '
    <a href="index.html">Voltar ao menu</a>
    ';
} else {
    mensagem("$nome, Erro! usuário não cadastrado" ,'danger');
}
?>
</body>
</html>