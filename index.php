<?php

  // JonneLauta Software

  // Notes:
  // CSS To-Do

  // Copyright Veeti Simpanen 2020

  include("./php/settings.php");
  $huonoratkaisu = " | ";


?>

<html>
  <head>
    <title> <?php echo $config['LautaNimi']; echo $huonoratkaisu; echo $config['LautaVersio']; ?> </title>
    <link rel="stylesheet" type="text/css" href="./css/main.css" /> 
    <meta charset="utf-8" />
  </head>
  <body>
	  
 	<? echo $config['LautaNimi']; /* Alla näkyy miten nuo linkit pistetään */ ?>
	<br />
	<a href="./lauta/b/"> /b/ - Sekalainen </a> <!-- Tee A HREF elementti ja laita linkkiin ./lauta/LAUTA_KIRJAIN/. Sitten /LAUTA_KIRJAIN/ - LAUDAN_KUVAUS -->
	<br />
	  
  </body>
</html>
