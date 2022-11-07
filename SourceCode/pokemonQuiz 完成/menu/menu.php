<!DOCTYPE html>
<html lang="ja" xmlns="http://www.w3.org/1999/html">
<head>
  <meta charset="UTF-8">
  <title>Title</title>
  <meta name = "viewport" content = "width=320,height=480,initial-scale=1.0,minimum-scale=1.0,maximum-scale=2.0,user-scalable=yes" />
  <link rel = "stylesheet" href = "css/menu.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body>

<div class="menu">

  <div class="aaa">

    <img src="img/1665113650243.png" style="width: 25vw;
    margin: -20px 0px -60px -10px;">

  </div>
  
  <img class="bbb" src="img/1665452722442.png" style="height: 10vw;
    width: 50vw;
    margin: 0 0 5vw 24vw;">

  <div class="lebel">
    <ul>

      <form action="http://aso2001017.babyblue.jp/pokemonQuiz/question/question.php" method="post">
        <input type="text" name="levelOfDifficulty" value="1" hidden>
        <li><button1 class="easy"><input type="submit" value="やさしい"></button></li>
      </form>

      <form action="http://aso2001017.babyblue.jp/pokemonQuiz/question/question.php" method="post">
        <input type="text" name="levelOfDifficulty" value="2" hidden>
        <li><button1 class="normal"><input type="submit" value="ふつう"></button1></li>
      </form>

      <form action="http://aso2001017.babyblue.jp/pokemonQuiz/question/question.php" method="post">
        <input type="text" name="levelOfDifficulty" value="3" hidden>
        <li><button1 class="difficult"><input type="submit" value="むずかしい"></button1></li>
      </form>

    </ul>
  </div>

  <audio id="bgm1" preload loop>
    <source src="new bgm.mp3" type="audio/mp3">
  </audio>
  <!-- 再生ボタン -->
  <button id="btn-play" type="button1"><i class="fas fa-play"></i></button>

  <script src="script/menu.js"></script>
</div>
</body>
</html>