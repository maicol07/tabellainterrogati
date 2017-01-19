<html>
<body>
<table border="1">
        <tr>
                <td>Nome</td>
                <td> - </td> 
                <td>Cognome</td>
                <td> - </td> 
              <td>Italiano 1</td>
                <td> - </td> 
                <td>Storia 1</td>
                <td> - </td> 
                <td>Scienze 1</td>
                <td> - </td>
        </tr>
<?php
// Inserire i dati del database MySQL qui sotto
$db_connection= mysql_connect(HOST,USER,PASSWORD);
$db_selection = mysql_select_db(DB_NAME,$db_connection);

$query = mysql_query("SELECT * FROM Interrogati");
while($cicle=mysql_fetch_array($query)){
    echo " 
         <tr>
                <td>".$cicle['Nome']."</td>
                <td> - </td> 
                <td>".$cicle['Cognome']."</td> 
                <td> - </td> 
              <td>".$cicle['Ita1']."</td>
                <td> - </td> 
                <td>".$cicle['Sto1']."</td> 
                <td> - </td> 
                <td>".$cicle['Scie1']."</td>
                <td> - </td> 
          </tr>";
         }
?>
</table>
</body>
</html>
