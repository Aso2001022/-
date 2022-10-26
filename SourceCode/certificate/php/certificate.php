<?php session_start();
$my_result[] = $_SESSION['problem'];
foreach($my_result as $value){
    if($value == '1'){
        $sum = $sum + 1;
    }else{

    }
}
$sum = 10;

if($sum == 10){
    $a = "アルセウス"; //100点
    $b = "おめでとう！！"; //１００tコメント
}else if($sum >= 8){
    $a = "ガブリアス"; //80以上
    $b = "あと少し！！"; //80点以上の時のコメント
 }else if($sum >= 5){
    $a = "ピカチュウ"; //50以上
    $b = "まあまあかな"; //50以上の時のコメント
}else{
    $a = "コイキング"; //残り
    $b = "もっとがんばろう"; //残りコメント
}
?>


<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="style/style.css">
        <script src="script.js"></script>
        <title>certificate</title>
    </head>
    <body>
        <div class="certificate">
            <img src="syoujou.jpg"> 
            <?php echo "<p>てんすう", $sum * 10 ,"てん</p></br>"; ?>
            <?php echo "あなたのレベルは", $a ,"です</br>";?>
            <?php echo "<p>", $b ,"</p>";?>
            
        </div>
        <div class="button-onmore">
            <a href="a">もう一度</a>
        </div>
        <div class="button-title">
            <a href="b">タイトルへ</a>
        </div>
    </body>
</html>

