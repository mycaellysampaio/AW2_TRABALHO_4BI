<?php
require_once "usuarios.php";
$u = new Usuario;
?>

<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Login</title>
    </head>

    <body>
        <div id="corpo-form">
        <h1>Entrar</h1>
        <form method="POST" >
            <input type="email" placeholder="Usuário" name="email">
            <input type="password" placeholder="Senha" name="senha">
            <input type="submit" value="ACESSAR">
            <a href="cadastrar.php">Ainda não é inscrito?<strong>Cadastre-se</strong></a>
        </form>
        </div>
        <!----------------->
        <?php
        //global $msgErro;
        if(isset($_POST['email'])){
            $email  = addslashes($_POST['email']);
            $senha  = addslashes($_POST['senha']);

            if(!empty($email) && !empty($senha)){
                $u->conectar("bdprovaw2","localhost","root","");
                if($u->msg == ""){
                    if($u->logar($email, $senha)){
                        header("location: areaprivada.php");
                    }else{
                        echo "email ou senha errados!"; 
                    }
                }else{
                    echo "Algo errado: ".$u->msgErro;
                }
            }else{
                echo "Preencha todos os campos";
            }
        }
        ?>
    </body>
</html>