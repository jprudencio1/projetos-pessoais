<!DOCTYPE html>
<html lang="pt-BR">
<?php
session_start();
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documentação - UniCine</title>
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
            top: 0;
            left: 0;
            z-index: 1000; /* Para garantir que o header fique acima de outros elementos */
            font-family: Sans-Serif;
        }

        .menusuperior {
            display: flex; 
            justify-content: flex-start; 
            align-items: center;
            background-color: whitesmoke;
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
            font-family: Sans-Serif;
        }

        .aba:hover {
            background-image: linear-gradient(to right, Black, DimGray);
            color: white;
        }

        body {
            background-color: whitesmoke;
            padding-top: 80px;
            font-family: Sans-Serif;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        h1{text-align: center;
        }
        h2{padding-bottom: 3px;}
        h1, h2 {
            color: #333;
        }
    </style>
</head>

<body>
    <header>
        <div class="menusuperior">
            <a href="Index.php" class="aba">Início</a>
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

    <div class="container">
        <h1>Documentação do UniCine</h1>

        <h2>Informações importantes</h2>
        <p>Para o bom funcionamento do site é necessario utilizar a versao do php 8 pois é utilizado o operador "<=>"<br>
            Os arrays criados possuem chaves, se uma serie possui mais de um parametro para manipular é utilizado as chaves e depois passado o atributo para ela. a chave "name" por exemplo recebe o nome da serie em questão e assim em diante.<br> Padrão de cores foi branco preto e dourado.<br>Única função em JavaScript foi utiliaza na página contato, um alert é chamado quando o usuario clica em enviar. </p>
        
        <h2>Index </h2>
        <p>O index é a home do site, Ele tem o header na qual é possivel navegar pelo site inteiro, no quesito de php foi utilizado uma aba para estilizar o site conforme a paleta de cores de 2 séries: Game of thrones e breaking bad<br>
            utilizando session com um switch que muda o nome da cor conforme a variavel "opcao" é escolhida.  </p>

        <h2>Login e Cadastro</h2>
        <p>Nessas duas páginas foi criado uma maneira de realizar um cadastro e login utilizando sessions, voce cadastra um usuario, os dados inseridos são transferidos para uma variavel session<br>
        que tera o seu nome e sua senha. Para realizar a validação do login os campos inseridos no formulario do login tem que ser igual ao login e senha registrados na variavel sessions<br> 
        Foi colocado a função strtolower para evitar erros de login e de case sensitive para otimizar o login <br><br> Támbem é realizado uma validação para que se o usuario primeiro acesse a pagina de login sem registrar, aparecer uma mensagem dizendo para o usuario se registrar. Para realizar
         <br> esta validação foi colocado a função isset, caso as sessions se login e senha não esteja definida, quer dizer que o usuário nao realizou o resgistro então ele é direcionado para realizar o registro. Nesta parte é definida a variavel "usuarioRegistro" que aparecerá durante o site em todas as abas.</p>
        
        <h2>Página de Séries</h2>
        <p>Página de séries tem como função organizar as sérei de dois modos para explorar mais ainda funções do php,<br>
         nesta parte foi usada uma função que não foi passada em aula, a usort para ordenar arrays e o <=> para vir como resultado 1 0 ou -1 que auxilia a função usort<br>
          para ele ordenar em ordem alfabetica o usort($series <- <strong>Pega o array que sera ordenado </strong>, function($a, $b)<-<strong>essas duas variaveis representam os itens do arrays </strong>{
            return strcasecmp($a["name"],$b["name"]) <strong>o strcasecmp ignora o case sensitive, vai pegar as duas variaveis que foi definida no funcion e vai comprar os nomes para realizar a ordenação<br> DATAS <br> </strong>
            No caso de organizar datas foi feito o usort($series, function($a, $b) {
                return $a["data"] <=> $b["data"] <strong>O "<=>" só vai retornar 1, 0 e -1, entao com isso o usort ordenara as datas</strong>;</p>
         
        
        <h2>Ranking de Séries</h2>
        <p>Para ranquear as séries foi criado outro array contendo 3 chaves para cada serie: "nome", "genero" e "imagens", para ranquear as series por cada genero colocamos elas em ordem já no array<br>
            então foi criado 3 if que verificam a chave "genero", um if para cada genero, entao como as arrays já estavam organizadas em ordem só foi preciso separar os generos e em cada if e <br>
            escrever com um echo todo o array que contempla a serie, colocando entre [] o indice do array que corresponde a serie, e utilizado um "< p > < / p > " para escrever a critica.</p>
        
        <h2>Todos os sessions do site</h2>
        <p>Utilizamos no que contempla quase o site todo 2 varíaveis sessions. <br>
            A primeira é a de login, quando definido o nome do usuário do pagina Cadastro.php, o texto ou palavra que o usuario colocar ficara em uma session que será exibida no header de todas as páginas.<br>
            A segunda é a variavel "opcao" onde ela é utilizada para mudar a estilização do site, você define ela no forms da pagina index, tendo três opções, de acordo com a opção escolhida é utilizado um switch para essa session estilizando conforme a serie escolhida. <br>voce define ela no index.php e ela é usada nas páginas index.php, series.php, ranquearserie.php e contato.php 
            <br><br><br> Membros do grupo: Daniel Macario De Jesus <br> João Vyctor Prudêncio Vieira Lima<br> Ronan Camilo Gomes
        </p>


    </div>
</body>
</html>
