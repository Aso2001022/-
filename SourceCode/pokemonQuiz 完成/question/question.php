<?php
// セッション開始
session_start();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question</title>
    <meta name="description" content="answerPage">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<?php
    // セッション変数「levelOfDifficulty」が無い場合 難易度
if (!isset($_SESSION['levelOfDifficulty'])) {
    $_SESSION['levelOfDifficulty'] = $_POST['levelOfDifficulty'];
    echo '<p id="levelOfDifficulty" hidden>',$_SESSION['levelOfDifficulty'],'</P>';
}
// セッション変数「levelOfDifficulty」がある場合
else{
  // セッション変数の取得
    $levelOfDifficulty = $_SESSION['levelOfDifficulty'];
    echo '<p id="levelOfDifficulty" hidden>',$levelOfDifficulty,'</P>';
}

// セッション変数「questionNum」が無い場合 問題数
if (!isset($_SESSION['questionNum'])) {
    $_SESSION['questionNum'] = 1;
    echo '<p id="questionNum" hidden>',$_SESSION['questionNum'],'</P>';
}
    // セッション変数「questionNum」がある場合
else{
    // セッション変数の取得
    $questionNum = $_SESSION['questionNum'];
    echo '<p id="questionNum" hidden>',$questionNum,'</P>';
}

//scoreがない 得点
if (!isset($_SESSION['score'])) {
    $_SESSION['score'] = 0;
    echo '<p id="score" hidden>',$_SESSION['score'],'</P>';
}
    // セッション変数「score」がある場合
else{
    // セッション変数の取得
    $score = $_SESSION['score'];
    echo '<p id="score" hidden>',$score,'</P>';
}

//Result(〇,×)がない
$arrayResult = array('','','','','','','','','','');
if (!isset($_SESSION['Result'])) {
    $_SESSION['Result'] = $arrayResult;
    echo '<p id="Result" hidden>',$_SESSION['Result'][$_SESSION['questionNum']-1],'</P>';
}
    // セッション変数「Result」がある場合
else{
    // セッション変数の取得
    $Result = $_SESSION['Result'];
    echo '<p id="Result" hidden>',$Result[$_SESSION['questionNum']-1],'</P>';
}

//index(図鑑番号)がない
$arrayIndex = array('','','','','','','','','','');
if (!isset($_SESSION['index'])) {
    $_SESSION['index'] = $arrayIndex;
    echo '<p id="index" hidden>',$_SESSION['index'][$_SESSION['questionNum']-1],'</P>';
}
    // セッション変数「index」がある場合
else{
    // セッション変数の取得
    $Index = $_SESSION['index'];
    echo '<p id="index" hidden>',$Index[$_SESSION['questionNum']-1],'</P>';
}

?>

    <!--難易度(1:かんたん,2:ふつう,3:むずかしい)-->
    <label id="levelOfDifficulty" hidden><?php echo $_POST['levelOfDifficulty']?></label>
    <!--図鑑番号-->
    <p id="id" hidden></p>
    <?php
        if($_SESSION['questionNum']==1){

        }else{
            for( $i = 0; $i < $questionNum-1 ; $i++){
                echo "<p id='index",$i+1,"' hidden>",$Index[$i],"</p>";
            }
        }
    ?>

    <div id="silhouetteArea">
        <div id="square">
            <img src="" id="silhouette">
            <img src="./img/モンスターボール (1).png" id="ball1">
            <img src="./img/モンスターボール (1).png" id="ball2">
            <img src="./img/モンスターボール (1).png" id="ball3">
            <img src="./img/モンスターボール (1).png" id="ball4">
        </div>
    </div>

    <div id="iconArea">
        <img src="./img/1666755115285.png" id="icon">
    </div>

    <script>
        function check() {
            if(document.form1.postName.value==""){
                alert('なまえをにゅうりょくしてください。');
                return false;
            }
        }
    </script>

    <div id="answerArea">
        <p id="text">？？？？</p>
        <form action="	http://aso2001017.babyblue.jp/pokemonQuiz/answer/answer.php" method="post" name="form1" onSubmit="return check()">
            <input type="text" id="Num" value="" name="postId" hidden>
            <input type="text" id="textBox" maxlength="6" name="postName" autofocus  autocomplete="off">
            <input type ="image" name="submit" src="./img/toAnswer.png" alt=" 送信" id="toAnswer">
        </form>
    </div>

    <script src="./js/control.js"></script>
    <script src="./js/poke.js"></script>

</body>
</html>