<?php

$nome=$_POST['nome'];
echo $nome;

$nome=$_POST['nome'];
$salario=$_POST['salario'];
$depto=$_POST['depto'];
$idade=$_POST['idade'];


$pdo = new PDO('mysql:host=localhost:3306;dbname=prj','root','root');


 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
  $stmt = $pdo->prepare("INSERT INTO funcionario (NOME,SALARIO,ID_DEPTO,IDADE) values ('$nome','$salario',$depto,$idade)");
  $stmt->execute();

header("Location: ../view/func_todos.php");

?>
