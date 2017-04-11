<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Exemplos de loja</title>
<link href="css/index.css" rel="stylesheet">
</head>

<body>
<h1 class="topo">Faça seu login!!</h1>
	<center>
    	<?php
        	if(isset($erro))
				echo "<font color='red'>
									$erro
									</font>";
		?>
    	
    
    	<form name="#" method="post" id="formulario">
        	<p classe="email">E-mail:
            	<input type="text" name="email">
            </p>
            
            <p classe="senha">Senha:
				<input type="password" name="senha">
            </p>
            
            <input class="botao" type="submit" name="btn_entrar" value="Entrar">
   
        </form> 
    </center>
    
</body>
</html>
