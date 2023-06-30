<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alteração de Cadastro</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bangers&display=swap');

        body{
            overflow: hidden;
            font-family: 'Bangers', cursive;
            color: #ffffff;
            width:100%;
            height:100vh;
            background-color:#131313;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .principal{
            display: flex;
            justify-content: center;
            align-items: center;
            color: #ffffff;
            height: 60%;
            width: 50%;
            min-width: 300px;
            background: rgba( 2, 2, 2, 0.25 );
            box-shadow: 0 8px 32px 0 #00fff263;
            backdrop-filter: blur( 20px );
            -webkit-backdrop-filter: blur( 20px );
            border-radius: 10px;
            border: 1px solid 00fff263;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            border-radius: 20px;
            text-align: center;
        }

        form > section{
            margin: 10px;
        }

        input {
            width: 150px;
            margin: 10px 0;
            border-radius: 10px;
            border: 0px;
            margin-left:8px;
        }

        .container-botaoSalvar{
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container-botaoSalvar > input:hover, a:hover{
            color: green;
        }

        .botaoSalvar{
        display: block;
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

        a{
        display: flex;
        font-size:14px;
        justify-content: center;
        align-items: center;
        height: 40px;
        width: 120px;
        margin: 10px;
        border: 0;
        box-shadow: black 5px 10px 30px 2px;
        border-radius: 20px;
        background-color: #282828;
        color: #ffffff;
        font-family: 'Bangers', cursive;
        text-decoration: none;
        }
        
        
        
    </style>
</head>
<body>

    <?php

    include "conexao.php";
    $id = $_GET['id'] ?? '';
    $sql = "SELECT * FROM dados1 WHERE id = $id";

    $dados = mysqli_query($conn, $sql);
    $linha = mysqli_fetch_assoc($dados);


    ?>

    <div class="principal">
        <form action="Script_Edit.php" method="post">
            <h1>Alteração de Cadastro</h1>
            <section>
                <label for="">Nome Completo</label>
                <input type="text" name="nome" required value="<?php echo $linha['nome']; ?>">
            </section>
            <section>
                <label for="">Email</label>
                <input type="text" name="email" value="<?php echo $linha['email']; ?>">
            </section>
            <section>
                <label for="">Telefone</label>
                <input type="tel" name="telefone" value="<?php echo $linha['telefone']; ?>">
            </section>
            <section>
                <label for="">Endereço</label>
                <input type="text" name="endereco" value="<?php echo $linha['endereco']; ?>">
            </section>
            <section>
                <label for="">Data de Nascimento</label>
                <input type="date" name="dataNascimento" value="<?php echo $linha['dataNascimento']; ?>">
            </section>
            <section class="container-botaoSalvar">
                <input type="submit" value="Salvar Alteração" class="botaoSalvar">
                <input type="hidden" name="id" value="<?php echo $linha['id']; ?>">
                <a href="listar.php">Voltar à lista</a>
            </section>
        </form>
        
    </div>
</body>
</html>