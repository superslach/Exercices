<html>
<head>
    <meta charset= "utf-8">
	<title>formulaire</title>
</head>
<body>
<h1>Résultats du test</h1>
</body>
</html>

<?php
$numero = $_GET['num'];
$nombre1 = $_GET['nbr1'];
$nombre2 = $_GET['nbr2'];

if ($nombre1 < $numero && $numero < $nombre2){
    print("<p style=color:green> $numero est-il compris entre $nombre1 et $nombre2 ?</p>");
    print("<p style=color:red> Oui, $numero est compris entre $nombre1 et $nombre2 </p>");
}
else if ($nombre2 < $numero && $numero < $nombre1){
    print("<p style=color:green> $numero est-il compris entre $nombre2 et $nombre1 ?</p>");
    print("<p style=color:red> Oui, $numero est compris entre $nombre2 et $nombre1 </p>");
}
else{
    print("<p style=color:green> $numero est-il compris entre $nombre1 et $nombre2 ?</p>");
    print("<p style=color:red> Non, $numero n'est pas compris entre $nombre1 et $nombre2 </p>");
} 
