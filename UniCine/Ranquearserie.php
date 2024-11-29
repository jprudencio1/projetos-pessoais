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
                case 'breakingbad': echo " orange"; break;  //COR DO FORMS DE ESCOLHA
                case 'got': echo " #EB7373"; break; 
                default: echo " whitesmoke"; break; } ?>;
    height:200px;
    text-align: center;
    color: <?php if(isset($_GET['opcao'])){ $_SESSION['opcao'] = $_GET['opcao']; }else{ $_SESSION['opcao']; } 
            switch($_SESSION['opcao']){ 
                case 'breakingbad': echo "#EB6A04"; break;  //COR DAS LETRA
                case 'got': echo " #1F1707"; break; 
                default: echo " black"; break; } ?>;
;
    font-family: Sans-Serif;
    border:solid black 1px;
}
/* estilização das imagens das series*/ 
body{
    background-color:<?php if(isset($_GET['opcao'])){ $_SESSION['opcao'] = $_GET['opcao']; }else{ $_SESSION['opcao']; } 
            switch($_SESSION['opcao']){ 
                case 'breakingbad': echo "#EB5C00"; break;  //COR DAS BACKGROUND INTEIRO
                case 'got': echo " brown"; break; 
                default: echo " #fff8e1"; break; } ?>; ;
}
.imagens {
    display: flex; 
    justify-content: space-between; 
    align-items: center; 
    margin: 10px 0; 
    background-color: whitesmoke;
    border:solid black 3px;
}

.imagens img {
    border-radius: 16px;
    width: 190px;
}

.imagens p {
    flex: 1; 
    text-align: left; 
    margin: 0 10px; 
}




</style>

</head>

<body>
<header>
<div class="menusuperior">
    <a href="Index.php" class="aba">Inicio</a>
    <a href="Series.php"class="aba">Séries</a>
    <a href="Login.php" class="aba">Entrar</a>
    <a href="Cadastro.php" class="aba"> <?php 
     if(isset($_SESSION["usuarioRegistro"])){
      echo "Bem vindo, " . $_SESSION['usuarioRegistro'] . "</a>";
     }else{echo "Registrar</a>";}
     ?>
    
</div>
</header>

<section>
<div class="titulo">
<h1> Aqui está o exclusivo ranking de melhores séries por genero</h1>
<form method="GET" action="Ranquearserie.php">
    <select name="genero">
        <option value="drama">Drama</option>
        <option value="acao">Ação</option>
        <option value="comedia">Comedia</option>


    </select>
    <input type="submit" value="enviar">
</form>
</div>

<?php 
    $genero=$_GET["genero"];
    
    if(isset($genero)){
        $genero=$_GET["genero"];
    };


    $series = array(
        array(
            "name" => "Game of thrones",
            "genero" => "drama",
            "imagem" => "imgseries/gameofthrones.jpg"
        ),
        array(
            "name" => "Breaking bad",
            "genero" => "drama",
            "imagem" => "imgseries/breakingbad.webp"
        ),
        array(
            "name" => "Bojack horseman",
            "genero" => "drama",
            "imagem" => "imgseries/bojack.webp"
        ),
        array(
            "name" => "Doom patrol",
            "genero" => "drama",
            "imagem" => "imgseries/doompatrol.webp"
        ),
        array(
            "name" => "Peaky Blinders",
            "genero" => "drama", 
            "imagem" => "imgseries/peakyblinders.jpg"
        ),
        array(
            "name" => "How i met your mother",
            "genero" => "comedia",
            "imagem" => "imgseries/himym"
        ),
        array(
            "name" => "The office",
            "genero" => "comedia",
            "imagem" => "imgseries/Theoffice"
        ),
        array(
            "name" => "The Kominsky Method",
            "genero" => "comedia", 
            "imagem" => "imgseries/metodo"
        ),
        array(
            "name" => "Barrry",
            "genero" => "comedia", 
            "imagem" => "imgseries/barry"
        ),
        array(
            "name" => "Todo mundo odeia o Chris",
            "genero" => "comedia",
            "imagem" => "imgseries/chris"
        ),
        array(
            "name" => "The boys",
            "genero" => "acao",
            "imagem" => "imgseries/theboys.webp"
        ),
        array(
            "name" => "Arrow",
            "genero" => "acao",
            "imagem" => "imgseries/arrow.webp"
        ),
        array(
            "name" => "Demolidor",
            "genero" => "acao", 
            "imagem" => "imgseries/demolidor.jpg"
        ),
        array(
            "name" => "Justiçeiro",
            "genero" => "acao",
            "imagem" => "imgseries/justiceiro"
        ),
        array(
            "name" => "Vikings",
            "genero" => "acao", 
            "imagem" => "imgseries/vikings"
        ),
        array(
            "name" => "Reacher",
            "genero" => "acao", 
            "imagem" => "imgseries/reache"
        ),
    );
    
 




    if ($genero == "drama"){
        echo "<div class='imagens' <span class='tex'>" . $series[0]['name'] . "</span> - <p>Game of Thrones marcou a televisão com sua narrativa envolvente, personagens complexos e produção grandiosa, explorando poder e moralidade em um mundo de fantasia. No entanto, as últimas temporadas, especialmente a final, foram criticadas <br>por serem apressadas e desrespeitarem o desenvolvimento dos personagens, deixando muitos fãs insatisfeitos com o desfecho.Mas mesmo assim é considerada uma das melhres séries do mundo e com um universo tão rico e complexo se torna uma série com uma riqueza unica.  </p> " . "<img src='" .
           $series[0]['imagem'] . "'/>" . "</div>";
           echo "<div class='imagens' <span class='tex'>" . $series[1]['name'] . "</span> - <p> Breaking Bad é uma obra-prima do suspense que explora a transformação de um professor de química comum em um magnata do metanfetamina. <br>A série combina uma narrativa envolvente com atuações excepcionais, especialmente de Bryan Cranston e Aaron Paul. Cada episódio é um estudo sobre moralidade, consequências e a luta pelo poder, mantendo o espectador <br>na ponta da cadeira até o último segundo.  </p> "
            . "<img src='" .
           $series[1]['imagem'] . "'/>" . "</div>";
           echo "<div class='imagens' <span class='tex'>" . $series[2]['name'] . "</span> - <p> Bojack Horseman é uma animação surpreendentemente profunda que aborda temas como depressão, solidão e a busca por redenção em um mundo superficial. <br> Com um humor ácido e personagens complexos, a série desafia a ideia de comédia ao retratar as lutas pessoais do protagonista de maneira sensível e impactante. É uma reflexão sincera sobre o vazio da <br> fama e as consequências das escolhas feitas na vida.  </p> " . "<img src='" .
           $series[2]['imagem'] . "'/>" . "</div>";
           echo "<div class='imagens' <span class='tex'>" . $series[3]['name'] . "</span> - <p> Doom Patrol se destaca por seu estilo único e irreverente, trazendo à tona personagens excêntricos e profundamente falhos. A série mistura comédia absurda com temas sombrios, <br> abordando traumas e problemas psicológicos de maneira empática. Seu enredo surreal, aliado ao humor ácido e à quebra de convenções do gênero de super-heróis, cria uma experiência <br> original e envolvente. Apesar de seu ritmo ocasionalmente irregular, Doom Patrol oferece uma narrativa criativa que conquista tanto pelo lado humano dos personagens quanto pela exploração do bizarro e imprevisível  </p> " . "<img src='" .
           $series[3]['imagem'] . "'/>" . "</div>";
           echo "<div class='imagens' <span class='tex'>" . $series[4]['name'] . "</span> - <p> Peaky Blinders é uma série que cativa pela sua estética estilosa, narrativa intensa e personagens bem desenvolvidos. Ambientada na Inglaterra pós-Primeira Guerra, a história dos irmãos <br>Shelby mistura crime e ambição em um cenário de tensão social e política. Liderado por Cillian Murphy, o elenco oferece atuações fortes, trazendo profundidade ao retrato de um clã violento e determinado a conquistar poder. A direção é sofisticada, e a trilha sonora moderna <br>intensifica a atmosfera sombria e ameaçadora. Embora alguns arcos de personagens possam se arrastar, Peaky Blinders entrega uma experiência visual e dramática que é poderosa e envolvente, destacando-se como uma série de época vibrante e marcante.</p> " . "<img src='" .
           $series[4]['imagem'] . "'/>" . "</div>";}

            
    if ($genero == "comedia"){
        echo "<div class='imagens' <span class='tex'>" . $series[5]['name'] . "</span> - <p> How I Met Your Mother é uma comédia envolvente que se destaca pela forma criativa e não-linear de contar a história de amizade, amor e amadurecimento de um grupo de amigos em Nova York. A série mistura humor <br> leve com momentos emocionantes, conduzidos por personagens cativantes como o romântico Ted, o icônico Barney e a independente Robin. Ao longo de nove temporadas, os espectadores são conduzidos por reviravoltas e mistérios que mantêm o interesse, especialmente em <br> relação à identidade da mãe. Embora o final tenha dividido os fãs, a série é repleta de momentos memoráveis e frases marcantes, tornando-se uma referência cultural que explora com autenticidade os altos e baixos da vida adulta.</p> " . "<img src='" .
           $series[5]['imagem'] . "'/>" . "</div>";
           echo "<div class='imagens' <span class='tex'>" . $series[6]['name'] . "</span> - <p>  The Office é uma comédia única e brilhante que retrata o cotidiano de uma empresa de papel, capturada em um estilo de falso documentário que a torna incrivelmente envolvente.<br><br> Com um humor sutil e muitas vezes constrangedor, a série nos leva ao mundo de personagens inesquecíveis, especialmente o excêntrico gerente Michael Scott, que é cativante e desajeitado na mesma medida.<br><br> The Office consegue transformar a rotina e a simplicidade em um show repleto de momentos hilários e emocionantes, tornando-se um clássico atemporal para fãs de comédia. </p> " . "<img src='" .
           $series[6]['imagem'] . "'/>" . "</div>";
           echo "<div class='imagens' <span class='tex'>" . $series[7]['name'] . "</span> - <p> The Kominsky Method é uma comédia dramática sensível que explora a amizade e os desafios da vida na terceira idade, centrando-se na relação entre um ator aposentado e seu agente, ambos enfrentando os altos e baixos do envelhecimento.<br><br> Com performances brilhantes de Michael Douglas e Alan Arkin, a série combina humor afiado com reflexões profundas sobre a passagem do tempo e a busca por significado.<br><br> Através de diálogos inteligentes e situações cômicas, The Kominsky Method nos lembra que, mesmo na velhice, a vida ainda pode ser cheia de surpresas e risos. </p> " . "<img src='" .
           $series[7]['imagem'] . "'/>" . "</div>";
           echo "<div class='imagens' <span class='tex'>" . $series[8]['name'] . "</span> - <p>  Barry é uma série que mistura comédia e drama, seguindo a vida de um ex-fuzileiro naval que se torna assassino de aluguel e acaba se apaixonando pelo mundo da atuação.<br><br> Com um enredo inovador, a série explora a luta de Barry entre sua natureza violenta e o desejo de encontrar um propósito na vida através da arte.<br><br> As performances de Bill Hader e o tom sombrio, mas muitas vezes hilário, fazem de Barry uma experiência única e cativante. </p> " . "<img src='" .
           $series[8]['imagem'] . "'/>" . "</div>";
           echo "<div class='imagens' <span class='tex'>" . $series[9]['name'] . "</span> - <p>  Todo Mundo Odeia o Chris é uma comédia inspirada na adolescência do comediante Chris Rock, retratando suas experiências engraçadas e desafiadoras enquanto cresce em uma família de classe média baixa no Brooklyn dos anos 80.<br><br> A série é marcada por seu humor inteligente e situações relatáveis, que refletem a luta de Chris para se encaixar na escola e na vida familiar.<br><br> Com uma narrativa envolvente e personagens memoráveis, Todo Mundo Odeia o Chris captura de maneira brilhante as complexidades da infância e da adolescência. </p> " . "<img src='" .
           $series[9]['imagem'] . "'/>" . "</div>";}
    if ($genero == "acao"){
        echo "<div class='imagens' <span class='tex'>" . $series[10]['name'] . "</span> - <p> The Boys é uma série ousada que subverte o conceito tradicional de super-heróis, mostrando o lado obscuro de figuras idolatradas. <br><br> A trama mistura violência, humor ácido e críticas à sociedade, explorando temas de corrupção e poder. <br><br> Embora exagerada em algumas cenas, mantém o público envolvido com seu ritmo intenso e personagens complexos. </p> " . "<img src='" .
           $series[10]['imagem'] . "'/>" . "</div>";
           echo "<div class='imagens' <span class='tex'>" . $series[11]['name'] . "</span> - <p> Arrow traz uma abordagem sombria e realista ao universo dos super-heróis, focando em Oliver Queen e sua luta por justiça. <br><br> A série mistura ação intensa com drama pessoal, explorando temas de redenção e sacrifício. <br><br> Apesar de alguns arcos mais lentos, Arrow é pioneira em seu estilo e marcou o início do Arrowverse. </p> " . "<img src='" .
           $series[11]['imagem'] . "'/>" . "</div>";
           echo "<div class='imagens' <span class='tex'>" . $series[12]['name'] . "</span> - <p>  Demolidor apresenta Matt Murdock, um advogado cego que luta contra o crime em Hell's Kitchen como o vigilante Demolidor. <br><br> A série combina ação sombria com dilemas morais, explorando a dualidade do personagem entre justiça e vingança. <br><br> Com cenas de luta intensas e um enredo profundo, é uma das adaptações mais elogiadas da Marvel. <br><br> A série equilibra cenas de ação explosivas com um estudo de personagem sombrio e psicológico. <br><br> Com atuações fortes e um roteiro impactante, é um prato cheio para os fãs de histórias de anti-heróis. </p> " . "<img src='" .
           $series[12]['imagem'] . "'/>" . "</div>";
           echo "<div class='imagens' <span class='tex'>" . $series[13]['name'] . "</span> - <p>  O Justiceiro é uma série intensa e brutal que explora a vingança e o trauma de Frank Castle, um vigilante impiedoso. <br><br> A série equilibra cenas de ação explosivas com um estudo de personagem sombrio e psicológico. <br><br> Com atuações fortes e um roteiro impactante, é um prato cheio para os fãs de histórias de anti-heróis. </p> " . "<img src='" .
           $series[13]['imagem'] . "'/>" . "</div>";
           echo "<div class='imagens' <span class='tex'>" . $series[14]['name'] . "</span> - <p>Vikings é uma série épica que narra a jornada de Ragnar Lothbrok, um dos guerreiros nórdicos mais icônicos da história. <br><br> A série mistura batalhas grandiosas com intrigas familiares e espirituais, explorando a cultura viking em detalhes. <br><br> Com visuais impressionantes e um enredo cativante, ela se destaca entre as melhores produções de drama histórico. </p> " . "<img src='" .
           $series[14]['imagem'] . "'/>" . "</div>";
    }
    


   /* if ($genero == "acao"){
         foreach($series as $serie){
          if($serie["genero"] == "acao"){
          echo "<div class='imagens'> <span class='tex'>" . $serie['name'] . "</span> - " . "<img src='" .
           $serie['imagem'] . "'/>" . "</div>";}}}*/






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