<html>
<?php

$id = $_POST["id"];
$nome= $_POST["nome"];


$conexao   = mysqli_connect("172.16.88.62", "phpmyadmin", "grupo5", "pi2-grupo5");


if ($nome && ($nome != "") && $CPF && ($CPF != "")) {

	
	
	$sql = "UPDATE Usuário SET nome = 	\"" . $nome . "\" WHERE CPF = " . $CPF;
	
	$resultado = mysqli_query($conexao, $sql);

	echo "Usuário atualizado com sucesso. <br />";


	}
else
	echo "Usuário não foi atualizado. <br />";


echo "<br /><a href=\"consulta-basica.php\">Voltar</a>";

?>

</html>