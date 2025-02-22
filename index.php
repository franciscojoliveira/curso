<!DOCTYPE html> 
<html lang="pt-br"> 
<head> 
<meta charset="UTF-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script> 
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
<title></title> 
</head> 
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}



/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
  font-size: 16px;
  display: flex;
  justify-content: right;
  align-items: right;
  text-indent: 5px;
}

span.psw {
  float: right;
  padding-top: 16px;
  font-size: 16px;
  display: flex;
  justify-content: right;
  align-items: right;

  
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Adicionar animação de zoom */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/*Alterar estilos para o botão de extensão e cancelamento em telas muito pequenas*/
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
    
  }
  
}
</style>    
<body >
<a href="home.php" class="w3-display-topleft"> 
<i class="fa fa-arrow-circle-left w3-large w3-teal w3-button w3-xxlarge"></i>      
</a>

<div class="w3-container w3-round-xxlarge w3-display-middle w3-card-4 w3-third w3-light-blue" style="width:20%"> 
 
<div class="w3-center"> 
<br> 
<img src="img/log.png" alt="Gabi" style="width:40%" class="w3-circle w3-margin-top"> 
</div> 
 
<form class="w3-container " action="loginAction.php" method="post"> 
<div class="w3-section "> 

<label style="font-weight: bold;">Usuário</label> 
<input class="w3-input w3-border w3-margin-bottom "  type="text" placeholder="Digite o nome" name="txtNome" required> 

<label style="font-weight: bold ;">Email</label> 
<input class="w3-input w3-border"  placeholder="Digite a Email" name="txtEmail" required> 

<label style="font-weight: bold ;">Senha</label> 
<input class="w3-input w3-border"  type="password" placeholder="Digite a Senha" name="txtSenha" required> 

<button class="w3-button w3-block w3-teal w3-section w3-padding" type="submit">Entrar</button> 
<label>
        <input type="checkbox" checked="checked" name="remember"> Lembre-se de mim
      </label>
</div>

<div class="container" style="background-color:#f1f1f1" 
      
      span class="psw">Esqueceu <a href="#"> a senha?</a></span>
    </div>

    

</form> 
<br> 
</div> 
</body>
</html> 