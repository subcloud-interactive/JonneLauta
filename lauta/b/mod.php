<?php

  include('../../php/settings.php');
  include('./auth.php');

 ?>

<html>

  <head>
    <title> Moderation Panel | Authorized Personell Only! </title>
    <link rel="stylesheet" type="text/css" href="../../css/main.css" />
    <meta charset="utf-8" />
  </head>
  <body>

      <h1 style="text-align:center;"> Moderation Panel 1.0 </h1>
      <hr />
      <h2> Action: Delete Post </h2>
      <form action="delete_post.php">
        <input type="number" name="delete_postid"/>
        <input type="submit" value="Delete!"/>
      </form>
      <hr />

  </body>
</html>
