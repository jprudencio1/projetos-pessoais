<html>

<?php
session_start();


?>

<head>


</head>

<body>
<header>

<div class="menusuperior">
    <a href="Series.php" class="aba">Séries</a>
    <a href="Ranquearserie.php" class="aba">Melhores séries</a>
    <a href="Login.php" class="aba">Entrar</a>
    <a href="Cadastro.php" class="aba"> <?php 
     if(isset($_SESSION["usuarioRegistro"])){
      echo "Bem vindo, " . $_SESSION['usuarioRegistro'] . "</a>";
     }else{echo "Registrar</a>";}
     ?>
    
</div>

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
    flex-grow:1;
    border: 1px solid black;
    transition: background-color 0.5s;
    text-decoration: none; 
    color: black;
    border-radius:8px;
    background-image: linear-gradient(to right, Gold,Yellow);
    font-family: Sans-Serif;
    
}

.aba:hover{
    background-image: linear-gradient(to right, Black,DimGray);
    color:white;}

   .navbar{
    
    padding-top:15px;
    padding-bottom: 5px;
    word-spacing: 100px;
    font-size: 30px;
    font-weight: 300;
    
   }
   section{
    padding-top:60px;
   background-color:<?php if(isset($_GET['opcao'])){ $_SESSION['opcao'] = $_GET['opcao']; }else{ $_SESSION['opcao']; } 
            switch($_SESSION['opcao']){ 
                case 'breakingbad': echo " #D4E157"; break; 
                case 'got': echo " brown"; break; 
                default: echo " #fff8e1"; break; }if(!isset($_SESSION['opcao'])){echo " #fff8e1";}?>
                ;
    width: 60%;
    min-width: 100%;
   height: 1000px;
   display:flex;

   }
   .navmenu{
    padding-top: 60px;
    width: 39%;
    
   }

   .SectionContainer{
    
    margin: 0 40px 0 40px;
    background-color: <?php if(isset($_GET['opcao'])){ $_SESSION['opcao'] = $_GET['opcao']; }else{ $_SESSION['opcao']; } 
            switch($_SESSION['opcao']){ 
                case 'breakingbad': echo " #D4E157"; break; 
                case 'got': echo " brown"; break; 
                default: echo " #fff8e1"; break; } ?>;
    font-family: Sans-Serif;
    
   }

   #ad img {
    display: block; 
    margin: 0 auto; 
    max-width: 100%; 
}

   #tituloComeco{
    color: black;
    font-size: 60px;
    text-align: center;
   }

   #theoffice #demolidor{
    padding-bottom:6px;
    display:flex;
    align-items: center;
    justify-content: space-between;
   }
   .imgoffice img{
    max-width: 500px;
    max-height: 250px ;
    padding-right: 40px;
    
   }
 
  
  .imgdemolidor img{width: 500px;
    max-height: 250px ;
    padding-right: 40px;
    
   }
   .series{
    padding-top:30px;
   }
   .section, .proc{
    margin-left: 1000px;
    height: 1000px;
    
   }
   aside{
        float: right;
        width: 40%;

   
   }
  .direita{ float: left; 
    width: 99%; 
    background-color: 
            <?php if(isset($_GET['opcao'])){ $_SESSION['opcao'] = $_GET['opcao']; }else{ $_SESSION['opcao']; } 
            switch($_SESSION['opcao']){ 
                case 'breakingbad': echo " orange"; break; 
                case 'got': echo " brown"; break; 
                default: echo " #EDE5D7"; break;} ?>;


   }

   #tituloStreamings{
        font-size: 29px;
   }

   .textoprincipal{
        
        padding: 50px;
   }

   .streamings{
    display:flex;
    flex-wrap: wrap;
    width: 80%;
    text-align: center;
    justify-content: space-between;
    border-radius: 5px;
    
    margin: 100px auto
   }
   .app{
    margin:20px;
    flex: 1 1 30%;
    box-sizing: border-box;
   }
   .app img{
    width: 190px;
    height:160px;
    border-radius: 6px;
    border:solid whitesmoke 2px;

   }

   .contato {
    margin-top: 50px;
    display: inline-block; 
    padding: 10px 20px;
    background-image: linear-gradient(to right, gold, #FFD700);
    color: black; 
    text-decoration: none; 
    border-radius: 5px; 
    font-size: 16px; 
    transition: background-color 0.3s; 
}
body{background-color:  <?php if(isset($_GET['opcao'])){ $_SESSION['opcao'] = $_GET['opcao']; }else{ $_SESSION['opcao']; } 
            switch($_SESSION['opcao']){ 
                case 'breakingbad': echo " orange"; break; 
                case 'got': echo " brown"; break; 
                default: echo " #EDE5D7"; break;} ?>;;}

.navmenu {
    padding: 20px;
    background-color:<?php if(isset($_GET['opcao'])){ $_SESSION['opcao'] = $_GET['opcao']; }else{ $_SESSION['opcao']; } 
            switch($_SESSION['opcao']){ 
                case 'breakingbad': echo " orange"; break; 
                case 'got': echo " #1E1D17"; break; 
                default: echo " #fff8e1"; break; } ?>;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    width: 60%;
    margin: 20px auto;
}

.botao-tema {
    width: 100%px;
    padding: 10px;
    background-image: linear-gradient(to right, gold, #FFD700);
    color: black;
    font-weight: bold;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    
}

.botao-tema:hover {
    background-color: #333;
    color: white;
}
.documentacao{
    margin-top: 50px;
    display: inline-block; 
    padding: 10px 20px;
    background-image: linear-gradient(to right, gold, #FFD700);
    color: black; 
    text-decoration: none; 
    border-radius: 5px; 
    font-size: 16px; 
    transition: background-color 0.3s; 
}

</style>


</header>

<section>

  
    <div class="SectionContainer">
        <div class="direita">
            
            <h1 id="tituloComeco">Bem vindo ao UniCine!</h1><br><br><br><br>

        <div class="textoprincipal">
            <h2>Ficamos feliz em visitar a  nossa página <?php if(isset($_SESSION["usuarioRegistro"])){echo $_SESSION["usuarioRegistro"];}else{ echo"";} ?> ,na nossa página, reunimos as melhores séries do mundo e as classificamos uma a uma.
                Nosso objetivo é proporcionar a você uma experiência incrível, para que possa desfrutar do melhor 
                conteúdo da sétima arte, seja durante o dia ou à noite.</h2><br><br><br><br><br>
        </div>
        <div class="textorecente">
            <p>Veja abaixo os melhores streamings para assistir filmes e séries:</p>
        </div>
        <h1 id="tituloStreamings">Streamingns para series e filmes:</h1>
        <div class="streamings">
            
            <div class="app">
                <h2>Mubi</h2>
                <img src="mubi.jpg">
        </div>
    <div class="app">
        <h2>Amazon Prime</h2>
        <img src="amazonprime.jpg">
    </div>
    <div class="app">
        <h2>Max</h2>
        <img src="max.jpg">
    </div>
    <div class="app">
        <h2>Netflix</h2>
        <img src="netflix.jpg">
    </div>
    <div class="app">
        <h2>Disney +</h2>
        <img src="disney.jpg">
    </div>
    <div class="app">
        <h2>Paramount</h2>
        <img src="paramount.png">
    </div>
 
    

   





    </div>






		</div>
</div>

   <aside class="navmenu" >
        
       
        <form method="GET" action="Index.php">
        <label for="opcao" style="font-family: Sans-Serif; font-size: 16px; color: black;">Escolha o tema da série:</label>
        <select name="opcao" id="opcao" style="padding: 8px; border-radius: 4px; border: 1px solid #FFD700; margin-bottom: 15px; width: 100%; background-color: white; color: black;">
            <option value="padrao">Padrão</option>
            <option value="breakingbad">Breaking Bad</option>
            <option value="got">Game of Thrones</option>
        </select>
        <button type="submit" class="botao-tema">Aplicar Tema</button>
    </form> 

    <div class="contato">
        <span>Quer entrar em contato com a gente?</span>
        <a href="contato.php" >Clique aqui</a>


    </div>

    <div class="documentacao">
        <span>Clique <a href="documentacao.php">aqui</a> para acessar a documentação do site</span>
    </div>
    </aside>

    
    </div>

   
</section>

</body>

</html>