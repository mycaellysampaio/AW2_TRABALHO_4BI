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
        <h1>Cadastrar</h1>
        <form method="POST">
            <input type="text" name="nome" placeholder="Nome Completo" maxlength="30">
            <input type="email" name="email" placeholder="Usuário" maxlength="40">
            <input type="password" name="senha" placeholder="Senha" maxlength="32">
            <input type="password" name="csenha" placeholder="Confirmar Senha" maxlength="32">
            <input type="submit" value="CADASTRAR">
        </form>
        </div>

        <?php
        //global $msgErro;
        if(isset($_POST['nome'])){
            $nome = addslashes($_POST['nome']);
            $email  = addslashes($_POST['email']);
            $senha  = addslashes($_POST['senha']);
            $cSenha  = addslashes($_POST['csenha']);
            //verificar se os campos não estão null

            if(!empty($nome) && !empty($email) && !empty($senha) && !empty($cSenha)){
                $u->conectar("bdprovaw2","localhost","root","");
                if($u->msgErro == ""){
                    if($senha == $cSenha){
                        if($u->cadastrar($nome, $email, $senha)){
                            //echo "cadastrado com sucesso! Agora é só fazer o login";
                            ?>
                            <a href="index.php">cadastrado com sucesso! Agora é só fazer o login</a>
                            <?php
                        }else{
                            echo "email já cadastrado"; 
                        }
                    }else{
                        echo "O que está no campo senha é diferente do que está no campo confirmar senha";
                    }
                    
                }else{
                    echo "Algo errado: ".$u->msgErro;
                }
            }else{
                echo "Preencha todos os campos";
            }
        }
        //ATÉ AQUI TUDO CERTO
        ?>
    </body> 
</html>