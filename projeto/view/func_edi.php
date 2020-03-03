<?php

$idexterno=$_GET['ID'];

if ($idexterno){
$id=$idexterno;

}else{

$id=$_POST['id_ed'];
}



$pdo = new PDO('mysql:host=localhost:3306;dbname=prj','root','root');
 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $stmt = $pdo->query("select * from funcionario where ID_FUNC=$id;");
while ($linha = $stmt->fetch(PDO::FETCH_ASSOC)) {

	$id_func=$linha['ID_FUN'];
	$nome=$linha['NOME'];
	$salario=$linha['SALARIO'];
	$id_depto=$linha['ID_DEPTO'];
	$idade=$linha['IDADE'];


}



include_once('./top.php');
?>

<div align='center'>
<form  action='../control/update_func.php'  method='POST'>



Nome:<br>
<input type='text' name='nome' value='<?php echo $nome;?>'><br>
Salario:<br>
<input type='text' name='salario' value='<?php echo $salario;?>'><br>
<!--Depto:<br>
<input type='text' name='depto' value='<?php //echo $id_depto;?>'><br>-->
Idade:<br>
<input type='text' name='idade' value='<?php echo $idade; ?>'><br><br>

<input type='hidden' name='id_func' value='<?php echo $id; ?>'>
<input type='submit' value='enviar'>





</form>
</div>
<?php
include_once('./roda.php');
?>








