
<html>
	<head>
		<meta charset="utf-8">
		<title>Authentification</title>
	</head>
	<body>
		<form name="formulaire>" method="POST" action=<?php echo $_SERVER['PHP_SELF'] ?>>
			<p>Nom : <input type="text" name="nom"></p>
			<p>Mot de passe : <input type="password" name="pass"></p>
			<button type="submit">S'authentifier</button>
		</form>
		<?php
			function toTest($str){
				return htmlspecialchars(mb_strtolower(trim((string) $str),'utf-8'), ENT_QUOTES, "UTF-8");
			}
			
			if(
				array_key_exists('nom',$_POST) and isset($_POST['nom']) and trim($_POST['nom'])!=''
				and array_key_exists('pass',$_POST) and isset($_POST['pass']) and trim($_POST['pass'])!='' 
			)
			{
				if( toTest($_POST['nom'])==='test' and toTest($_POST['pass']==='test') )
					echo 'Authentification réussie !';
				else
					echo 'Echec lors de l\'authentification !';
			}
		?>
	</body>
</html>
