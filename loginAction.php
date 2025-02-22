<!DOCTYPE html> 
<html lang="pt-br"> 
<head> 
<meta charset="UTF-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<meta http-equiv="X-UA-Compatible" content="ie=edge"> 
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
<title></title> 
</head> 
<body> 
<div class="w3-padding w3-content w3-text-grey w3-third w3-display-middle" > 
<?php 
 
$senha = $_POST['txtSenha'];
$email = isset($_POST['txtEmail']) ? $_POST['txtEmail'] : ''; 
$servername = "localhost"; 
$username = "root"; 
$password = "1234"; 
$dbname = "pwii"; 
$conexao = new mysqli($servername, $username, $password, $dbname); 
if ($conexao->connect_error) { 
die("Connection failed: " . $conexao->connect_error); 
} 

//Verificar se foi informado nome ou email
if (!empty($email)) {

    $sql = "SELECT * FROM amigo WHERE email = '".$email."';";
} else {
    echo '<h1 class="w3-button w3-teal">Por favor, informe nome ou email!</h1>';
    exit;
}

$resultado = $conexao->query($sql); 
$linha = mysqli_fetch_array($resultado); 
if($linha != null) 
{ 
    if($linha['senha'] == $senha) 
    { 

        echo ' 
        <a href="principal.php"> 
        <h1 class="w3-button w3-teal"> Seja Bem-Vindo(a)! </h1> 
        </a> '; 
    } 
    
    else 
    { 
        echo ' 
        <a href="principal.php"> 
        <h1 class="w3-button w3-teal">Login Inválido! </h1>'; 
 
 
} 
} 
else 
{
 echo '</a> 
<a href="index_copia.php"> 
<h1 class="w3-button w3-teal">Login Inválido! </h1> 
</a> 
'; 
} 
$conexao->close(); 
?> 
</div> 
</body> 
</html> 