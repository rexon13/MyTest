<?php
require_once "Mylib.php";
$numLiterClass = $_POST['numLiterClass'];
$grupClass = $_POST['grupClass'];
$UserClass = $_POST['UserClass'];
$themeClass = $_POST['themeClass'];


$sql_qustion = "SELECT id, question,SummBall FROM questions WHERE theme = '$themeClass'";

$qustion_theme = SQLDataSelectQuery($sql_qustion);

$sqlTheme = "SELECT name_theme FROM question_theme WHERE id_theme = '$themeClass'";
$theme = SQLData_Select($sqlTheme);



?>
<html>
    <header>
        <title>
            Выбираем тест
        </title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="main.css">
    </header>
    <body>
<div id="firstForm" style="" class='col-12 row-12'>
    <form method="POST" action="answer.php">

    <input type="hidden" value="<?=$numLiterClass?>" name="numLiterClass">
    <input type="hidden" value="<?=$grupClass?>" name="grupClass">
    <input type="hidden" value="<?=$UserClass?>" name="UserClass">
    <input type="hidden" value="<?=$themeClass?>" name="themeClass">




    <div style="margin: 1% auto;"  class="col-12 row-12">
    Вы зашли под учащимся <?=$numLiterClass." класса ".$UserClass?>. Ответьте на следующие вопросы.<br>   
    Тема урока: <?=$theme[0]['name_theme']?>
    </div>
    <?php
    $i=1;
        foreach ($qustion_theme as $qustion => $item){
    ?>
            <h5><?=($item['question'])?> (<?=$item['SummBall']?>б)</h5>
    <?php
    
    
        $sql_answer = "SELECT A, B, C, D FROM questions WHERE id = '".$item['id']."'";
        $qustion_answer = SQLDataSelectQuery($sql_answer);


        $answer_qustion = mShuffleAssoc($qustion_answer[0]);

           //var_dump($answer_qustion);

              foreach ($answer_qustion as  $key => $answer){

        
    ?>
    <div class="card col-12 row-12" style="margin: 1% auto;">

        <label><input type="radio" name="queryClass[<?=$item['id']?>]" value='<?=$key?>' required>
        <?=$answer?></label>
        
    </div>
        <?php
        }
        
            }
        ?>
    <div class="col-12 row-12" style="margin: 1% auto;">
    <input type="submit" class="btn btn-outline-success" value="Ответить">
    </div>

    
    </form>
</div>
    
    </body>

</html>
