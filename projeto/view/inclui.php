<?php



include_once('./top.php');
?>

<div align='center'>
<form  action='../control/inclui_func.php'  method='POST'>



Nome:<br>
<input type='text' name='nome'><br>
Salario:<br>
<input type='text' name='salario'><br>
Depto:<br>
<!--<input type='text' name='depto'><br>-->
<select name="depto">

<?php

$pdo = new PDO('mysql:host=localhost:3306;dbname=prj','root','root');


 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//$stmt = $pdo->query(" select * from funcionario order by SALARIO desc LIMIT 10;");

//$stmt = $pdo->query(" select NOME,SALARIO,depto.DESCRI from funcionario INNER JOIN depto ON depto.ID_DEPTO = funcionario.ID_DEPTO order by SALARIO desc LIMIT 10;");
$stmt = $pdo->query(" select depto.DESCRI,depto.ID_DEPTO from funcionario INNER JOIN depto ON depto.ID_DEPTO = funcionario.ID_DEPTO group by depto.DESCRI ");

while ($linha = $stmt->fetch(PDO::FETCH_ASSOC)) {

echo "<option value=".$linha['ID_DEPTO'].">".$linha['DESCRI']."</option>";



}


?>
</select><br>


Idade:<br>
<input type='text' name='idade'><br><br>
<input type='submit' value='enviar'>





</form>
</div>
<?php
include_once('./roda.php');

?>
