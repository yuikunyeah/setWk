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
    echo "<h3>村一覧</h3><br>".file_get_contents("https://zinro.net/m/room_list.php");
    ?>
  </body>
</html>