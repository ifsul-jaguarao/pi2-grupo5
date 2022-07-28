<html>
<body>
<?php

$CPF = $_GET['CPF'];

$up = mysql_connect('172.16.88.62', 'phpmyadmin', 'grupo5', 'pi2-grupo5');

$result = mysql_query($up, "SELECT * FROM Usuário WHERE CPF =" . $CPF)

$linha = mysql_fetch_assoc($result);

?>

<form action="update2.php" method="post">

<input type="hidden" name="CPF" value= "<?php echo $linha["CPF"];?>"/>


<p> Digite o nome </p>
<input type="text" name="nome" value="<?php echo $linha["CPF"];?>"/>
</p>

<p>
	<input type= "submit" value= "Atualizar"/>
</p>

</form>
</body>
</html>