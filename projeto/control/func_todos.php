<?php

$pdo = new PDO('mysql:host=localhost:3306;dbname=prj','root','root');


 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
  $stmt = $pdo->query("select * from funcionario;");



?>



<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NOME</th>
 <!--    <th scope="col">SALARIO</th>-->
      <th scope="col">ID_DEPTO</th>
      <th scope="col">IDADE</th>

    </tr>
  </thead>


 <tbody>

<?php



while ($linha = $stmt->fetch(PDO::FETCH_ASSOC)) {
    
echo '<tr>';

echo '<td>'.$linha['ID_FUNC'].'</td>';
echo '<td>'.$linha['NOME'].'</td>';
//echo '<td> R$ '.$linha['SALARIO'].'</td>';
echo '<td>'.$linha['ID_DEPTO'].'</td>';
echo '<td>'.$linha['IDADE'].'</td>';

echo '</tr>';
}

$stmt->execute();


?> </tbody></table>
