<?php
// Includo la connessione al database
require('config.php');


// Se il modulo viene inviato...
if(isset($_POST['registra']))
{
    
    // Dati Inviati dal modulo
    $user = (isset($_POST['user'])) ? trim($_POST['user']) : '';    // Metto nella variabile 'user' il dato inviato dal modulo, se non viene inviato dò di default ''
    $pass = (isset($_POST['pass'])) ? trim($_POST['pass']) : '';    // Metto nella variabile 'pass' il dato inviato dal modulo, se non viene inviato dò di default ''
    $mail = (isset($_POST['mail'])) ? trim($_POST['mail']) : '';    // Metto nella variabile 'mail' il dato inviato dal modulo, se non viene inviato dò di default ''
    
    // Filtro i dati inviati se i magic_quotes del server sono disabilitati per motivi di sicurezza
    if (!get_magic_quotes_gpc()) {
        $user = addslashes($user);
        $pass = addslashes($pass);
        $mail = addslashes($mail);
    }
    
    
    // Controllo il Nome Utente
    if(strlen($user) < 4 || strlen($user) > 12)
        die('Nome Utente troppo corto, o troppo lungo');
    // Controllo la Password
    elseif(strlen($pass) < 4 || strlen($pass) > 12)
        die('Password troppo corta, o troppo lunga');
    // Controllo l'email
    elseif(!eregi("^[a-z0-9][_\.a-z0-9-]+@([a-z0-9][0-9a-z-]+\.)+([a-z]{2,4})", $mail))
        die('Email non valida');
    // Controllo il nome utente non sia già occupato
    elseif(mysql_num_rows(mysql_query("SELECT user FROM utenti WHERE user = '$user' LIMIT 1")) == 1)
        die('Nome Utente non disponibile');
    // Controllo l'indirizzo email non sia già registrato
    elseif(mysql_num_rows(mysql_query("SELECT mail FROM utenti WHERE mail = '$mail' LIMIT 1")) == 1)
        die('Questo indirizzo email risulta gi&agrave; registrato ad un altro utente');
    // Registrazione dell'utente nel database
    else
    {
        
        // Crypt della password per garantire una miglior sicurezza
        $pass = md5($pass);
        
        // Query per l'inserimento dell'utente nel database
        $strSQL = "INSERT INTO utenti (user,pass,mail)";
        $strSQL .= "VALUES('$user', '$pass', '$mail')";
        mysql_query($strSQL) OR die("Errore 003, contattare l'amministratore ".mysql_error());
        
        // Reindirizzo l'utente ad una pagina di conferma della registrazione
        header('Location: registrato.php');
        exit;
    }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registrazione</title>
</head>

<body>
<form action="" method="post">
 <input name="user" type="text" id="user" value="Nome Utente" onfocus="if(this.value=='Nome Utente') this.value='';" /><br />
 <input name="pass" type="password" id="pass" value="Password" onfocus="if(this.value=='Password') this.value='';" /><br />
 <input name="mail" type="text" id="mail" value="Em@il" onfocus="if(this.value=='Em@il') this.value='';" /><br />
 <input name="registra" type="submit" value="Registrati" /><br />
</form>
</body>
</html>