<!doctype html>
<html>
  <head>
 <meta name="description" content="人狼Onlineの12世代が送る人狼Onlineを楽しんでもらうためのwikiです。">
    <meta name="keywords" content="zinro,zinroOnline,wiki,12sedai">
    <meta charset="utf-8">
    <meta name="title" content="人狼Online12世代wiki">    
    <link rel="stylesheet" href="maindesign.css">
    <title>人狼Online12世代wiki<?php echo $_SERVER["REQUEST_URI"]; ?></title>
  </head>
  <body>
    <header class="header">
        <h2 class="title">
        人狼Online12世代wiki   
        </h1>
      <nav>
      <ul>
           <li><a href="/home">home</a></li>
        <li><a href="/credit">クレジットと作成者</a></li>
        <li><a href="https://zinro.net/m/">人狼Onlineへアクセス</a></li>
        <li><a href="/discussion">議論場</a></li>
        <input type="text"placeholder="記事を検索" class="search" id="search">
        <span class="subSh" id="subSh">検索</span>
        <li><a href="/archives">項目別アーカイブ</a></li>
        <li><a href="/pages">おすすめの記事一覧</a></li>
        <?php
        if($_COOKIE["log"] == "writer"){ 
          echo '<li><a href="/login?pass=writing">編集</a></li>';
        }else
          echo '<li><a href="/login">ログイン</a></li>';
        ?>
      </ul>
      </nav>
    </header>
    <div class="body">
      <br>
    <h2>
      人狼Online12世代wikiーログイン
    </h2>
      <?php
      if($_POST["pass"] == NULL){
      if($_COOKIE["log"] == "writer"){ 
          header("Location: https://online12thwiki.glitch.me/home");
      }
      if($_COOKIE["log"] == NULL){
          echo 'パスワードを入力<br><form action="/login" method="POST"><input type="password" class="pass" name="pass"  placeholder="エンターで送信"required></form>';}
      }else{
        if(hash("sha256",$_POST["pass"] === "73c4b6b82de4834feb8352d23f1feda58247c219525b7c6bb281df4574c1488c")){
          header("Location: https://online12thwiki.glitch.me/home");
          setcookie("log","writer",time()+60*60*24*30);
        }
          if(hash("sha256",$_POST["pass"] !== "73c4b6b82de4834feb8352d23f1feda58247c219525b7c6bb281df4574c1488c")){
          echo 'パスワードが違います。<br><form action="/login" method="POST"><input type="password" class="pass" name="pass"  placeholder="エンターで送信"required></form>';
        }
      }
      ?>
    </div>
  </body>
      <script src="mainscript.js"></script>
</html> 