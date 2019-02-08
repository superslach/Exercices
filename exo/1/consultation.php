<html>
<head>
    <meta charset= "utf-8">
	<title>formulaire</title>
</head>
<body>
<p>Consultation de : </p>
<ul>
  <li><?php echo '<a href=etatCivil.php?prenom='.$_GET['prenomPers'].'&nom='.$_GET['nomPers']?>>votre état civil</a></li>
  <li><?php echo '<a href=adresse.php?adresse='.$_GET['adressePers'].'&ville='.$_GET['villePers'].'&cp='.$_GET['cp']?>>votre adresse</a></li>
</ul>
</body>
</html> 
