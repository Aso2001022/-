<?php session_start();

if($_SESSION['score'] == 100){
    $a = "アルセウス"; //100点
    $b = "おめでとう！！"; //１００tコメント
}else if($_SESSION['score'] >= 80){
    $a = "ガブリアス"; //80以上
    $b = "あと少し！！"; //80点以上の時のコメント
 }else if($_SESSION['score'] >= 50){
    $a = "ピカチュウ"; //50以上
    $b = "まあまあかな"; //50以上の時のコメント
}else{
    $a = "コイキング"; //残り
    $b = "もっとがんばろう"; //残りコメント
}
 $score = $_SESSION['score']
?>



<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="../css/style.css">
        <script src="script.js"></script>
        <title>certificate</title>
    </head>
    <body>
        <div class="certificate-100">
            <style type="text/css">
    	     body {
 		background-color: #486d46;
       		background-image: url("syoujou.jpg");
        	background-size: cover;
        	background-attachment: fixed;
        	background-position: center center;
    }
</style>
	<div class="outer">
   	
            <?php echo '<p class="1">てんすう', $score ,'てん</p>'; ?>
            <?php echo '<p class="2">あなたのレベルは', $a ,'です<p>';?>
            <?php echo '<p class="3">', $b ,'</p>';?>

	</div>
        </div>
        <div class="button-onmore">            <a href="http://aso2001017.babyblue.jp/pokemonQuiz/menu/menu.php">もう一度</a>
        </div>
        <div class="button-title">
            <a href="http://aso2001017.babyblue.jp/pokemonQuiz/Top/Top1.html">タイトルへ</a>
        </div>
        <?php session_destroy(); ?>
    </body>
</html>


