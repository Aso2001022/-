<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>look over</title>
    <meta name="description" content="lookOverPage">
    <link rel="stylesheet" href="css/lookover.css">
</head>
<body>
<style type="text/css">
    body {
        background-color: #486d46;
        background-image: url("a.jpg");
        background-size: cover;
        background-attachment: fixed;
        background-position: center center;
    }
</style>
<header><img class="top" src="img/look%20over.img.png"></header>

<ul>
    <li>
    <?php
    $result = $_SESSION['Result'];
    $index = $_SESSION['index'];
    for($i=1;$i<6;$i++) {
        echo"<div class='test'>";
            echo"<a  class='problem'href=''style='text-decoration:none;'>", $i, "もんめ</a>";
            echo"<p id='index",$i,"' hidden>",$index[$i-1],"</p>";
            echo"<img class='pokemon' id='img",$i,"' src='' >";
            if($result[$i-1] == '〇'){
                echo '<p class="maru">〇</p>';
            }else{
                echo '<p class="batsu">×</p>';
            }
        echo"</div>";
    }

?>
    </li>
    <li>
    <?php
    for($i=6;$i<11;$i++){
        echo"<div class='test'>";
                echo"<a  class='problem'href=''style='text-decoration:none;'>",$i,"もんめ</a>";
                echo"<p id='index",$i,"' hidden>",$index[$i-1],"</p>";
                echo"<img class='pokemon' id='img",$i,"' src='' >";
                if($result[$i-1] == '〇'){
                    echo '<p class="maru">〇</p>';
                }else{
                    echo '<p class="batsu">×</p>';
                }
        echo"</div>";
    }


    ?>
    </li>
</ul>

<form action="http://aso2001017.babyblue.jp/pokemonQuiz/certificate/php/certificate.php" method="post">
    <input type="text" id="score" value="<?php echo $_SESSION['score'];?>" name="score" hidden>
    <button class="next" type="submit"><img class="ball" src="img/next2.png"></button>
</form>

<script src="./js/Poke.js"></script>

</body>
</html>
