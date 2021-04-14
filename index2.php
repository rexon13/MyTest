<?php

$host = 'localhost';
$db   = 'mytest';
$user = 'root';
$pass = 'root';
$charset = 'utf8';
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$cnn = new PDO($dsn, $user, $pass);

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
            <option value="3А">3А</option>
            <option value="3А">3Б</option>
            <option value="3А">3В</option>
            <option value="3А">3Г</option>
            <option value="3А">3Д</option>
            <option value="3А">3Е</option>
        </select>
        <input type="submit" value="Отправить" name="fLog">
    </p>
</form>



<?php

if (isset($_POST['fLog'])) {


    $myArr['fio'] = $_POST['FIO'];
    $myArr['letter'] = $_POST['letter'];

   $sql = "SELECT id FROM results_app WHERE FIO = '" . $myArr['fio'] . "' ";

    $result = $cnn->query($sql);

    $id = $result->fetch()['id'];


?>



<?php
    for ($i=1;$i <= 10; $i++){
?>

    <form method="POST">
        <input type='hidden' name='id' value='<?=$id?>'>

       <input type='hidden' name='bbt' value='<?=$i?>'>
         <input type="submit" value="<?=$i?>" name="fBut">
     </form>
    <?php
    }
    }
?>

        <?php
    if (isset($_POST['fBut'])){
        $id = $_POST['id'];
        $balls_two = $_POST['bbt'];

            $sql = "UPDATE results_app SET balls_two='$balls_two', balls_total= (balls_total +'$balls_two')/2 WHERE id='$id'";
        $result_add = $cnn -> exec($sql);


    }
//}

    ?>

</body>
</html>
