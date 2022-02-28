
<?php
$Servidor = 'localhost';
$nomeBanco = 'cadastro'; /* database */
$Usuario = 'root'; /* Usuario */
$Senha = ''; /* senha */
$pdo = new PDO("mysql:dbname=".$nomeBanco.";host=".$Servidor ,$Usuario, $Senha);






 //passando os valores do form
 $tarifa = filter_input(INPUT_POST, 'tarifa');  
 $operador = filter_input(INPUT_POST, 'operador');  

 
 if($tarifa && $operador){

    $sql = $pdo->prepare("SELECT * FROM transporte WHERE operador = :operador");
    $sql ->bindValue(':operador', $operador);
    $sql ->execute();


      if($sql->rowCount() === 0){

  $sql = $pdo->prepare("INSERT INTO transporte (tarifa, operador) VALUES (:tarifa, :operador)");
  $sql ->bindValue(':tarifa', $tarifa);
  $sql ->bindValue(':operador', $operador);
  $sql ->execute();
        header("Location: msgSucesso.php");
        exit;
 }else{
      header("Location: msgAtivo.php");
      exit;  
 }


} 
    

?>

