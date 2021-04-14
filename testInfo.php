<div id="firstForm" style="text-align: center;" class='col-12 row-12'>
    <h5>Добро пожаловать</h5>
</div>
<form method="POST">


    Выберите класс: <select class="form-control" name="SelectInfoResult">
        <?php
        $sql = "SELECT DISTINCT Letter FROM results_app";
        $SelectLetters = SQLData_Select($sql);



        foreach ($SelectLetters as $key => $value){
            ?>
            <option value="<?=$value['Letter']?>"><?=$value['Letter']?></option>
            <?php
        }
        ?>

    </select>
    <input type="submit" name="SelectInfo" value="Выбрать">
</form>

<?php
if (isset($_POST["SelectInfo"])) {
    $selectLetter = $_POST["SelectInfoResult"];
    $sqlSelect = "SELECT * FROM results_app WHERE letter = '$selectLetter'";
    $SelectData = SQLData_Select($sqlSelect);

?>
    <table border="1">
        <th>№</th><th>ФИО</th><th>Класс</th><th>Группа</th><th>Дата</th><th>Баллы</th>
    <?php
    foreach ($SelectData as $item => $value){
    ?>
        <tr>
            <td><?=$i+=1?></td>
            <td><?=$value['FIO']?></td>
            <td><?=$value['Letter']?></td>
            <td><?=$value['Gr']?></td>
            <td><?=$value['dat_time']?></td>
            <td><?=$value['ball']?></td>
        </tr>
        <?php
    }
    }

?>
    </table>