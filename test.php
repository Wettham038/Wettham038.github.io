<!DOCTYPE html>
<html>
<head>
<title>PHP Begin!</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Formulier</h1>
<h2>Gegevens</h2>

<?php

echo fopen("tekst.txt", "r");

echo fread(fopen("tekst.txt", "r"), filesize("tekst.txt"));

/*$myfile = fopen("tekst.txt", "r") or die ("Unable to open file!");
echo fread($myfile, filesize("tekst.txt"));*/

?>
</body>
</html>