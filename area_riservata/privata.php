<?php
// Includo la connessione al database
require('config.php');

// Se non è stata definita la variabile manda l'utente alla homepage
if(!isset($_SESSION['login']))
{
	echo "ERRORE! Nome utente o password sbagliati! Ritenta il login!";
    exit;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Area privata</title>
</head>

<body>
Pagina privata!<br />
<br />
<br />
<a href="logout.php">Logout</a><br />
</body>
</html>