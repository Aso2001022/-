<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>look over</title>
    <link rel="stylesheet" href="css/look over.css">
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
    for($i=1;$i<6;$i++) {
        echo "<div class='test'>
    <a  class='problem'href=''style='text-decoration:none;'>", $i, "もんめ</a>
<img class='pokemon'src='https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/15.png' >
  <p class='maru'>〇</p>
</div>";
    }

?>
    </li>
    <li>
    <?php
    for($i=6;$i<11;$i++){
        echo "<div class='test'>
    <a  class='problem'href=''style='text-decoration:none;'>",$i,"もんめ</a> 
<img class='pokemon'src='img/fu.png' ><p class='maru'>〇</p>

</div>";
    }


    ?>
    </li>
</ul>
<form action="">
<input type="image" class="ball"src="img/next.png" >
</form>
</body>
</html>
