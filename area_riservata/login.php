<?php
// Includo la connessione al database
require('config.php');


// Se il modulo viene inviato...
if(isset($_POST['login']))
{
    
    // Dati Inviati dal modulo
    $user = (isset($_POST['user'])) ? trim($_POST['user']) : '';    // Metto nella variabile 'user' il dato inviato dal modulo, se non viene inviato dò di default ''
    $pass = (isset($_POST['pass'])) ? trim($_POST['pass']) : '';    // Metto nella variabile 'pass' il dato inviato dal modulo, se non viene inviato dò di default ''
    
    // Filtro i dati inviati se i magic_quotes del server sono disabilitati per motivi di sicurezza
    if (!get_magic_quotes_gpc()) {
        $user = addslashes($user);
        $pass = addslashes($pass);
    }
    
    // Crypto la password e la confronto con quella nel database
    $pass = md5($pass);
    
    // Controllo l'utente esiste
    $query = mysql_query("SELECT id FROM utenti WHERE user = '$user' AND pass = '$pass' LIMIT 1");
    
    // Se ha trovato un record
    if(mysql_num_rows($query) == 1)
    {
        // prelevo l'id dal database
        $login = mysql_fetch_array($query);
        
        // Creo una variabile di sessione
        $_SESSION['login'] = $login['id'];
        
        // reindirizzo l'utente
        header('Location: privata.php');
        exit;
    }
    // se non esiste da l'errore
    else
        die('Nome Utente o Password errati');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
</head>

<body>
<form action="" method="post">
 <input name="user" type="text" id="user" value="Nome Utente" onfocus="if(this.value=='Nome Utente') this.value='';" /><br />
 <input name="pass" type="password" id="pass" value="Password" onfocus="if(this.value=='Password') this.value='';" /><br />
 <input name="login" type="submit" value="Login" /><br />
</form>
</body>
</html>