<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
                @import url('https://fonts.googleapis.com/css2?family=Bangers&display=swap');
            
            body{
                overflow: hidden;
                color: #ffffff;
                height: 100vh;
                width: auto;
                background-color: #131313;
                font-family: 'Bangers', cursive;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            a {
                text-decoration: none;
            }

            a:hover{
                color: green;
            }

            a{
                display: flex;
                justify-content: center;
                align-items: center;
                height: 40px;
                width: 150px;
                margin: 10px;
                border: 0;
                box-shadow: black 5px 10px 30px 2px;
                border-radius: 20px;
                background-color: #282828;
                color: #ffffff;
                font-family: 'Bangers', cursive;

            }


    </style>


</head>
<body>
<?php
include 'conexao.php';

if(isset($_GET['id'])) {
    $id=$_GET['id'];

    $sql="DELETE FROM `dados1` WHERE id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        mensagem("Este usuário foi deletado com sucesso", 'sucess');
        echo '
        <a href="listar.php">Voltar à lista</a>
        ';
    } else {
        echo "erro!";
    }
}
?>
</body>
</html>