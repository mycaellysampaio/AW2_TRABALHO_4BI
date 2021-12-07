<?php
session_start();
if(!isset($_SESSION['id_usuario'])){
    header("location: index.php");
    exit;
}
echo "Seja Bem-Vindo à Sua Área de Votação";

?>
<!DOCTYPE html>

<html>
    <head>
        <title>Votação</title>
        <meta charset="UTF-8">
        <script src="codigo.js"></script>
        <link rel="stylesheet" type="text/css" href="style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="container">
            <div class="branco">
                <div class="cinzaClaro">
                    <p>Número:</p>
                    <form action="">
                        <input size="1" id="campo1" value="" maxlength="1" type="text" readonly="readonly"/>
                        <input size="1" id="campo2" value="" maxlength="1" type="text" readonly="readonly"/>
                    </form>
                </div>
                <div class="cinzaEscuro">
                    <b>JUSTIÇA<br>ELEITORAL</b> 
                </div>
                <div class="preto">
                    <button class="bnt click" onclick="inserir(1)">1</button>
                    <button class="bnt click" onclick="inserir(2)">2</button>
                    <button class="bnt click" onclick="inserir(3)">3</button>
                    <button class="bnt click" onclick="inserir(4)">4</button>
                    <button class="bnt click" onclick="inserir(5)">5</button>
                    <button class="bnt click" onclick="inserir(6)">6</button>
                    <button class="bnt click" onclick="inserir(7)">7</button>
                    <button class="bnt click" onclick="inserir(8)">8</button>
                    <button class="bnt click" onclick="inserir(9)">9</button>
                    <button class="bnt click" onclick="inserir(0)">0</button>
                    <div class="teclado2">
                        <button class="branco  click">BRANCO</button>
                        <button class="laranja  click" onclick="corrige()">CORRIGE</button>
                        <button class="verde" onclick="votar()">CONFIRMA</button>
                    </div>
                </div>
            </div>
            <a href="resultado.html">Resultado</a>
        </div> 
       
    </body>
</html>

<?php
$fp = fopen("arquivo.txt","wb");
?>
