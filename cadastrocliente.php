<!DOCTYPE html> 
<html lang="pt-br"> 
<head> 
<meta charset="UTF-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<meta http-equiv="X-UA-Compatible" content="ie=edge"> 
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
<title>Cadastro - MYSQLI</title>
<style>
    
    .w3-input:focus::placeholder {
      color: teal;
      height: 45px;
          top: -20px;
            font-size: 15px;
           
    }

 
        .w3-input:focus {
          height: 45px;
         
            font-size: 15px;
            color: dodgerblue;
            text-align: top;
        }
       
        .w3-input {
            position: relative;
            display: inline-block;
        }
        .w3-input input {
            padding: 10px;
            font-size: 16px;
        }
        .w3-input .placeholder {
            position: absolute;
            top: 50%;
            left: 10px;
            transform: translateY(-50%);
            pointer-events: none;
            color: #aaa;
            transition: 0.2s;
        }
        .w3-input input:focus + .placeholder,
        .w3-input input:not(:placeholder-shown) + .placeholder {
            visibility: visible;
        }
       
</style> 
</head> 
<body >
<a href="home.php"  class="w3-display-topleft"> 
<i class="fa fa-arrow-circle-left w3-large w3-teal w3-button w3-xxlarge"></i>      
</a> 



<div class="w3-container w3-round-xxlarge w3-display-middle w3-card-4 w3-third " style="width:80% "> 
<div class="w3-container w3-round-xxlarge w3-display-middle w3-card-4 w3-third w3-light-blue" style="width:30%">  

<h1 class="w3-center w3-teal w3-round-large w3-margin">Cadastro Usuario</h1> 
<form action="cadastroclienteAction.php" class="w3-container" method='post'> 


<label class="w3-text-teal" style="font-weight: bold;" class="labelInput">Nome</label> 
<input name="txtNome" placeholder="Digite o Nome" class="w3-input w3-light-grey w3-border" required><br> 

<label class="w3-text-teal" style="font-weight: bold;">Senha</label> 
<input name="txtSobrenome" type="password" placeholder="Digite a Senha"class="w3-input w3-light-grey w3-border"required><br> 

<label class="w3-text-teal" style="font-weight: bold;">Email</label> 
<input name="txtEmail" placeholder="Digite o Email" class="w3-input w3-light-grey w3-border"required><br> 

<label class="w3-text-teal" style="font-weight: bold;">Endereço</label> 
<input name="txtEndereco" placeholder="Digite o Endereço" class="w3-input w3-light-grey w3-border"required><br>

<label class="w3-text-teal" style="font-weight: bold;">Numero</label> 
<input name="txtNumero" placeholder="Digite o Numero" class="w3-input w3-light-grey w3-border"required><br>

<label class="w3-text-teal" style="font-weight: bold;">Telefone</label> 
<input name="txtTelefone" placeholder="Digite o Telefone" class="w3-input w3-light-grey w3-border"required><br>

<label class="w3-text-teal" style="font-weight: bold;">Cidade</label> 
<input name="txtCidade" placeholder="Digite a Cidade" class="w3-input w3-light-grey w3-border"required><br>

<label class="w3-text-teal" style="font-weight: bold;">Estado</label> 
<input name="txtEstado" placeholder="Digite o Estado" class="w3-input w3-light-grey w3-border"required><br>

<label class="w3-text-teal"  style="font-weight: bold;">Data de Nascimento</label> 
<input  type="date" id="data_nasc" name="data_nasc" placeholder="Digite a data de Nascimento" class="w3-input w3-light-grey w3-border"required><br>


<button name="btnAdicionar" class="w3-button w3-teal w3-cell w3-round-large w3-right w3-margin-right ">  
<i class="w3-xxlarge fa fa-user-plus"></i> Adicionar 
</button> 
</form> 
</div> 