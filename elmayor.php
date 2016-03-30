<html>
<head>
	<title></title>
</head>
<body>
	<form method="post">
		<input type="text" name="uno"><br>
		<input type="text" name="dos"><br>
		<input type="text" name="tres"><br>
		<input type="submit" name="elmayor">
		<input type="submit" name="sumador" value="Sumador">
	</form>
	<?php
		var_dump($_POST);
		$nuno=$_POST['uno'];
		$ndos=$_POST['dos'];
		$ntres=$_POST['tres'];

		if (ISSET($_POST['elmayor'])){

			if ($nuno>$ndos && $nuno>$ntres) {
				echo "<h1>$nuno</h1>";
			}

			if ($ndos>$nuno && $ndos>$ntres) {
				echo "<h1>$ndos</h1>";
			}

			if ($ntres>$ndos && $ntres>$nuno) {
				echo "<h1>$ntres</h1>";
			}
		}
		echo "<br>";
		if (ISSET($_POST['sumador']))
			
			echo $nuno+$ndos+$ntres;

	?>

</body>
</html>