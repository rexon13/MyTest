<?php
require_once "Mylib.php";
$numClass = $_POST['numClass'];
$literClass = $_POST['literClass'];
$grupClass = $_POST['GrupClass'];
$UserClass = $_POST['UserClass'];


$sql = "SELECT id_theme, name_theme FROM question_theme WHERE class_theme = '$numClass'";

$qustion_theme = SQLData_Select($sql);


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
<div id="firstForm" style="width: 50%; margin: 10% auto; text-align: center;" class='col-12 row-12'>
    <form method="POST" action="question.php">
    <div style="margin: 1% auto;"  class="col-12 row-12">
    <h6>Вы зашли под учащимся <?=$numClass.$literClass." класса ".$UserClass?><br>   
    Выбирите тему урока</h6> 
    </div>
    <div class="col-12 row-12" style="margin: 1% auto;">
    <input type="hidden" value="<?=$numClass.$literClass?>" name="numLiterClass">
    <input type="hidden" value="<?=$grupClass?>" name="grupClass">
    <input type="hidden" value="<?=$UserClass?>" name="UserClass">
    <select class="form-control-sm" name="themeClass">
     
        <?php
                   foreach ($qustion_theme as $item_theme) {
           ?>

            <option value="<?=$item_theme['id_theme']?>"><?=$item_theme['name_theme']?></option>
       <?php
        }
       ?>     
    </select>
    </div>
    <div class="col-12 row-12" style="margin: 1% auto;">
    <input type="submit" class="btn btn-primary" value="Выбрать">
    </div>

    
    </form>
</div>
    
    </body>

</html>
