<!doctype html>
<html>
  <head>
    <link rel="stylesheet" href="maindesign.css">
    <script src="mainscript.js"></script>
    <title>人狼Onlineツールボックス<?php echo $_SERVER["REQUEST_URI"]; ?></title>
  </head>
  <body>
    <h2 class="title">
      人狼Onlineツールボックスー<?php echo substr($_SERVER["REQUEST_URI"],1); ?>
    </h2>
    <?php
    echo getJson("https://zinro.net/m/api?mode=rooms");
    ?>
  </body>
</html>