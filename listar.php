<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bangers&display=swap');

        body {
            
            height: 100vh;
            width: auto;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #131313;
            color: #ffffff;
            overflow-y: hidden;
            font-family: 'Bangers', cursive;
        }

        h1 {
            text-align: center;
        }

        a{
    
            text-align: center;
            text-decoration: none;

        }

        .container-principal {
            min-width: 500px;
        }
 /* container pesquisa */
        

        .container-pesquisa {
            display: flex;
            justify-content: center;

        }

        .form-pesquisa{
            display: flex;
            margin: 10px;
        }

        .inputPesquisar{
            text-align: center;
            width: 200px;
        }

        .form-pesquisa > input {
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
        text-decoration:none;
        }

        .form-pesquisa > input[type="search"] {
            width:200px;
        }
/*fim container pesquisa*/

        /* Container tabela*/
        .tabela {
            background: rgba( 255, 255, 255, 0.2 );
            box-shadow: 0 2px 10px 0 rgba(255, 255, 255, 0.300);
            backdrop-filter: blur( 5.5px );
            -webkit-backdrop-filter: blur( 5.5px );
            border-radius: 10px;
            border: 1px solid rgba( 255, 255, 255, 0.18 );
        }

        table {
            letter-spacing: 0.9px ;
            padding: 15px;
            border-radius: 10px;
        }
        
        th,td {
            padding: 5px;
            border: #ffffff solid 1px;
        }



        /* Fim container tabela*/ 


    /* Container botao menu*/
        .container-botao-menu {
            display:flex;
            justify-content:center;
            padding-top:20px;
        }

        .container-botao-menu > a{
        display: flex;
        justify-content: center;
        align-items: center;
        height: 40px;
        width: 100px;
        margin: 0px;
        border: 0;
        box-shadow: black 5px 10px 30px 2px;
        border-radius: 20px;
        background-color: #282828;
        color: #ffffff;
        font-family: 'Bangers', cursive;
        text-decoration:none;

        }

        button > a {
            text-decoration: none;
             color:#ffffff;
        }
/*Fim container botao menu */

 
    </style>
    <title>Lista de Clientes</title>
</head>
<body>


        <?php
            $pesquisa = $_POST['busca'] ?? '';

            include "conexao.php";

            $sql = "SELECT * FROM dados1 WHERE nome LIKE '%$pesquisa%'";

            $dados = mysqli_query($conn,$sql);

            ?>

        <?php


        ?>

    <div class="container-principal">
        <h1 for="">Lista de cadastro</h1>

        <div class="container-pesquisa">
        <form action="listar.php" method="POST" class='form-pesquisa'>
            <input type="search" placeholder="nome" class="inputPesquisar" name="busca">
            <input type="submit" value="Pesquisar" class="BotaoPesquisar">
        </form>
        </div>
        <div class="tabela">
            <table class="table table-dark">
                <thead>
                  <tr>
                    <th scope="col">Nome Completo</th>
                    <th scope="col">Email</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Endereco</th>
                    <th scope="col">Data de Nascimento</th>
                    <th scope="col">Funções</th>
                  </tr>
                </thead>
                <tbody>
                    <?php
                        while($linha = mysqli_fetch_assoc($dados)){
                            $id = $linha['id'];
                            $nome = $linha['nome'];
                            $email = $linha['email'];
                            $telefone = $linha['telefone'];
                            $endereco = $linha['endereco'];
                            $dataNascimento = $linha['dataNascimento'];
                            $dataNascimento = mostra_data($dataNascimento);

                            echo "<tr>
                                <th scope='row'>$nome</th>
                                <td>$email</td>
                                <td>$telefone</td>
                                <td>$endereco</td>
                                <td>$dataNascimento</td>
                                <td>
                                <button style='background-color:green; border: solid 1px black; padding: 4px; border-radius: 3px;'><a href='cadastroEdit.php?id=$id' >Editar</a></button>
                                <button style='background-color:red; border: solid 1px black; padding: 4px; border-radius: 3px;'><a href='Script_Excluir.php?id=$id' value='id' >Excluir</a></button>
                                </td>
                                </tr>"; 
                        }

                    ?>            
                </tbody>
            </table>
        </div>
        <section class="container-botao-menu">
            <a href="index.html">Menu</a>
        </section>
        </form>
    </div>
</body>        
</html>