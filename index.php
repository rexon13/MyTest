
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
        <a href = "login.php" class="">Войти</a>
     </div>
<div id="firstForm" style="width: 50%; margin: 10% auto; text-align: center;" class='col-12'>
    <form method="POST" action="main.php" class="needs-validation" novalidate>
    <h6>Выберите класс</h6>
    <div style="width: 95%; margin-left: 26%;"  class="form-row">
            <div class="col-2"> 
                <select name="numClass" class="form-control" required>
                        <option value="3">3</option>
                        <option value="4">4</option>
                </select>
            </div>
            <div class="col-2">
                <select name="literClass" class="form-control" required>
                        <option value="А">А</option>
                        <option value="Б">Б</option>
                        <option value="В">В</option>
                        <option value="Г">Г</option>
                        <option value="Д">Д</option>
                        <option value="Е">Е</option>
                </select>
            </div>
            <div class="col-2">
                <select name="GrupClass" class="form-control" required>
                        <option value="1">ИКТ 1</option>
                        <option value="2">ИКТ 2</option>
                </select>
            
            </div>
    </div>        
            <div class="col-6" style="margin: 1% auto;">
            <h6>Фамилия и имя</h6> <input type="text" id="" name="UserClass" class="form-control" required>
                <div class="invalid-feedback">
                Пожалуйста, введите фамилию
                </div>
            </div>
    
            <div class="col-12" style="margin: 1% auto;">
                <input type="submit" class="btn btn-success" value="Отправить" name="forUserName">
            </div>

    
    </form>
</div>


   <script src="main.js"></script> 
    </body>

</html>
