<?php 

mb_internal_encoding("utf8");

$pdo = new PDO("mysql:dbname=php_lesson1; host=localhost;", "root","");

$pdo->exec("insert into 4each_keijiban(handlename, title, comments)values('".$_POST['handlename']."','".$_POST['title']."','".$_POST['comments']."');");

header("Location: http://localhost/keijiban/index.php");
                  

?>