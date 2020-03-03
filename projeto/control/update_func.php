<?php

$nome=$_POST['nome'];
$salario=$_POST['salario'];
$idade=$_POST['idade'];
$id=$_POST['id_func'];
echo $id;
$pdo = new PDO('mysql:host=localhost:3306;dbname=prj','root','root');


 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
$stmt = $pdo->prepare("update funcionario set NOME='$nome',SALARIO=$salario,IDADE=$idade where ID_FUNC='$id'");
  $stmt->execute();


header('Location: ../view/func_del.php');
#header("Location: ../view/func_edi.php?ID=$id");




  echo ('<br>');
  echo ($nome);
  echo ('<br>');
  echo ($idade);

  echo ('<br>');
  echo ($salario);

?>
