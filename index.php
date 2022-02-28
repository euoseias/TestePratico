<?php
/*
1 - O código abaixo precisa cadastrar uma tarifa de ônibus relacionando as entidades
"Operator" e "Fare"

2 - Onde "Fare" é a tarifa e "Operator" a operadora de benefício 
de vale-transporte. 

3 - Uma "Fare" só pode ser cadastrada caso aquela operadora não 
possua nenhuma tarifa ativa (Fare.Status == 1) de mesmo valor dentro de um período 
de 6 meses.
*/
?>



<!DOCTYPE html>
<html>
<head>
<title>teste pleno</title>
<link href="index.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<div class="posicao1">
<form action="cadastrar_action.php" method="POST">
    <div id="posicao2">
    <p>Informe o valor da tarifa a ser cadastrada</p>
	<input type="text" name="tarifa"  placeholder="valor da tarifa a ser cadastrada"  required>
	<p>Informe o código da operadora para a tarifa<br>
    Exemplos: OP01, OP02, OP03...</p>
    <input type="text" name="operador"  placeholder="código da operadora para a tarifa"  required>
    <br>
    <button type="submit" class="button4">Registrar</button>
    </div>
    </div>
</form>
</body>
</html>