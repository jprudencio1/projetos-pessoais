<html>
<head>

<style> 

section{
    width: 100%;
    height: 100%;
    background-image: url(fundodologin.jpg);
    background-repeat: no-repeat;
    background-size:cover;
    
}
.login{
    position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); 
    width: 300px;
    height: 300px;
    background-color: gold;
    border-radius: 6px;
    border:solid black 2px;
    
}


.loginusuario{
    display:flex;
    background-color: black;
    color:gold;
    border-radius: 6px;
    display:center;
}

.loginsenha{
    display:flex;
    padding-left:3px;
    background-color: black;
    color:gold;
    border-radius: 6px;
}



.MensagemLogin{
    display: flex;
    justify-content: center;
    text-align: center;
    
    padding-top: 15px;
    
}


</style>
</head>


<body>

<section>


<div class="login">
    <span class="MensagemLogin"> Efetue o seu login colocando <br/> o usuario e senha</span>
    <form action="login.php" method="POST" name="formlogin">
        
        <input type="text" name="usuario" placeholder="Usuário" class="loginusuario">
        
        
        <input type="password" name="senha" placeholder="Senha" class="loginsenha">
    
        <input type="submit" value="logar"/>
        



    </form>

    <?php 
    error_reporting(0);
    session_start();
    $usuario= $_POST["usuario"];
    $senha= $_POST["senha"];
    $_SESSION["error"] = "";


    if(isset($_SESSION["usuarioRegistro"]) or isset($_SESSION["senhaRegistro"])){
            if(strtolower($usuario) === $_SESSION["usuarioRegistro"] AND strtolower($senha) === $_SESSION["senhaRegistro"]){
                $_SESSION["login"] = "s";
                $_SESSION["cinefolo"] = $usuario;
                header("Location:Index.php");
            }else if(!isset($usuario) and !isset($senha)){
                echo"Insira seu usuario e login";
        }else{echo"Login e senha incorretos";}
    }else{
            echo "Voce não efetuou o resgitro, por favor clique aqui para se registrar:";
            ?>
            <a href="Cadastro.php">Registrar</a>;
            <?php 
               
        }



?>



</div>

</section>

</body>






</html>