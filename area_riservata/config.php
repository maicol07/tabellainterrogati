 <?php
// avvio la sessione
session_start();

// Dati connessione al database
$db_host = 'localhost';        // Host - solitamente localhost
$db_utente = 'root';        // Nome utente del Database
$db_password = '';        // Password del Database
$db_nomedb = 'interrogati';     // Nome del Database

// Effettua la connessione al database
$dbh=mysql_connect ($db_host, $db_utente, $db_password) or die ('Errore nella stringa di connessione al database: '.mysql_error());
mysql_select_db($db_nomedb);
?> 