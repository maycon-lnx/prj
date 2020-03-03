<?php

$pdo = new PDO('mysql:host=localhost:3306;dbname=prj','root','root');


 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
//$stmt = $pdo->query(" select * from funcionario order by SALARIO desc LIMIT 10;");

$stmt = $pdo->query(" select NOME,SALARIO,depto.DESCRI from funcionario INNER JOIN depto ON depto.ID_DEPTO = funcionario.ID_DEPTO order by SALARIO desc LIMIT 10;");


?>



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



while ($linha = $stmt->fetch(PDO::FETCH_ASSOC)) {
    
echo '<tr>';

echo '<td>'.$linha['NOME'].'</td>';
echo '<td> R$ '.$linha['SALARIO'].'</td>';
echo '<td>'.$linha['DESCRI'].'</td>';

echo '</tr>';
}

$stmt->execute();


?> </tbody></table>
