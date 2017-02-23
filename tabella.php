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
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
 <!--Import Initialization script(this contains mobile menu and jQuery)-->
  <script src="js/init.js"></script>
  <nav>
    <div class="nav-wrapper">
      <a href="https://github.com/maicol07/tabellainterrogati" class="brand-logo"><img src="icon.png">Tabella interrogati</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse">
	    <i class="material-icons">menu</i>
	  </a>
      <ul class="right hide-on-med-and-down">
        <li><a href="https://github.com/maicol07/tabellainterrogati">Pagina del progetto</a></li>
        <li><a href="https://github.com/maicol07/tabellainterrogati/issues">Segnala un problema e/o richiedi una funzionalità</a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="https://github.com/maicol07/tabellainterrogati">Pagina del progetto</a></li>
        <li><a href="https://github.com/maicol07/tabellainterrogati/issues">Segnala un problema e/o richiedi una funzionalità</a></li>
      </ul>
    </div>
  </nav>
<h3 style="font-weight: bold; font-family: Century;" align="center">Tabella interrogati 2A Pentamestre A.S. 2016/2017</h3>
<div align="center">
<script language="Javascript" type="text/javascript">
// Copyright: www.web-link.it 
<!--  
function aprifinestra()
{
weblink=window.open("popup.php","Feed RSS Changelog Tabella","width=500,height=500,left=125,top=125"); 
}
//  -->
</script>
<a href="javascript:aprifinestra();" class="waves-effect waves-light btn" align="center"><i class="material-icons left">new_releases</i>Visualizza registro modifiche e novità</a>
</div>
<div style="margin-left:20px; margin-right:20px">
<span style="font-family: Century;">Grazie a questa tabella si potrà vedere chi è stato interrogato e così prevedere le future interrogazioni.
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
		<th data-field="price">Matematica Giro 1</th>
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
		<td>".$cicle['MATE1']."</td>
          </tr>";
         }
?>
</tbody>
</table>
<p><small>Creatore: <a href="http://www.github.com/maicol07">Battistini Maicol (mai</a>
Collaboratori: <a href="http://www.github.com/Pyromir">Aouioua Emir W.</a></small></p>
</div>
</body>
</html>
