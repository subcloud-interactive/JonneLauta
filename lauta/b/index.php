<?php


  include("../../php/settings.php");
  
  $sql = "SELECT * FROM post_b"; // Huomio: Jokaiselle laudalle pitää olla oma table tietokannassa, esimerkiksi: post_b tai post_a.
  $result = $connection->query($sql);

?>
<html>
  
  <head>
    <title> <? echo $config['LautaNimi']; ?> </title>
    <link rel="stylesheet" type="text/css" href="../../css/main.css" />
  </head>
  <body>
    <h2 style="text-align:center;"> /b/ - Sekalainen </h2>
    <hr />
    <h4> Postaa laudalle: </h4> <br/>
    
    <br />
    <table>
      <tr>
        <th> Nimi </th>
        <th> Viesti </th>
        <th> Kuva </th>
      </tr>
      <?php
        // Hae tiedot tietokannasta
        if($result->num_rows > 0) {
          while($row = $result->fetch_assoc()){
           echo '<tr>';
             echo '<td> $row['Name']; </td>';
             echo '<td> $row['Post']; </td>';
             echo '<td> $row['Kuva']; </td>';
           echo '</tr>';
          }
        }
      ?>
    </table>
  </body>
</html>

