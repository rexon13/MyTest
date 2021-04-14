<?php

require_once "connect.php";
//yArr = [];


?>
<html>
<head>
    <title>Вопросы</title>
    <meta charset="UTF-8">
</head>
<body>

<form method="POST">
    <p>Введите фамилию и имя <input type="text" name="FIO">
        Выберите класс  <select name="letter">
            <option value="4А">4А</option>
            <option value="4Б">4Б</option>
            <option value="4В">4В</option>
            <option value="4Г">4Г</option>
            <option value="4Д">4Д</option>
        </select>

        Выберите группу <select name="Gr">
            <option value="1">ИКТ1</option>
            <option value="2">ИКТ2</option>
        </select>

        <input type="submit" value="Отправить" name="fLog">
    </p>
</form>



<?php

if (isset($_POST['fLog'])){



    $myArr['fio'] = $_POST['FIO'];
    $myArr['letter'] = $_POST['letter'];
    $myArr['Gr'] = $_POST['Gr'];

    $sql = "SELECT * FROM questions WHERE letter = ".substr($myArr['letter'],0,1)." ";

    $result = $cnn -> query($sql);
    ?>
    <form method="POST">
        <?php
        $i = 0;
        foreach ($result as $item){
            echo "<hr>";
            echo "<h5>{$item['question']}</h5>";
            echo "<input type='radio' id='answer' name='{$i}answer' value = 'A' >" ;
            echo "<label for='answer'>{$item['answerA']}</label>";
            echo "<br>";
            echo "<input type='radio' id='answer' name='{$i}answer' value = 'B'>";
            echo "<label for='answer'>{$item['answerB']}</label>";
            echo "<br>";
            echo "<input type='radio' id='answer' name='{$i}answer' value = 'C'>";
            echo "<label for='answer'>{$item['answerC']}</label>";
            echo "<br>";
            echo "<input type='radio' id='answer' name='{$i}answer' value = 'D'>";
            echo "<label for='answer'>{$item['answerD']}</label>";
            echo "<input type='hidden' name='{$i}answer_right' value='{$item['answer_right']}'> ";
            echo "<input type='hidden' name='{$i}question' value='{$item['question']}'> ";

              echo "<input type='hidden' name='{$i}answered' value='{}'> ";

            echo "<input type='hidden' name='{$i}Sball' value='{$item['SummBall']}'> ";
            echo "<input type='hidden' name='item' value='{$i}'> ";
            echo "<input type='hidden' name='fio' value='{$myArr['fio']}'> ";
            echo "<input type='hidden' name='letter' value='{$myArr['letter']}'> ";
            echo "<input type='hidden' name='Gr' value='{$myArr['Gr']}'> ";

            $i++;
        }



        ?>
        <input type="submit" value="Отправить" name="fOtv">
    </form>
    <?php
}

if (isset($_POST['fOtv'])){


    for ($item = 0; $item <= $_POST['item'];$item++){
        if ($_POST[$item.'answer'] == $_POST[$item.'answer_right']){
            $balls = $balls + $_POST[$item.'Sball'];
        }
    } /*else {
        echo "Верный ответ на вопрос ". $_POST[$item.'question'];
        echo "<br>";*/
    //}

    //  print_r($myArr);

    $fio = $_POST['fio'];
    $letter = $_POST['letter'];
    $Gr = $_POST['Gr'];
    echo " Вы набрали $balls баллов";

    $sql_add = "INSERT INTO results_app (FIO, Letter,Gr, balls_one, balls_two, balls_three,balls_total) 
VALUES ('$fio', '$letter','$Gr', '$balls','0','0','$balls')";

    $result_add = $cnn -> exec($sql_add);



}
?>
</body>
</html>
