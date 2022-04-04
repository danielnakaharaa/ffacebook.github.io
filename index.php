<?php
include("conexao.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook - entre ou cadastre-se</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <div class="alinhamento">
    <div class="img">
        <img src="https://static.xx.fbcdn.net/rsrc.php/y8/r/dF5SId3UHWd.svg" alt="">
    </div>
    <p class="font">O Facebook ajuda você a se conectar e compartilhar com as pessoas que fazem parte da sua vida.</p>
    </div>
    <div class="container-for">
    <div class="container-form">

        <form  action="face.php" method="post">
            <div class="espa">
              <input class="email"type="email" name="email" placeholder="Email ou telefone" aria-label="Email ou telefone">
            </div>
            <div  class="espa">
              <input class="senha" type="password" name="senha"  placeholder="Senha">
            </div>

            <div class="botao-a">
               
                   <input  class="botao" type="submit"   value="Entrar">
                 
            </div>

           
                <div class="link">
                    <a class="a" href="">Esqueceu a senha?</a>
                </div>
                <div class="linha"></div>
                <div >
                    <a class="botao-verde"href="">Criar nova conta</a>
                </div>
        </form>
        
    </div>
    <div class="cere">
            <a class="text" href=""> Criar uma Página</a>
            para uma celebridade, uma marca ou uma empresa.
        </div>
</div>
</div>








</body>
</html>