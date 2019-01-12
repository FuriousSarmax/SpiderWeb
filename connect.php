<?php 
include('config.php');
$db = mysql_connect($server, $username, $password); // Задаем функцию подключения к бд
mysql_select_db($database,$db);  // выбираем к какой бд необходимо подключаться
echo "Подключение к БД прошло успешно<br>"; //выводим текст о успешном подключении к бд

//Подключаемся к бд, затем задаем переменной t_si_c функцию создания базы данных и исполняем ее
mysql_select_db($database, $db);
$t_si_c = "CREATE TABLE SiteConfig (option_id int(3), option_name varchar(50), option_value varchar(244) )";
mysql_query($t_si_c,$db);
echo "Таблица SiteConfig успешна создана<br>";

$id_1 = "INSERT INTO SiteConfig (option_id, option_name, option_value) VALUES ('1', 'SiteTitle', '$sitetitle')";
$id_2 = "INSERT INTO SiteConfig (option_id, option_name, option_value) VALUES ('2', 'Title', '$title')";
$id_3 = "INSERT INTO SiteConfig (option_id, option_name, option_value) VALUES ('3', 'About', '$about')";
mysql_query($id_1,$db);  
mysql_query($id_2,$db);  
mysql_query($id_3,$db);  
echo "Данные Title, About и SiteTile успешни записаны<br>";
*/
$t_content_c = "CREATE TABLE Content (id TEXT(1000), time DATETIME(), rating TEXT(10000), tags TEXT(500), name TEXT(300), story TEXT(1000000) )";
mysql_query($t_content_c,$db);


mysql_query("CREATE TABLE Content(
id INT NOT NULL AUTO_INCREMENT, 
PRIMARY KEY(id),
time TIMESTAMP(14),
rating TEXT(10000),
tags TEXT(500),
name TEXT(300),
story TEXT(1000000) 
 CHARACTER SET utf8 COLLATE utf8_general_ci 
) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci")
 or die(mysql_error());  
echo "Content!";


include('close-connection.php'); 
echo "Подключение к MySql БД закрыто<br>";
echo "Установка успешно завершена";

mysql_select_db($database,$db) or die ('<br>Выбор БД не произошел: ' .mysql_error());
echo "<br>Подключение к БД прошло успешно<br>"; 
?>