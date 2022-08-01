<html>
<head>
    <meta charset="utf-8"/>
</head>
</html>

<?php
$CPF = $_GET['CPF']

$conexao = mysqli_connect("172.16.88.62", "phpmyadmin", "grupo5", "pi2-grupo5");
$conclusao = mysqli_query($conexao, "DELETE FROM Usuário WHERE CPF = " . $CPF);

echo "<h2>DELETE</h2>";

$user_deletado = mysqli_affected_rows($conexao);

if($user_deletado == 1)
    echo "Usuário deletado com sucesso. <br/>";
else
    echo "Usuário não deletado. <br/>";


echo "<br /><a href=\"consulta-basica.php\">Voltar</a>";
?>
