<form method="POST">
    <p>  Выберите класс  <select name="letter">
            <option value="3А">3А</option>
            <option value="3А">3Б</option>
            <option value="3А">3В</option>
            <option value="3А">3Г</option>
            <option value="3А">3Д</option>
            <option value="3А">3Е</option>
        </select>
        <input type="submit" value="Отправить" name="tRes">
    </p>
</form>
<?php

if (isset($_POST['tRes'])){

    $host = 'localhost';
    $db   = 'mytest';
    $user = 'root';
    $pass = 'root';
    $charset = 'utf8';
    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $letter = $_POST['letter'];
    $cnn = new PDO($dsn, $user, $pass);

    $sql = "SELECT * FROM results_app WHERE letter = ".substr($letter,0,1)." ";

    $result = $cnn -> query($sql);

    foreach ($result as $item){

        echo $item['FIO'] . "-" .$item['balls_total'];

    }

}
?>
