<?php
session_start();
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
test
<?php
echo $_POST['score'];
echo '<br>';
$c=0;
for($i = 0 ; $i < 10 ; $i++){
    echo $c+1;
    echo ' ';
    echo $_SESSION['index'][$c];
    echo ' ';
    echo $_SESSION['Result'][$c];
    echo ' ';
    $c=$c+1;
    echo '<br>';
}
?>
<a href="	http://aso2001017.babyblue.jp/pokemonQuiz/menu/menu.php">ToMenu</a>
<?php session_destroy(); ?>
</body>
</html>