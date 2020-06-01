<?php
  
  $config['Palvelin'] = "localhost"; //Tietokantasi Hosti esim: localhost tai 127.0.0.1
  $config['TietokantaKäyttäjä'] = "Tietokannan Käyttäjä"; //Tietokantasi Käyttäjänimi (esim. root)
  $config['TietokantaSalasana'] = "Tietokannan Salasana"; //Tietokantasi salasana.
  $config['Tietokanta'] = "Tietokannan Nimi"; //Tietokantasi nimi.
  $config['LautaNimi'] = "Laudan Nimi"; //Tähän tulee lautasi nimi.
  $config['LautaVersio'] = "Laudan Versio"; //Vaihda aina kun päivität lautaasi. Vinkki: Kannattaa aloittaa versiosta 0.1
  $config['LautaURL'] = "https://example.com/"; //Lautasi *KOKO* URL osoite. Esim: https://example.com/ (HUOM: käytä https protokollaa, jos sinulla on SSL, muissa tapauksissa käytä HTTP.)
  
  
  
  // Automaattinen Yhdistys (HUOM: Älä muuta näitä!):
  
  $conn = mysqli_connect($Palvelin, $TietokantaKäyttäjä, $TietokantaSalasana, $Tietokanta);
  
  
  
?>
