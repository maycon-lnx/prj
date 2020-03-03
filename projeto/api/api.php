<?php
	/* prepara o documento para comunicação com o JSON, as duas linhas a seguir são obrigatórias 
	  para que o PHP saiba que irá se comunicar com o JSON, elas sempre devem estar no ínicio da página */
	header("Cache-Control: no-cache, no-store, must-revalidate"); // limpa o cache
	header("Access-Control-Allow-Origin: *");
	header("Content-Type: application/json; charset=utf-8");


$funcionario=array();


	$nome=$_GET['NOME'];
	$id_func=$_GET['ID_FUNC'];
	$TOKEN='UNINOVE10';


$pdo = new PDO('mysql:host=localhost:3306;dbname=prj','root','root');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



if ($_GET['ID_FUNC'] != NULL && $_GET['TOKEN']==$TOKEN){


if ($_GET['TOKEN']==$TOKEN){
	


$stmt = $pdo->query("select * from  funcionario  where ID_FUNC=$id_func;");
	
while ($linha = $stmt->fetch(PDO::FETCH_ASSOC)){

$funcionario[]= $linha;

}
$json_str=json_encode($funcionario);

echo "$json_str";
           }

$stmt->execute();


}else{


	   if ($_GET['TOKEN']==$TOKEN && $_GET['NOME']!=NULL){

$stmt = $pdo->query("select * from  funcionario  where NOME like '$nome%';");

while ($linha = $stmt->fetch(PDO::FETCH_ASSOC)){

$funcionario[]= $linha;

}
$json_str=json_encode($funcionario);

echo "$json_str";
	   }else

	   {echo 'Parametro errado';}

}
