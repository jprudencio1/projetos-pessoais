<?php
   error_reporting(0);
    session_start();
?>
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
.registro{
    position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); 
    width: 300px;
    height: 300px;
    background-color: gold;
    border-radius: 6px;
    border:solid black 2px;
    
}


.cadasreousuario{
    display:flex;
    background-color: black;
    color:gold;
    border-radius: 6px;
    display:center;
}

.cadastrosenha{
    display:flex;
    padding-left:3px;
    background-color: black;
    color:gold;
    border-radius: 6px;
}



.MensagemRegistro{
    display: flex;
    justify-content: center;
    text-align: center;
    
    padding-top: 15px;
    
}


</style>
</head>


<body>

<section>


<div class="registro">
    <span class="MensagemRegistro"> Efetue o seu registro colocando <br/> o usuario e senha</span>
    <form action="Cadastro.php" method="POST" name="formcadastro">
        
        <input type="text" name="usuario" placeholder="Registre seu nome" class="cadasreousuario">
        <input type="password" name="senha" placeholder="Registre sua senha" class="cadastrosenha">
        <input type="submit" name="registrar" value="Registrar"/>
        


    </form>

    <?php 
   

    $_SESSION["usuarioRegistro"]= $_POST["usuario"];
    $_SESSION["senhaRegistro"]= $_POST["senha"];
    $_SESSION["error"] = "";
    
    if(isset($_POST["usuario"] ) and isset($_POST["senha"])){
        $_SESSION["usuarioRegistro"] = $_POST["usuario"];
        $_SESSION["senhaRegistro"]= $_POST["senha"];
    

        
    }
    
    if(isset($_SESSION["usuarioRegistro"]) && isset($_SESSION["senhaRegistro"])){
           header("Location:Login.php");
           // print_r($_SESSION);
           // echo "erro aqui";
            exit();
    }

    
    
?>



</div>

</section>

</body>