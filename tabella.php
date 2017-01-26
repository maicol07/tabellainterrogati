<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<!--Import Google Icon Font-->
<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!--Import materialize.css-->
<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
<!--Let browser know website is optimized for mobile-->
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Tabella interrogati 2A Pentamestre A.S. 2016/2017</title>
</head>
<body style="color: rgb(0, 0, 0);"
alink="#000099" link="#000099" vlink="#990099">
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<h3 style="font-weight: bold; font-family: Century;" align="center">Tabella interrogati 2A Pentamestre A.S. 2016/2017</h3>
<span style="font-family: Century;">Grazie a questa tabella si potrà vedere chi è stato interrogato e così prevedere le future interrogazioni (utile nelle ore della Di Caprio).
Per segnalazioni di errori e/o richieste scrivere qui: </span><a style="font-family: Century;" href="https://github.com/maicol07/tabellainterrogati/issues">Github
Issues </a><span style="font-family: Century;">oppure inviare una email a </span><a style="font-family: Century;" href="mailto:maicolbattistini@live.it">maicolbattistini@live.it</a>
<table border="1"; class="responsive-table, striped">
		<thead>
		<tr>
              <th data-field="id">N° REGISTRO</th>
              <th data-field="name">Nome e cognome</th>
              <th data-field="price">Italiano Giro 1</th>
			  <th data-field="price">Storia Giro 1</th>
			  <th data-field="price">Scienze Giro 1</th>
          </tr>
        </thead>
		<tbody>
<?php
// Inserire i dati del database MySQL qui sotto (host,nomeutente,password);(database)
$db_connection= mysql_connect("HOST","USERNAME","PASSWORD");
$db_selection = mysql_select_db("DB_NAME",$db_connection);
$query = mysql_query("SELECT * FROM Interrogati");
while($cicle=mysql_fetch_array($query)){
    echo " 
         <tr>
                <td>".$cicle['ID']."</td>
                <td>".$cicle['Nome_Cognome']."</td> 
              <td>".$cicle['ITA1']."</td>
                <td>".$cicle['STO1']."</td> 
				<td>".$cicle['SCIE1']."</td>
          </tr>";
         }
?>
</tbody>
</table>
<p><small>Creatore: Battistini Maicol</small></p>
</body>
</html>
