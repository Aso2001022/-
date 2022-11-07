<?php

session_start();

?>

<?php 

//DB連携
$pdo = new PDO('mysql:host=mysql153.phy.lolipop.lan;
dbname=LAA1290604-school;charset=utf8',
'LAA1290604',
'VXAlMRfr2txeCr');

//ポストデータ
$id=$_POST['postId'];
$name=$_POST['postName'];

//SQL
$stmt = $pdo -> prepare("SELECT * FROM Pokemon WHERE id=?");
$stmt -> bindValue(1,$id,PDO::PARAM_INT);
$stmt -> execute();
$result = $stmt -> fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Answer</title>
    <meta name="description" content="answerPage">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>

    <?php 

        //図鑑番号登録
        $_SESSION['index'][$_SESSION['questionNum']-1] = $_POST['postId'];

    ?>

    <p id="questionNum" hidden><?php echo $_SESSION['questionNum'] ?></p>
    <p id="id" hidden><?php echo $_POST['postId']; ?></p>
    <p id="name" hidden><?php echo $_POST['postName'] ;?></p>

    <div class="silhouetteArea">
        
        <p class="result">
            <?php

                //正誤判定
                //正解
                if($result[0]['name']==$name){
                    echo'せいかい◎';
                    $_SESSION['score'] = $_SESSION['score']+10;
                    $_SESSION['Result'][$_SESSION['questionNum']-1] = '〇';
                }else{
                    //不正解 
                   echo'ふせいかい✕';
                    $_SESSION['Result'][$_SESSION['questionNum']-1] = '×';
                }

            ?>
        </p>
        <img src="" id="PokemonAnswerImg" alt="" class="silhouette">

    </div><br>
  
    <div class="profile">

        <button class="japanese"  onclick="japaneseButtonClick()"><img src="img/モンスターボール.png" alt="" class="monster-ball"></button>
        <button class="english" onclick="englishButtonClick()"><img src="img/マスターボール.png" alt="" class="master-ball"></button>

        <div id="japaneseText">

            <p id="JapaneseNumber"></p>
            <p id="JapaneseName"></p>
            <p id="JapaneseCategory"></p>
            <p id="JapaneseHeight"></p>
            <p id="JapaneseWeight"></p>

        </div>

        <div id="englishText" hidden>

            <p id="EnglishNumber"></p>
            <p id="EnglishName"></p>
            <p id="EnglishCategory"></p>
            <p id="EnglishHeight"></p>
            <p id="EnglishWeight"></p>

        </div>

    </div>

    <div class="detailProfile">

        <div id="JapaneseDetailProfile">

            <p id="JapaneseDetail"><?php echo $result[0]["ja_profile"];?></p>

        </div>

        <div id="EnglishDetailProfile" hidden>

            <p id="EnglishDetail"><?php echo $result[0]["en_profile"];?></p>

        </div>
        
    </div>

    <div class="nextBall">

        <form action="http://aso2001017.babyblue.jp/pokemonQuiz/question/question.php" method="post" id="Next">
            <input type ="image" name="submit" src="./img/Group 11.png" alt=" 送信" id="nextBall1">
        </form>

        <form action="http://aso2001017.babyblue.jp/pokemonQuiz/lookover/lookover.php" method="post" id="Result" hidden>
            <input type="text" id="score" value="<?php echo $_SESSION['score']; ?>" name="score" hidden> 
            <input type ="image" name="submit" src="./img/Group 12 (1).png" alt=" 送信" id="nextBall2">
        </form>

    </div>

    <ol id="pokedex"></ol>

    <?php 
        //問題数+1
        $_SESSION['questionNum'] = $_SESSION['questionNum'] + 1;
    ?>

    <script src="./js/script.js"></script>
    <script src="./js/pokeApi.js"></script>
    <script src="./js/backControl.js"></script>

</body>
</html>

