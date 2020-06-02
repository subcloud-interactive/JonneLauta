<?php

  /*
  
       _                        _                 _        
     | |                      | |               | |       
     | | ___  _ __  _ __   ___| |     __ _ _   _| |_ __ _ 
 _   | |/ _ \| '_ \| '_ \ / _ \ |    / _` | | | | __/ _` |
| |__| | (_) | | | | | | |  __/ |___| (_| | |_| | || (_| |
 \____/ \___/|_| |_|_| |_|\___|______\__,_|\__,_|\__\__,_|
  
  
  
  
  */
  

  // COPYRIGHT Subcloud Interactive 2020

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
	  
 	<?php echo $config['LautaNimi']; /* Alla näkyy miten nuo linkit pistetään */ ?>
	<br />
	<a href="./lauta/b/"> /b/ - Sekalainen </a> <!-- Tee A HREF elementti ja laita linkkiin ./lauta/LAUTA_KIRJAIN/. Sitten /LAUTA_KIRJAIN/ - LAUDAN_KUVAUS -->
	<br />
	  
  </body>
</html>
