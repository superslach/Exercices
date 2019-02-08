
<html>
	<head>
		<meta charset="utf-8">
		<title>Sélection multiple</title>
	</head>
	<body>
		<?php
			$table = array("Sports", "Musique", "Jeux", "Voyages");

			echo "<form method='get'>";
			for ($i = 0; $i < sizeof($table); $i++){
				echo '<input type="radio" name="loisir" value='.$table[$i].'>'.$table[$i].'';
			}
				echo '<input type="submit" name="submit" value="Valider" />';
			echo '</form>';
		
		
			if(isset($_GET['submit'])){
				if(isset($_GET['loisir'])){
					echo "votre loisir favori est : ".$_GET['loisir'];
				}
			}
		?>
	</body>
</html>

