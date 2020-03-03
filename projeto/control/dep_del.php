<?php

$pdo = new PDO('mysql:host=localhost:3306;dbname=prj','root','root');


 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
  $stmt = $pdo->query("select * from depto;");



?>



<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID_DEPTO</th>
      <th scope="col">NOME_DEPTO</th>
      <th scope="col">ACAO</th>


    </tr>
  </thead>


 <tbody>

<?php



while ($linha = $stmt->fetch(PDO::FETCH_ASSOC)) {
    
echo '<tr>';

echo '<td>'.$linha['ID_DEPTO'].'</td>';
echo '<td>'.$linha['DESCRI'].'</td>';
echo '<td><a href="teste.php" ><img src="../view/img/delete.png" height="30px"></a>';
echo '<a href="teste.php" ><img src="../view/img/edit.png" height="30px"></a></td>';

echo '</tr>';
}

$stmt->execute();


?> </tbody></table>
