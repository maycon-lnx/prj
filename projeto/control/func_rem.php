<?php




$id=$_POST['id_ex'];

echo $id;


$pdo = new PDO('mysql:host=localhost:3306;dbname=prj','root','root');


 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $stmt = $pdo->prepare("delete from funcionario where ID_FUNC=$id");
  $stmt->execute();


header('Location: ../view/func_del.php');




?>
