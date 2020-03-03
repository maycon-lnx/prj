<?php

$nome=$_POST['nome'];
echo $nome;

$descri=$_POST['descri'];


$pdo = new PDO('mysql:host=localhost:3306;dbname=prj','root','root');


 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
  $stmt = $pdo->prepare("INSERT INTO depto (DESCRI) values ('$descri')");
  $stmt->execute();



header("Location: ../view/dep_todos.php");





?>
