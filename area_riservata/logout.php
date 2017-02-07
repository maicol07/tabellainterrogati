<?php
// Includo la connessione al database
require('config.php');

// Esegue il logout cancellando la sessione
session_destroy();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Logout</title>
</head>

<body>
Logout eseguito<br />
<a href="index.php">Vai all'index</a><br />
</body>
</html>