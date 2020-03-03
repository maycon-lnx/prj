
<form nome'envia_local' action='./relatorio_sel.php' method='POST'>
<select name="select">

<?php

$pdo = new PDO('mysql:host=localhost:3306;dbname=prj','root','root');


 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
//$stmt = $pdo->query(" select * from funcionario order by SALARIO desc LIMIT 10;");

//$stmt = $pdo->query(" select NOME,SALARIO,depto.DESCRI from funcionario INNER JOIN depto ON depto.ID_DEPTO = funcionario.ID_DEPTO order by SALARIO desc LIMIT 10;");
$stmt = $pdo->query(" select depto.DESCRI from funcionario INNER JOIN depto ON depto.ID_DEPTO = funcionario.ID_DEPTO group by depto.DESCRI ");

while ($linha = $stmt->fetch(PDO::FETCH_ASSOC)) {

echo "<option value=".$linha['DESCRI'].">".$linha['DESCRI']."</option>";



}


?>
</select><br>
<input type='submit' value='buscar'>
</form>






</select>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Salario</th>
	<th scope="col">Departamento</th>
    </tr>
  </thead>


 <tbody>

<?php
$setor=$_POST['select'];

$stmt = $pdo->query("select depto.DESCRI, NOME, SALARIO from funcionario INNER JOIN depto ON depto.ID_DEPTO = funcionario.ID_DEPTO where depto.DESCRI='$setor' order by SALARIO DESC LIMIT 10;");

while ($linha = $stmt->fetch(PDO::FETCH_ASSOC)) {
    
echo '<tr>';

echo '<td>'.$linha['NOME'].'</td>';
echo '<td> R$ '.$linha['SALARIO'].'</td>';
echo '<td>'.$linha['DESCRI'].'</td>';

echo '</tr>';
}







$stmt->execute();


?> </tbody></table>
