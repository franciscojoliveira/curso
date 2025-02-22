<!DOCTYPE html> 
<html lang="pt-br"> 
<head> 
<meta charset="UTF-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<meta http-equiv="X-UA-Compatible" content="ie=edge"> 
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
<title>Cadastro - MYSQLI</title> 
</head> 
<body> 
    <?php

$servername = "localhost"; 
$username = "root"; 
$password = "1234"; 
$dbname = "pwii"; 
$conexao = new mysqli($servername, $username, $password, $dbname); 
if ($conexao->connect_error) { 
die("Connection failed: " . $conexao->connect_error); 
}  
$sql = "INSERT INTO amigo (nome, senha, email, endereco, numero, telefone, cidade, estado, data_nasc) 
VALUES ('".$_POST['txtNome']."', '".$_POST['txtSenha']."', '".$_POST
 ['txtEmail']."', '".$_POST ['txtEndereco']."', '".$_POST ['txtNumero']."', '".$_POST ['txtTelefone']."', '".$_POST ['txtCidade']."' , '".$_POST ['txtEstado']."' , '".$_POST ['txtData_nasc']."')"; 

 
if ($conexao->query($sql) === TRUE) { 
echo ' 
<a href="cadastrarsenha.php"> 
<h1 class="w3-button w3-teal">Cadastro Salvo com sucesso! </h1> 
</a>  
'; 
} else { 
    echo ' 
    <a href="cadastrarsenha.php"> 
        <h1 class="w3-button w3-teal">ERRO! </h1> 
    </a>  
    '; 
} 
$conexao ->close ();

    ?>

</div> 
</body> 
</html> 