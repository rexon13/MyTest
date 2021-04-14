<?php

function SQLData_Select($sql){
$host = 'localhost';
$db   = 'mytest';
$user = 'root';
$pass = 'root';
$charset = 'utf8';
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$cnn = new PDO($dsn, $user, $pass);

$result = $cnn -> query($sql);
return $result->fetchAll();

}

function SQLDataSelectQuery($sql){
    $host = 'localhost';
    $db   = 'mytest';
    $user = 'root';
    $pass = 'root';
    $charset = 'utf8';
    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    
    $cnn = new PDO($dsn, $user, $pass);
    
    $result = $cnn -> query($sql)->fetchAll(PDO::FETCH_ASSOC);

    $myArr = $result;
    
    return $myArr;
    
    }


function SQLDataEdit($sql){

$host = 'localhost';
$db   = 'mytest';
$user = 'root';
$pass = 'root';
$charset = 'utf8';
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$cnn = new PDO($dsn, $user, $pass);

$result = $cnn -> exec($sql);
return $result;
}


function mShuffleAssoc($array) {
    $keys = array_keys($array);

    shuffle($keys);

    foreach($keys as $key) {
        $new[$key] = $array[$key];
    }

    $array = $new;

    return $array;
}


function questionsAnswer($arrNumQestion){

/**
 * Наименования ответов 
 * Павельные ответы
 * Колличесво баллов за каждый ответ
 * Сумма баллов
 * 
 */
   // $answerArray[];

    $sql = "SELECT id,question,A,B,C,D,answer_right,SummBall FROM questions WHERE id IN (".implode(',',array_keys($arrNumQestion)).")";
    $AllQuestion = SQLDataSelectQuery($sql);
    $i=0;
    foreach ($AllQuestion as $key => $value){
       
        foreach ($arrNumQestion as $k => $v){
            
            if (($value['id'] == $k) AND ($value['answer_right'] != $v)){

                
                $answerArray[$i]["question"] = $value['question'];
                $answerArray[$i]["answerRight"] = $value['answer_right'];
                $answerArray[$i]["answerText"] = $value[$value['answer_right']];
                $answerArray[$i]["SummBall"] = $value['SummBall'];
                $answerArray[$i]["answerUsers"] = $v;
                $answerArray[$i]["answerUsersText"] =  $value[$v];
                $answerArray[$i]["class"] = 'NotCorrectAnswer';

                $answerArray[$i]["SummBall"] = $value['SummBall'];

            }

            if (($value['id'] == $k) AND ($value['answer_right'] == $v)){

                $ball = $ball + $value['SummBall'];
               
                $answerArray[$i]["question"] = $value['question'];
                $answerArray[$i]["answerRight"] = $value['answer_right'];
                $answerArray[$i]["answerText"] = $value[$value['answer_right']];
                $answerArray[$i]["class"] = 'CorrectAnswer';

                
               $answerArray[$i]["SummBall"] = $value['SummBall'];
            }

        }
        $i++;
        $Allball = $Allball + $value['SummBall'];
        
    }
    $answerArray["Ball"] = $ball;
    $answerArray["Allball"] = $Allball;
  /*  $correctAnswer;
    $nameQuestion;
    $summBall;*/
    
  // return $answerArray;

  return $answerArray;

}


function login ($login,$pwd){

   $sqlLogin = htmlspecialchars(trim($login));
   $sqlPwd = htmlspecialchars(trim($pwd));



   $sql = "SELECT * FROM users WHERE login = '$sqlLogin'";

   $UserLogin = SQLData_Select($sql);

   if ($UserLogin == false){
       $massage =  "Данный пользователь не зарегистрирован";
   }

  if ($UserLogin){
     if (password_verify($sqlPwd,$UserLogin[0]['pwd'])){
         return true;
     }

   } else {

       return false;
   }

}
