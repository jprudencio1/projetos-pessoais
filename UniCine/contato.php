<!DOCTYPE html>
<html lang="pt-BR">
<?php
session_start();
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato - UniCine</title>
    <style>
        
        * {
            padding: 0;
            margin: 0;
            vertical-align: baseline;
            list-style: none;
            border: 0;
        }

        header {
            width: 100%;
            height: 60px;
            position: fixed;
            font-family: Sans-Serif;
            z-index: 1000; /* Para garantir que o header fique acima do conteúdo */
        }

        .menusuperior {
            display: flex;
            justify-content: flex-start;
            align-items: center;
            background-color: black;
        }

        .aba {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px 40px;
            cursor: pointer;
            flex-grow: 1;
            border: 1px solid black;
            transition: background-color 0.5s;
            text-decoration: none;
            color: black;
            border-radius: 8px;
            background-image: linear-gradient(to right, Gold, Yellow);
        }

        .aba:hover {
            background-image: linear-gradient(to right, Black, DimGray);
            color: white;
        }

      
        body {
            background-color: <?php if(isset($_GET['opcao'])){ $_SESSION['opcao'] = $_GET['opcao']; }else{ $_SESSION['opcao']; } 
            switch($_SESSION['opcao']){ 
                case 'breakingbad': echo " orange"; break;  //COR DAS LETRA
                case 'got': echo " brown"; break; 
                default: echo " whitesmoke"; break; } ?>;
        }

        .mensagem {
            width: 60%;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            margin-bottom: 20px;
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 5px;
            font-weight: bold;
        }

        textarea {
            margin-bottom: 15px;
            padding: 10px;
            border-radius: 4px;
            border: 1px solid #ccc;
            height: 150px; /* Altura do campo de texto */
            background-color: <?php if(isset($_GET['opcao'])){ $_SESSION['opcao'] = $_GET['opcao']; }else{ $_SESSION['opcao']; } 
            switch($_SESSION['opcao']){ 
                case 'breakingbad': echo " #EB4921"; break;  //COR DAS LETRA
                case 'got': echo " #413331"; break; 
                default: echo " whitesmoke"; break; } ?>;;
        }

        input[type="submit"] {
            padding: 10px;
            background-color: #FFD700;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
        }

        input[type="submit"]:hover {
            background-color: #4F4F4F;
            color: white;
        }
    </style>
</head>

<body>
    <header>
        <div class="menusuperior">
            <a href="index.php" class="aba">Inicio</a>
            <a href="Ranquearserie.php" class="aba">Melhores séries</a>
            <a href="Login.php" class="aba">Entrar</a>
            <a href="Cadastro.php" class="aba">
                <?php 
                if (isset($_SESSION["usuarioRegistro"])) {
                    echo "Bem vindo, " . $_SESSION['usuarioRegistro'] . "</a>";
                } else {
                    echo "Registrar</a>";
                }
                ?>
        </div>
    </header>

    <div class="mensagem">
        <h1>Contato</h1>
        <form id="contato" action="contato.php" method="POST" >
            <label for="mensagem">Mande a sua crítica ou sugestão:</label>
            <textarea id="mensagem" name="mensagem"></textarea>
            <input onclick="enviar(event)" type="submit" value="Enviar">
        </form>
    </div>

    <script> function enviar(){
        alert("Enviado");
    }</script>
</body>

</html>
