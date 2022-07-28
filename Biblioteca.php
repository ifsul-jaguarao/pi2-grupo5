<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta  charset="utf-8" />
<title>Titulo</title>
</head>
<body>

<?php

$conexao = mysqli_connect("172.16.88.62", "pi2-grupo5", "grupo5", "pi2-grupo5");

print_r($_POST);

$titulo = $_POST["Titulo"];
echo $titulo;
/*
$resultado = mysqli_query($conexao, "SELECT * FROM Livro");

while ($linha = mysqli_fetch_assoc($resultado)) {

	// Substitua pelo campo correto
	echo $linha['Status'] . "<br />";
}
*/
if($titulo &&($titulo != "")){
	
	$sql = "INSERT INTO Livro (Titulo) VALUES (/". $titulo . "/')";
//INSERT INTO Livro (Título) VALUES ('teste')
	$resultado = mysqli_query($conexao, $sql );
	echo $sql;


	echo "Titulo adicionado </br>";
	
}else{
	echo "Erro";


}
?>


</body>
</html>