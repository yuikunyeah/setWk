<!doctype html>
<html>
  <head>
 <meta name="description" content="人狼Onlineの12世代が送る人狼Onlineを楽しんでもらうためのwikiです。">
    <meta name="keywords" content="zinro,zinroOnline,wiki,12sedai">
    <meta charset="utf-8">
    <meta name="title" content="人狼Online12世代wiki">    
    <link rel="stylesheet" href="maindesign.css">
    <script src="mainscript.js"></script>
    <title>人狼Onlineツールボックス<?php echo $_SERVER["REQUEST_URI"]; ?></title>
  </head>
  <body>
    <h2 class="title">
      人狼Onlineツールボックスー<?php echo substr($_SERVER["REQUEST_URI"],1); ?>
    </h2>
    <?php
    echo "<h3>村一覧</h3>(urlではありません)<br>".file_get_contents("https://zinro.net/m/room_list.php");
    ?>
  </body>
</html> 