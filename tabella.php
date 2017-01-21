<html>
<head>
<title>Tabella interrogati Pentamestre A.S. 2016/2017</title>
</head>
<body>
<h1 align=center>Tabella interrogati Pentamestre A.S. 2016/2017<h1>
<p><small>Grazie a questa tabella si potrà vedere chi è stato interrogato e così prevedere le future interrogazioni (utile nelle ore della Di Caprio).
Per segnalazioni di errori e/o richieste scrivere qui: <a href="https://github.com/maicol07/tabellainterrogati/issues">Github Issues></a> oppure inviare una email a <a href="mailto:maicolbattistini@live.it">maicolbattistini@live.it></a></small></p>
<table border="1">
        <tr>
			// Inserire di seguito le colonne della tabella (queste sono i nomi visibili delle celle)
                <td>N° REGISTRO</td>
                <td>Nome e Cognome</td>
              <td>Italiano Giro 1</td>
                <td>Storia Giro 1</td>
        </tr>
<?php
// Inserire i dati del database MySQL qui sotto (host,nomeutente,password);(database)
$db_connection= mysql_connect("localhost","root","pass");
$db_selection = mysql_select_db("tabellainterrogati",$db_connection);
$query = mysql_query("SELECT * FROM Interrogati");
while($cicle=mysql_fetch_array($query)){
    echo " 
         <tr>
			// Inserire i nomi delle colonne assegnate nella tabella del database. Queste corrisponderanno a quelle sopra
                <td>".$cicle['ID']."</td>
                <td>".$cicle['Nome_Cognome']."</td> 
              <td>".$cicle['ITA1']."</td>
                <td>".$cicle['STO1']."</td> 
          </tr>";
         }
?>
</table>
<p><small>Creatore: Battistini Maicol</small></p>
</body>
</html>
