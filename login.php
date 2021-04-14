<?php
require_once "Mylib.php";

if (isset($_POST['formLogin'])){
    if (login($_POST['login'],$_POST['pwd'])){
        header("Location: admin.php");
    }
}

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
    <div>
        <a href = "../" class="">Назад</a>
     </div>
<div id="firstForm" style="width: 50%; margin: 10% auto; text-align: center;" class='col-12 row-12'>
    <form method="POST">
    <div style="margin: 1% auto;"  class="col-6 row-6">Введите логин  <input type="text" name="login" class="form-control" required>
    </div>
    <div class="col-6 row-6" style="margin: 1% auto;">
    Введите пароль <input type="password" name="pwd" class="form-control" required>
    </div>
    <div class="col-12 row-12" style="margin: 1% auto;">
    <input type="submit" class="btn btn-outline-success" value="Войти" name="formLogin">
    </div>

    
    </form>
</div>
    
    </body>

</html>
