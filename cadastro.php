<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bangers&display=swap');

        body {

            background-color: #131313;
            height: 100vh;
            width: auto;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Bangers', cursive;
        }

        .principal {
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

        .container{
            display: flex;
            justify-content: center;
            align-items: center;
        }

        input {
            width: 150px;
            margin: 10px 0;
            border-radius: 10px;
            border: 0px;
            margin-left:8px;
        }


        .container-botao{
            display: flex;
            justify-content: center;
        }

        input[type='submit']{
        display: block;
        height: 40px;
        width: 100px;
        margin: 15px;
        border: 0;
        box-shadow: black 5px 10px 30px 2px;
        border-radius: 20px;
        background-color: #282828;
        color: #ffffff;
        font-family: 'Bangers', cursive;
    }

    input[type='submit']:hover, a:hover{
        color:green;
    }

    a{
        font-size: 14px;
        display: flex;
        justify-content: center;
        align-items: center;
        text-decoration: none;
        height: 40px;
        width: 120px;
        margin: 15px;
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
    <div class="principal">
        <div class="container">
            <form action="Script_Cad.php" method="post">
                <h1>Cadastro</h1>
                <section>
                    <label for="">Nome Completo</label>
                    <input type="text" name="nome" required>
                </section>
                <section>
                    <label for="">Email</label>
                    <input type="text" name="email">
                </section>
                <section>
                    <label for="">Telefone</label>
                    <input type="tel" name="telefone">
                </section>
                <section>
                    <label for="">Endereço</label>
                    <input type="text" name="endereco">
                </section>
                <section>
                    <label for="">Data de Nascimento</label>
                    <input type="date" name="dataNascimento">
                </section>
                <section class='container-botao'>
                    <a href="index.html">Voltar</a>
                    <input type="submit" value="Confirmar">
                </section>
            </form>
        </div>
    </div>
</body>
</html>