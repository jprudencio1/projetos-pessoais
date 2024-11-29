<html>

<?php 
session_start();
error_reporting(0);
?>

<head>



<style>
   *{
    padding:0;
    margin:0;
    vertical-align:baseline;
    list-style:none;
    border:0;
    }
   header{ 
    width:100%;
    height:60px;
    position:fixed;
    top: 0;
    z-index: 1000; /* em cima do titulo */
    font-family: Sans-Serif;
   }
   .menusuperior {
    display: flex; 
    justify-content: flex-start; 
    align-items: center;
    top: 0;
    background-color: black;
}

.aba {
    display: flex; 
    justify-content: center; 
    align-items: center; 
    padding: 20px 40px; 
    cursor: pointer;
    flex-grow:1;
    border: 1px solid black;
    transition: background-color 0.5s;
    text-decoration: none; 
    color: black;
    border-radius:8px;
    background-image: linear-gradient(to right, Gold,Yellow);
}

.aba:hover{
    background-image: linear-gradient(to right, Black,DimGray);
    color:white;
}
.imagens img{
    width:400px;
    height:200px;
}
section{
    padding-top:60px;
}
.titulo{
    background-color:<?php if(isset($_GET['opcao'])){ $_SESSION['opcao'] = $_GET['opcao']; }else{ $_SESSION['opcao']; } 
            switch($_SESSION['opcao']){ 
                case 'breakingbad': echo " #EB860E"; break; 
                case 'got': echo " brown"; break; 
                default: echo " #whitesmoke"; break; } ?>;
    height:100px;
    text-align: center;
    color: <?php if(isset($_GET['opcao'])){ $_SESSION['opcao'] = $_GET['opcao']; }else{ $_SESSION['opcao']; } 
            switch($_SESSION['opcao']){ 
                case 'breakingbad': echo " #EB5A00"; break;  //COR DAS LETRAS
                case 'got': echo " #1F1707"; break; 
                default: echo " #whitesmoke"; break; } ?>;
    font-family: Sans-Serif;
}
/* estilização das imagens das series*/ 

.imagens{
    display: flex;
    flex-wrap: wrap;
    gap:10px; 
    justify-content: space-between; 
    margin-top: 10px;
    background-color: <?php if(isset($_GET['opcao'])){ $_SESSION['opcao'] = $_GET['opcao']; }else{ $_SESSION['opcao']; } 
            switch($_SESSION['opcao']){ 
                case 'breakingbad': echo " orange"; break;  //COR DAS LETRAS
                case 'got': echo " brown"; break; 
                default: echo " #whitesmoke"; break; } ?>;
  
    
}
.fotos{
  width: 15%; /* largura com porcertagem, achei mais facil */
  text-align: center; /* So pra alinhar, a fonte definimos depois */
  background-color: Cornsilk;
}
 .fotos img {
    width: 70%; /*é a porcentagem da porcentagem dos "47%", caso queira colocar um fundo de outra cor*/
    padding-top: 30px;
    height: 140px;
    border-radius: 6px;
}
  .fotos p {
    margin-top: 10px; 
    font-size: 14px;
    font-family: Sans-Serif;
}
body{
    background-color: <?php if(isset($_GET['opcao'])){ $_SESSION['opcao'] = $_GET['opcao']; }else{ $_SESSION['opcao']; } 
            switch($_SESSION['opcao']){ 
                case 'breakingbad': echo " #EB6A04"; break;  //COR DAS BACKGROUND INTEIRO
                case 'got': echo " brown"; break; 
                default: echo " whitesmoke"; break; } ?>;

}




</style>

</style>

</head>

<body>
<header>

<div class="menusuperior">
    <a href="Index.php" class="aba">Inicio</a>
    <a href="Ranquearserie.php"class="aba">Melhores séries</a>
    <a href="Login.php" class="aba">Entrar</a>
    <a href="Cadastro.php" class="aba"> <?php 
     if(isset($_SESSION["usuarioRegistro"])){
      echo "Bem vindo, " . $_SESSION['usuarioRegistro'] . "</a>";
     }else{echo "Registrar</a>";}
     ?>
    
</div>
    
</div>
</header>

<section>
<div class="titulo">
<h1> Confira o catalogo de series disponiveis no nosso site</h1>
<span>Descubra nossa seleção de séries e organize conforme sua preferência: por data de lançamento ou ordem alfabética.
</span>
<form method="GET" action="Series.php">
    <select name="modo">
        <option>  </option>
        <option value="alfabetica">Ordem alfabética</option>
        <option value="data">Data</option>
    </select>
    <input type="submit" value="enviar">
</form>
</div>

<?php 
 
    $series = array(
        array(
            "name" => "Game of thrones",
            "data" => "2018",
            "imagem" => "imgseries/gameofthrones.jpg"
        ),
        array(
            "name" => "Breaking bad",
            "data" => "2017",
            "imagem" => "imgseries/breakingbad.webp"
        ),
        array(
            "name" => "Bojack horseman",
            "data" => "2023",
            "imagem" => "imgseries/bojack.webp"
        ),
        array(
            "name" => "How i met your mother",
            "data" => "2013",
            "imagem" => "imgseries/himym"
        ),
        array(
            "name" => "The office",
            "data" => "2016",
            "imagem" => "imgseries/Theoffice"
        ),
        array(
            "name" => "The boys",
            "data" => "2024",
            "imagem" => "imgseries/theboys.webp"
        ),
        array(
            "name" => "Arrow",
            "data" => "2019",
            "imagem" => "imgseries/arrow.webp"
        ),
        array(
            "name" => "Demolidor",
            "data" => "2013",
            "imagem" => "imgseries/demolidor.jpg"
        ),
        array(
            "name" => "Doom patrol",
            "data" => "2013",
            "imagem" => "imgseries/doompatrol.webp"
        ),
        array(
            "name" => "Justiçeiro",
            "data" => "2019",
            "imagem" => "imgseries/justiceiro.webp"
        ),
        array(
            "name" => "Vikings",
            "data" => "2013",
            "imagem" => "imgseries/vikings"
        ),
        array(
            "name" => "Barrry",
            "data" => "2013",
            "imagem" => "imgseries/barry.webp"
        ),
        array(
            "name" => "Reacher",
            "data" => "2013",
            "imagem" => "imgseries/reache"
        ),
        array(
            "name" => "Gothan",
            "data" => "2013",
            "imagem" => "imgseries/Gothan"
        )
    );

    $modo = $_GET["modo"];


    echo "<div class='imagens'> ";
    if ($modo == "alfabetica"){
        usort($series, function($a, $b){
                return strcasecmp($a["name"],$b["name"]);
        });
        foreach($series as $serie){
            echo "<div class='fotos'>  <img src='" . $serie['imagem'] . "'/> <p>" . $serie['name'] . "</p> </div>";
        }};
    if($modo == "data"){
        usort($series, function($a, $b) {
            return $a["data"] <=> $b["data"];
            /* return ($a["data"] < $b["data"]) ? -1 : 1;*/
        });
        foreach($series as $serie){
            echo "<div class='fotos'> <img src='" . $serie['imagem'] . "'/> <p>" . $serie['name'] . "</p> </div>";
            
        }
    } echo "</div> ";


?>
 <!-- <div class="imagens">
    <img src="https://m.media-amazon.com/images/M/MV5BN2IzYzBiOTQtNGZmMi00NDI5LTgxMzMtN2EzZjA1NjhlOGMxXkEyXkFqcGdeQXVyNjAwNDUxODI@._V1_FMjpg_UX1000_.jpg"/>
    <img src="https://m.media-amazon.com/images/M/MV5BN2IzYzBiOTQtNGZmMi00NDI5LTgxMzMtN2EzZjA1NjhlOGMxXkEyXkFqcGdeQXVyNjAwNDUxODI@._V1_FMjpg_UX1000_.jpg"/>
    <img src="https://m.media-amazon.com/images/M/MV5BN2IzYzBiOTQtNGZmMi00NDI5LTgxMzMtN2EzZjA1NjhlOGMxXkEyXkFqcGdeQXVyNjAwNDUxODI@._V1_FMjpg_UX1000_.jpg"/>
    <img src="https://m.media-amazon.com/images/M/MV5BN2IzYzBiOTQtNGZmMi00NDI5LTgxMzMtN2EzZjA1NjhlOGMxXkEyXkFqcGdeQXVyNjAwNDUxODI@._V1_FMjpg_UX1000_.jpg"/>
    <img src="https://m.media-amazon.com/images/M/MV5BN2IzYzBiOTQtNGZmMi00NDI5LTgxMzMtN2EzZjA1NjhlOGMxXkEyXkFqcGdeQXVyNjAwNDUxODI@._V1_FMjpg_UX1000_.jpg"/>
    <img src="https://m.media-amazon.com/images/M/MV5BN2IzYzBiOTQtNGZmMi00NDI5LTgxMzMtN2EzZjA1NjhlOGMxXkEyXkFqcGdeQXVyNjAwNDUxODI@._V1_FMjpg_UX1000_.jpg"/>
-->
    
</div>



</section>









</body>


</html>