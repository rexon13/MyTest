<?php
date_default_timezone_set('Asia/Almaty');
require_once "Mylib.php";

$userClass = $_POST['UserClass'];
$numLiterClass = $_POST['numLiterClass'];
$grupClass = $_POST['grupClass'];
$AnswerQuestion = $_POST['queryClass'];
$themeClass = $_POST['themeClass'];



$answerRight = questionsAnswer($AnswerQuestion);

$ball = $answerRight['Ball'];
//var_dump ($answerRight);

?>
<html>
    <header>
        <title>
            Мой тест
        </title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="main.css">
    </header>
    <body>
<div id="firstForm" style="" class='col-12 row-12'>
    <form method="POST" action="main.php">
    <div style="margin: 1% auto;"  class="col-12 row-12">
    <h5>Вы набрали баллов <?=$answerRight['Ball']?> из <?=$answerRight['Allball']?> баллов</h5>  
   
      <?php
        foreach ($answerRight as $NotCorrectKey => $NotCorrectValue){
           if ($NotCorrectValue['class'] == "NotCorrectAnswer"){
            ?>
                   <div class="card text-black bg-danger">
            <h5 > На следубщие вопросы вы ответили не верно:</h5>
            <p><b>Вопрос: </b> <?=$NotCorrectValue['question']?><br>
                <b>Ответ пользователя: </b><?=$NotCorrectValue['answerUsersText']?><br>
                <b>Правельный ответ: </b><?=$NotCorrectValue['answerText']?><br>
                <b>Колличество баллов за ответ: </b><?=$NotCorrectValue['SummBall']?></p>
                   </div>
        <?php
           }
           if ($NotCorrectValue['class'] == "CorrectAnswer"){
               ?>
        <div class="card text-black bg-success">
               <h5> На следубщие вопросы вы ответили верно:</h5>
               <p><b>Вопрос: </b> <?=$NotCorrectValue['question']?><br>
                   <b>Правельный ответ: </b><?=$NotCorrectValue['answerText']?><br>
                   <b>Колличество баллов за ответ: </b><?=$NotCorrectValue['SummBall']?></p>
        </div>
               <?php
           }
        }
        ?>
        <?php
        $DTime = date('Y-m-d, H:m:i');
       $sqlAdd = "INSERT INTO results_app (FIO, Letter,Gr, dat_time, id_theme,ball) 
            VALUES ('$userClass', '$numLiterClass','$grupClass','$DTime','$themeClass','$ball')";
       if (SQLDataEdit($sqlAdd)){
           echo "Дата и время прхождения тестирования: $DTime. Данные успешно записаны в базу данных.";
       }
        ?>
    
                
    </div>
    
    

    
    </form>
</div>
    
    </body>

</html>
