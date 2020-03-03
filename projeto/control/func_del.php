<?php

$pdo = new PDO('mysql:host=localhost:3306;dbname=prj','root','root');


 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
//  $stmt = $pdo->query("select * from funcionario;");
$stmt = $pdo->query(" select * from funcionario INNER JOIN depto ON depto.ID_DEPTO = funcionario.ID_DEPTO  ");



?>



<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NOME</th>
<!--      <th scope="col">SALARIO</th>-->
      <th scope="col">DEPARTAMENTO</th>
      <th scope="col">IDADE</th>
      <th scope="col">REMOVER</th>
      <th scope="col">EDITAR</th>

    </tr>
  </thead>


 <tbody>

<?php



while ($linha = $stmt->fetch(PDO::FETCH_ASSOC)) {
    
echo '<tr>';

echo '<td>'.$linha['ID_FUNC'].'</td>';
echo '<td>'.$linha['NOME'].'</td>';
//echo '<td>'.$linha['SALARIO'].'</td>';
echo '<td>'.$linha['DESCRI'].'</td>';
echo '<td>'.$linha['IDADE'].'</td>';

echo'<form method="POST" action="../control/func_rem.php">';
echo'<td><button type="submit"> <img src="../view/img/delete.png" height="30px"> </button></td>';
echo'<input type="hidden"  name="id_ex" value="'.$linha['ID_FUNC'].'">';
echo'</form>';

echo'<form method="post" action="../view/func_edi.php">';
echo'<td><button type="submit"> <img src="../view/img/edit.png" height="30px"> </button></td>';
echo'<input type="hidden"  name="id_ed" value="'.$linha['ID_FUNC'].'">';
echo'</form>';


//echo '<td><a href="teste.php?id='.$linha['ID_FUNC'].'" ><img src="../view/img/delete.png" height="30px"></a>';
//echo '<a href="teste.php:?id'.$linha['ID_FUNC'].'" ><img src="../view/img/edit.png" height="30px"></a></td>';



echo '</tr>';
}

echo'</form>';
$stmt->execute();


?> </tbody></table>
