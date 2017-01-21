<html>
<head>
<meta charset="utf-8" />
<title>Tabella interrogati 2A Pentamestre A.S. 2016/2017</title>
</head>
<body style="color: rgb(0, 0, 0); background-color: rgb(255, 255, 204);"
alink="#000099" link="#000099" vlink="#990099">
<title>Tabella interrogati 2A Pentamestre A.S. 2016/2017</title>
<h1 style="font-weight: bold; font-family: Century;" align="center">Tabella interrogati 2A Pentamestre A.S. 2016/2017</h1>
<span style="font-family: Century;">Grazie a questa tabella si potrà vedere chi è stato interrogato e così prevedere le future interrogazioni (utile nelle ore della Di Caprio).
Per segnalazioni di errori e/o richieste scrivere qui: </span><a style="font-family: Century;" href="https://github.com/maicol07/tabellainterrogati/issues">Github
Issues </a><span style="font-family: Century;">oppure inviare una email a </span><a style="font-family: Century;" href="mailto:maicolbattistini@live.it">maicolbattistini@live.it</a>
<table border="1">
        <tr>
			<!-- Inserire di seguito le colonne della tabella (queste sono i nomi visibili delle celle) -->
                <td>N° REGISTRO</td>
                <td>Nome e Cognome</td>
              <td>Italiano Giro 1</td>
                <td>Storia Giro 1</td>
        </tr>
<?php
// Inserire i dati del database MySQL qui sotto (host,nomeutente,password);(database)
$db_connection= mysql_connect("HOST,""USERNAME","PASSWORD");
$db_selection = mysql_select_db("DB_NAME",$db_connection);
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
<span style="font-family: Century;">Creatore: Battistini Maicol</small></span>
</body>
</html>
