<?php
$xt=[
'x'=><<<'M'
<a id="y"></a>
пожалуй язык Smarty нашел бы здесь где развернуться<br>
M
,


#M0
'x1'=><<<'M1'
<a id="y1"></a>
<img src="ajax.png" alt="" width=55 align="right">
PHP - Hypertext Processor<br>
идентификатор. сценарий.<br>
Sublimetext 3<br>
Ctrl+[<br>
Ctrl+] добавить/убрать отступ<br>
// камент в стиле С<br>
where `yar` is not null // где отличие от null<br>
С версии 5.5 вместо mySQL юзает mysqli<br>
# камент в стиле unix bash<br>
чувство регистра<br>
$a=$b=1;// аналог $a=1; $b=1;<br>
\$ - доллар экранировано в одинарных кавычках<br>
phpversion() - версия 5.5.38
M1
.' или '.(phpversion())
,
'x2'=><<<'M2'
<a id="y2"></a>
Неслайдер<br>
27.07.2019<div class="kod">
&lt;?php<br>
header ("Content-Type: text/html; charset=utf-8");<br>
$a=array('1.png','2.png','3.png');<br>
$b=count($a);<br>
$i = (isset($_GET['k'])) ? $_GET['k'] : 1;<br>
if (isset($_GET['add']))$i=$i+(int)$_GET['add'];<br>
$i=($i%$b+$b)%$b;<br>
?&gt;<br>
&lt;!DOCTYPE html&gt;&lt;html lang="ru"&gt;<br>
&lt;body&gt;<br>
&lt;?php echo "&lt;h1&gt;$a[$i]&lt;/h1&gt;"; ?&gt;<br>
&lt;form method='get' action=''&gt;<br>
&lt;input type='hidden' name='k' value='&lt;?=$i?&gt;'&gt;<br>
&lt;input type='submit' name='add' value='-1'&gt;<br>
&lt;button type='submit' name='add' value='1'&gt;+1&lt;/button&gt;<br>
&lt;/form&gt;&lt;/body&gt;&lt;/html&gt;</div>
// через адр строку<br>
// эта страница<br>
// если поставить + то уродует get запрос
M2
,
'x3'=><<<'M3'
<a id="y3"></a>
<a href="https://cyberduck.io/">www.cyberduck.ch</a> - FTP клиент, Веб-сервер <img src="duck.ico" alt=""><br>
c:\php - папка с php<br>
Путь в системные переменные<br>
cmd - и в ней набери<br>
cd c:\php<br>
php -S localhost:8000<br>
Это стартует сервер-веб, встроенный в php<br>
Должен ответить<div class="kod">
PHP7.1.8 Development Server Started at Mon Aug 21 22.28.10 2017<br>
listeting on http://localhost:8000<br>
Document root is c:\php press Ctrl-C to quit</div>
php -version<div class="kod">
PHP 7.1.8 (cli)(built: Aug 1 2017)<br>
(NTS MSVC14 (Visual C++ 2015) x86)<br>
Copyright (c) 1997-2017 The PHP Group Zend Engine v3.1.0 Copyright (c) 1998-2017 Zend Technologies</div>
M3
,
#M4
'x5'=><<<'M5'
<a id="y5"></a>
<img src="bret.png" alt="" align="right" width=53>
Бретт Маклафлин<br>
22.08.2017<br>
стр.42 I приложение<br>
Глюк: в консоли cmd вместо русских букв - пробелы!<br>
Буду избегать юзания русских букв.<br>
M5
,
'x6'=><<<'M6'
<a id="y6"></a>
is_int(x)<br>
Типы переменных<br>
<table class="t292"><tr><td>
int</td><td> целое</td><td> -2147483648<br> +2147483647</td></tr><tr><td>
double </td><td> веществ</td><td> </td></tr><tr><td>
string </td><td> </td><td> </td></tr><tr><td>
array </td><td> массив, <br>список</td><td> </td></tr><tr><td>
object </td><td> </td><td> </td></tr><tr><td>
bool </td><td> логич</td><td> true, false</td></tr><tr><td>
link </td><td> ссылка</td><td> </td></tr>
</table>

is_nuimeric() - число<br>
gettype($x) - вернет строку с описанием переменной<br>
"integer"...."boolean" - значение<br>
resource - ресурс, запрос MySQL<br>
NULL - не инициализирована<br>
unknown type -  определить не удалось<br>
Инициализация:<div class="kod">
$a=50*($c=7)*$c;// аналог $c=7; $a=50*$c*$c;</div>
M6
,
'x7'=><<<'M7'
<a id="y7"></a>

Open Server 5.2.2<br>
24.8.17<br>
<img src="xoy.png" alt="">Хауди Хо<br>
<table class="t292"><tr><td>Basic 237Мб</td></tr>
</table>
<img src="flag.png" alt="" class="fg" align="left"> Запустить<br>
Невозможно занять порт 3306 поскольку он уже  используется mysqld.exe<br>
Сбой запуска!<br>
Лезу в настройки OpenServer и меняю порт MySQL на 3309.<br>
<img src="flag.png" alt="" class="fg" style="background: green;" align="right">
в браузер ввожу: localhost<br>
вуаля! Страница отобразилась!<br>
Open Server Panel работает:-)<br>
21:41 Apach<br>
Иди в папку c:\OSPanel\domains и создай там папку test.ru<br>
Там создай index.html с каким-нибудь содержимым. Перезапусти Open Server. В браузере набери:<br>
http://test.ru [Enter]
15:57 Должен отобразиться твой html. Теперь удаляй html и создавай index.php<br>
M7
,
'x8'=><<<'M8'
<a id="y8"></a><div class="kod">
&lt;?php<br>
echo 'Привет друг!'<br>
?&gt;</div>
В адресной строке браузера опять http://test.ru [Enter]
26:37 Вуаля. отобразился php!<br>
1:07:00 Ветвление<div class="kod">
if ($name=='A')<br>
{echo 'Привет!';}<br>
else<br>
{echo 'Ты кто?';}</div>

1:09:00&lt;,&gt;,&lt;=,&gt;=,==,!=<br>
операторы сравнения<br>
and or<br>
1:10:00 логические условия<div class="kod">
if($a&gt;=25 and $a&lt;=75)</div>
1:13 циклы, переменная цикла<br>
for ---- <div class="kod">for ($i=0; $i&lt;10; $i=$i+1){}</div>
while ---- <div class="kod">while(true){}</div>
foreach ---- <div class="kod">foreach($i as $k){echo $k.'&lt;br&gt;';}</div>
перебирает массив $i   можно break<br>
M8
,
'x9'=><<<'M9'
<a id="y9"></a>
Разница между апострофом и кавычками<div class="kod">
&lt;?php<br>
$a=100;<br>
echo $a; // 100<br>
echo 'test $a&lt;br&gt;';// $a<br>
echo "test $a";// 100</div>
100<br>
test $a<br>
test 100<br>
Апостроф - текст<br>
Кавычки - переменные<br>
1:26:00<br>
Функции<br>
abs echo abs(-30); // 30<br>
round echo round(50.35); // 50<br>
ceil  echo ceil(50.11); //51<br>
floor echo float(50.99);// 50<br>
rand echo rand(0,100)// 51<br>
min, max echo min(5,7,10,106); //5<div class="kod">
function big_biger($a,$b)<br>
{if($a&gt;$b){echo $a;}else{echo $b;}<br>
echo '&lt;br&gt;';}// use: big_biger(10,20)//20</div>
return $a; После ретурна код не исполняется<br>
M9
,
'x10'=><<<'M10'
<a id="y10"></a>
Конкатенация<br>
Оператор точка<div class="kod">
echo $a.' '$b;</div>
Ещё точка отделяет десятичную часть числа 50.11<br>
M10
,
'x11'=><<<'M11'
<a id="y11"></a>
Учим PHP за 1 час &gt; Часть 2<br>
<a href="https://www.youtube.com/watch?v=vJRL_MKoX9M">https://www.youtube.com</a><br>
Работа с СУБД<br>
<img src="flag.png" class="fg2" alt="">-&gt;Дополнительно-&gt;PhpMyAdmin<br>
Пользователь: root<br>
Пароль: &lt;нету&gt;<br>
127.0.0.1/OpenServer/phpmyadmin/index.php<br>
Дефолтов нет. Даже Амиго заходил<br>
Защита от самого себя<br>
Сервер 127.0.0.1:3309<br>
Тема: pmahomme<br>
Раздел: Базы данных. Три по умолчанию, они системные<br>
имя, кодировка(сравнение utf8_general_ci), создать<br>
База данных test_db<br>

<table class="t292"><tr><td>

Таблица articles</td><td>имя</td><td>тип</td><td>n-значность</td><td>По умолч</td><td>Сравнение</td><td>Атрибут</td><td>Null</td><td>Индекс</td><td>AI</td><td>Камент</td></tr><tr><td>
уникальный</td><td>id</td><td>int</td><td>11</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr><td>
имя статьи</td><td>title</td><td>varchar</td><td>255</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr><td>
текст статьи</td><td>text</td><td>text</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr><td>
категория</td><td>categoria</td><td>int</td><td>11</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr><td>
дата публикации</td><td>public</td><td>DATETIME</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr><td>
Просмотров</td><td>view</td><td>int</td><td>11</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr><td>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr><td>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></table>


[сохранить]
#1089 - некорректная часть ключа<br>

! Ошибка запроса<br>
#1075 - некорректное определениие таблицы. Может существовать только один автоинкрементный столбец и он должен быть определен как ключ.<br>
M11
,
'x12'=><<<'M12'
<a id="y12"></a>

На вкладке Структура<br>
пречислены все поля Нажми <img class="key2" alt=""> и где-то там ещё пока к имени поля 'id' не добавятся два ключа <img class="key1" alt=""><img class="key3" alt=""> Что будет означать что поле первичное и ключевое. Потом делай его Автоинкремент. Жми <img class="key0" alt=""> (редактировать) и ставь галочку Autoincrement<br>
OSPanel\userdata\MySQL5.6\phote ---БД<br>
db.opt 1кб<br>
fote.frm 9кб<br>
fote.ibd 112кб<br>
M12
,
'x13'=><<<'M13'
<a id="y13"></a>
Вкладка Вставить. Добавляет строки (записи) в таблицу.<br>
<table class="t292">
<tr><td> id</td><td>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td> </td></tr> 
<tr><td> title</td><td></td><td style="background: yellow;"> Что мы делаем?</td></tr> 
<tr><td> text</td><td> </td><td style="background: yellow;"> Бла бла бла</td></tr> 
<tr><td> cate</td><td> </td><td> </td></tr> 
<tr><td> publi</td><td> </td><td style="background: yellow;"> 2017.01.01</td></tr> 
<tr><td> view</td><td> </td><td style="background: yellow;"> 0</td></tr> 
</table>

Заполняем эти поля и радуемся<br>
M13
,
'x14'=><<<'M14'
<a id="y14"></a>
Таблица каммента (3) coment<br>


<table class="t292">
<tr><td> id</td><td> INT</td><td> 11</td><td> </td><td> primary</td></tr>
<tr><td> autor</td><td> varechar</td><td> 100</td><td> Null</td><td> </td></tr>
<tr><td> text</td><td> text</td><td> </td><td> </td><td> </td></tr>
<tr><td> public</td><td> DATATIME</td><td> </td><td> </td><td> </td></tr>
<tr><td> id2</td><td> INT</td><td> 11</td><td> </td><td> </td></tr>
</table>
M14
,
'x15'=><<<'M15'
<a id="y15"></a>
<b>C</b>rud<br>
41:22<br>
create<br>
read<br>
update<br>
delete<div class="kod">
INSERT INTO `cate` (`name`) #имя таблицы  поле<br>
VALUES ('Природа'); # имя создаваемой категории<br>
структура SQL</div>
Поле дата заполняется функцией NOW()<br>
Используем язык SQL<br>
on duplicate key update - гибрид создания и редактирования <a href="#y89">см.89</a><br>
M15
,
'x16'=><<<'M16'
<a id="y16"></a>
c<b>R</b>ud<div class="kod">
SELECT * FROM art // выбрать все поля с таблицы</div><hr><div class="kod">
SELECT id,title,view FROM art // только поля</div><hr><div class="kod">
SELECT * FROM arti WHERE `title`='Охота'</div>
Сортировка по колву просмотров<br>
SELECT *FROM arti ORDER BY view<br>
-'-'-'-'-'-'-'-'-'--'-'--'-' DESC LIMIT - ограничить колво результатов <br>
OFFSET - для пагинации 1-10 на 1-ую страницу на 2-ой 11-20 и т.д.<br>
1:00:00<br>
WHER - ORDER-LIMIT Последовательность<br>
M16
,
'x17'=><<<'M17'
<a id="y17"></a>
cr<b>U</b>d<br>
1:01:00<div class="kod">
UPDATE `art` SET `title`='План чего' WHERE id=2;</div>
Меняет название поля записи, т.е. название статьи<div class="kod">
UPDATE `arti` SET `view`=60 WHERE id=2;</div>
Задал колво просмотров для строки 2<br>
,`title`='upda'<br>
M17
,
'x18'=><<<'M18'
<a id="y18"></a>
cruD<br>
1:06:00<div class="kod">
DELETE FROM `arti` WHERE id=7</div><br>
или так<div class="kod">
id=7 OR id=8</div>
или так<div class="kod">
`fext`='fafa' AND `view`=0</div>
M18
,
'x19'=><<<'M19'
<a id="y19"></a>
Подключение БД<br>
10.9.2017<div class="kod">
&lt;?php<br>
$cu=mysqli_connect("127.0.0.1","root","","test_db");// имя бд<br>
if (!$cu){<br>
	echo 'kino ne budet';<br>
	exit;<br>
}
?&gt;</div>
***<br>
Связь PHP с СУБД   <img src="xoy.png" alt="" width=20><sup>ауди Хо</sup><br>
connect <br>
название сервера '127.0.0.1'<br>
имя юзера root<br>
пароль<br>
имя БД test_db<br>

die() // убить скрипт<br>
exit<br>
exit()<br>
mysqli_connect<br>
mysqli_query - вернет сущность<div class="kod">
$r=mysqli_query($cu,"SELECT * FROM `arti`");<br>
$r1=mysqli_fetch_assoc($r); // вернёт одну запись<br>
print_r($r1); // вывод записи<br>
while (($i=mysqli_fetch_assoc($r)))// пройти по всем записям<br>
{print_r($i);<br>
echo '&lt;br&gt;';}<br>
mysqli_close($cu) // закрыть соединение с БД</div>
M19
,
'x20'=><<<'M20'
<a id="y20"></a>
Вывод инфы с БД в виде списка &lt;ul&gt;<br>
26.08.2017<div class="kod">
&lt;ul&gt;<div class="q">
&lt;?php<div class="q">
while (($i=mysqli_fetch_assoc($r)))<div class="kod">
echo 'li'.$i[title].'&lt;/li&gt;';</div></div>
?&gt;</div>
&lt;/ul&gt;</div>
* темные круги<br>
* что мы делаем<br>
M20
,
'x21'=><<<'M21'
<a id="y21"></a>21<br>
mysqli_num_rows($r)<br>
колво запишет в результате<div class="kod">
$n=mysqli_query($cu,"SELECT * FROM `arti` WHERE `cate`=".$i['id'])<br>
$n=mysqli_query($cu, #беру сущность<br>
"SELECT COUNT('id') AS `total` FROM `arti` WHERE `cate`=".$i['id']);<br>
$n2=mysqli_fetch_assoc($n);<br>
 из сущности получаю запись<br>
print_r($n2); exit(); вывод записи, выход</div>
нетрадиционный способ<br>
Array([count(*)]=&gt;1)<br>
страйк по производительности слабый<br>
$i - ассоциативный массив<br>
M21
,
'x22'=><<<'M22'
<a id="y22"></a>
Даты в PHP<br>
это UNIX<br>
Имеется в гугле<br>
[] - необязательный аргумент<br>
() - обязательный аргумент<br>
echo date();<br>
date('d.m.Y')<br>
01-12,4 цифры<br>
H - часы 24-часов.формат<br>
i - минуты<br>
s - секунды<br>
Y - Вай<br>
ТаймСтамп TimeStamp - эпоха UNIX<br>
1970.01.01  секунды прошедшие<br>
$t=strtotime('2014-12-10 14:00:00');<br>
$d=time()-$t;<br>
echo(($d/60)/60/)/24);// разница между датами<div class="kod">
const OP='24-06-2019';// Акция, попадание даты в акцию<br>
if (date('d-m-Y')==OP) echo "Привет, друг!";</div>
M22
,
'x23'=><<<'M23'
<a id="y23"></a>
Формы Action - путь к php файлу<div class="kod">
&lt;form method='POST' action='/handl.php'&gt;<br>
&lt;input type='text' name='log'&gt;<br>
&lt;input type='text' name='pass'&gt;<br>
&lt;input type='submit' value='Отправить'&gt;<br>
&lt;/form&gt;</div>
Суперглобальный массив<br>
$_GET<br>
$_POST<div class="kod">
<fieldset><legend>handle.php</legend>
&lt;?php print_r($_POST); ?&gt;</fieldset></div>
Array([log]=&gt;'god' [password]=&gt;'123')<br>
ассоциативный массив Ассоциативный<br>
include('includes/db.php');<br>
C:\OSPanel\domains\test.ru\includes<br>
у клиента<br>
form inet<br>
на сервере<br>
hand<br>
db<br>
M23
,
'x24'=><<<'M24'
<a id="y24"></a>
handl.php<br>
Обработчик action формы<br>
$pass=$_POST['pass'];<div class="kod">
$count=mysqli_query($connection,"SELECT * FROM `users` WHERE `login`=$login AND `pass`=$pass");</div>
// обязательно двойные, чтобы раскрыть переенные<br>
интерполяция<br>
M24
,
'x25'=><<<'M25'
<a id="y25"></a><div class="kod">
Warning mysqli_num_rows() expects parametr 1 to be mysqli_result, object given in<br>
c:\OSPanel\domains\test.ru\handle.php on line 10</div>

if mysqli_num_rows($count)==0){}<br>
У хо тоже =)<br>
Нужны апострофы (одиннарные кавычки) у $log и $pass<br>
Лол, а у меня опечатка была SELET вместо SELECT<br>
boolean<br>
M25
,
'x26'=><<<'M26'
<a id="y26"></a>
Ручной запрос в БД<br>
27,08,2017<br>
Иди в phpmyadmin. Всвою базу и на вкладку SQL.<br>
В поле текстовое введи запрос типа, который хочешь проверить на ошибки и жми [Вперед]
Ошибки будут показаны внизу на розовом фоне.<br>
Либо сбоку текстового поля 
<img src="krest.ico" alt="">
<br>

Конфигурационный файл<div class="kod">
&lt;?php<br>
$cfig=arry(<br>
'title'=&gt;'блог шефа',<br>
'dl'=&gt;array(<br>
'server'=&gt;'localhost',<br>
'username'=&gt;'root',<br>
'password'=&gt;'',<br>
'name'=&gt;'test_blog')<br>
);<br>
?&gt;</div>
M26
,
'x27'=><<<'M27'
<a id="y27"></a>
Корень проекта<br>
Подключение файла php<br>
include просто подключает<br>
include_once одиночное подкл<br>
require если файл ненайден то скрипт убьется<br>
require_once если был подключен, то не подключит<br>
once - чтобы дважды не подключился<br>
16:36<br>
includes/config.php<div class="kod">
&lt;?php # конфиг подключ к index.php<br>
require "includes/config.php";<br>
?&gt;</div><br><div class="kod">
&lt;title&gt;&lt;?php echo $config[title];?&gt;&lt;/title&gt;</div>
href="/" - ведет на главную страницу<br>
target=_blank - откроет в новом окне<br>
23:48<br>
сайдбар<br>
M27
,
'x28'=><<<'M28'
<a id="y28"></a>
&lt;img src=i:/ty.png'&gt;<br>
абсолютный путь. В php не отобразится картинка.<br>
В html - отобразится<br>
Для php лучше указать относительный путь<br>
&lt;img src='pu.png'&gt;<br>
M28
,
'x29'=><<<'M29'
<a id="y29"></a>
mb_substr()- режет строку<br>
(x,0,50,'utf-8')<br>
первые 50 символов<br>
strip_tags() - выстригает теги<br>
$at_['text'] текст статьи<br>
M29
,
'x30'=><<<'M30'
<a id="y30"></a>
Превращение сущности в массив<div class="kod">
$c=mysqli_query($cu,#пихаю в сущность всю таблицу<br>
"SELECT * FROM `arti`");<br>
$a=array();#создал массив<br>
while ($i=mysqli_fetch_assoc($c))#цежу сущности<br>
{$a[]=$i;#добавляю в массив запись<br>
}</div>

$art_cat=false;<div class="kod">
foreach ($a as $i){#перебор массива<br>
	if $i['id']==$j['cate'])#номер категории совпал с ним же<br>
	{$art_cat=$i;#запись присвоил<br>
	break;#выход<br>
	}<br>
}</div>
M30
,
'x31'=><<<'M31'
<a id="y31"></a>
Футер 48:37<div class="kod">
&lt;?php echo $art_cat['title']; ?&gt;</div><br><div class="kod">
&lt;a href="/articles.php?cate=&lt;?php echo $art_cat['id'];?&gt;"&gt;&lt;/a&gt;</div><br><div class="kod">

&lt;a href="/articles.php?cate=7"&gt;B&lt;/a&gt;// категория безопасность</div><br><div class="kod">

$art=mysqli_query($cu,// вернет 5 самых просмотриваемых статей сайта<br>
"SELECT * FROM `arti`<br>
ORDER BY `view`<br>
DESC LIMIT 5");</div>

Футер в отдельный файл Аватарка с помощью сервера Граватар<br>
MD5<br>
echo md5($i['email']); ?&gt;<div class="kod">
$art=mysqli_query($cu,// вернет страницу по номеру<br>
"SELECT *FROM `arti`<br>
WHERE `id`=".(int)$_GET;'id'); // защита от взлома</div>
M31
,
'x32'=><<<'M32'
<a id="y32"></a>
Увеличить колво прсмотров статьи<div class="kod">
mysqli_query($cu,<br>
"UPDATE `arty` SET `view`=`view`+1<br>
WHERE `id`=".(int)$art['id']);</div>

Возобновление формы<br>
value<br>
SQL инъекция<br>
затычка Пагинатор Пагинатор<br>
стайлинг css<br>
M32
,
'x33'=><<<'M33'
<a id="y33"></a>
Пустой массив?<div class="kod">
if (empty($a))</div> проверка пустой ли массив<br>
M33
,
'x34'=><<<'M34'
<a id="y34"></a>
Путь к БД<br>
c:\OSPanel\userdata\MySQL-5.6\test_db<br>
Тут находится таблица твоей базы<br>
<table class="t292">
<tr><td> arti.fm</td><td> 9Кб</td></tr>
<tr><td> arti.ibd</td><td> 112Кб</td></tr>
<tr><td> cate.frm</td><td> 9Кб</td></tr>
<tr><td> cate.ibd</td><td> 96Кб</td></tr>
<tr><td> coment.frm</td><td> 9Кб</td></tr>
<tr><td> coment.ibd</td><td> 96Кб</td></tr>
<tr><td> db.opt</td><td> 1Кб</td></tr>
<tr><td> </td><td> </td></tr>
</table>

IBD -MySQL InnoDB Database Table<br>
Формат создан Oracle<br>
FRM Datbase Format File<br>
OPT Database data File<br>
userdasta\MySQL-5.6\auto.cnf<br>
M34
,
'x35'=><<<'M35'
<a id="y35"></a>
Парсер<div class="kod">
&lt;div style="background-color:#eee;<br>
padding: 20px;<br>
border: blue solid 3px;"&gt;<div class="q">
&lt;?php<br>
echo '&lt;br&gt;&lt;h2&gt;<br>
&lt;font color=blue&gt;';<br>
$h=file_get_content(// всю страницу взял<br>
'http://www.example.com/');<br>
preg_match(// нашел все подстроки по регулярке<br>
'/&lt;title&gt;(.*?)&lt;^\/title&gt;/is',<br>
$h,$t);<br>
echo $t[1];// вывести один из совпадений<br>
echo '&lt;/font&gt;&lt;/h2&gt;';<br>
?&gt;</div>
&lt;/div&gt;</div>
M35
,
'x36'=><<<'M36'
<a id="y36"></a>
Смена кодировки<br>
2.9.2017<br>
1) Есть текстовый txt формата ANSI Windows-1251<br>
2) Скрипт php, utf-8<br>
Задача вывести в документ из txt<div class="kod">
$h=file_get_contents('file.txt');#читаю файл<br>
preg_match(/onclick="shaFiln(.*?)#регулярка парсит текст в массив<br>
&lt;/is',$h,$t);<br>
echo iconv("window-1251","utf-8",# перекодировка и вывод<br>
$t[1].'&lt;br/&gt;';</div>
i - любой регистр<br>
M36
,
'x37'=><<<'M37'
<a id="y37"></a>
Обновить<div class="kod">
&lt;a href="index.php"&gt;Вот&lt;/a&gt;</div>
Обновит страницу, обнулив все поля ввода не тронет get-запрос<br>
M37
,
#M38
'x39'=><<<'M39'
<a id="y39"></a>
SELECT * FROM b;

Таблица b<table class="t292">
<tr><td>I </td><td>juk </td></tr>
<tr><td>5 </td><td>NULL </td></tr>
<tr><td>7 </td><td>NULL </td></tr>
<tr><td>7 </td><td>NULL </td></tr>
<tr><td>0 </td><td>NULL </td></tr>
<tr><td>NULL </td><td>NULL </td></tr>
<tr><td> </td><td> </td></tr>
</table>
SELECT COUNT('I') FROM b;

<table class="t292">
<tr><td>count(`i`) </td></tr>
<tr><td>4 </td></tr>
</table>

SELECT min(`I`) FROM b;

<table class="t292">
<tr><td>min(`I`) </td></tr>
<tr><td>0 </td></tr>
</table>
SELECT max(`I`) AS x FROM b;<br>


<table class="t292">
<tr><td>x </td></tr>
<tr><td>7 </td></tr>
</table>
SELECT max(`I`) AS x, min(`I`) AS y FROM b;<br>
<table class="t292">
<tr><td>X </td><td>Y </td></tr>
<tr><td>7 </td><td>0 </td></tr>
</table>
SELECT i,5*i AS y FROM b;<br>
<table class="t292">
<tr><td>i </td><td>y </td></tr>
<tr><td>5 </td><td>25 </td></tr>
<tr><td>7 </td><td>35 </td></tr>
<tr><td>7 </td><td>35 </td></tr>
<tr><td>0 </td><td>0 </td></tr>
<tr><td>NULL </td><td>NULL </td></tr>
</table>
M39
,
'x40'=><<<'M40'
<a id="y40"></a>
Форма get<br>
10.9.2017
<div class="kod">
&lt;table&gt;<br>
&lt;form action="" method="get"&gt;<div class="q">
&lt;tr&gt;<br>
&lt;td&gt;<br>
&lt;input type='text' name='nom'&gt;<br>
&lt;/td&gt;<br>
&lt;/tr&gt;<br>
&lt;tr&gt;<br>
&lt;td&gt;<br>
&lt;input type='submit' value='press'&gt;<br>
&lt;/td&gt;<br>
&lt;/tr&gt;<br>
&lt;/form&gt;</div>
&lt;/table&gt;</div>
M40
,
'x41'=><<<'M41'
<a id="y41"></a>
Колисниченко PHP и MySQL Разработка Web-приложений<br>
1 теория 23<br>
2 передача параметров 67<br>
3 массивы и списки 107<br>
4 функции 135<br>
5 бд MySQL и sqlite 205<br>
6 инструменты 245<br>
7 основные элементы сайта 325<br>
8 типичный сайт 399<br>
9 сложный проект 479<br>
10 безопасность сайта 511<br>
11 полезные сведения 531<br>
п 557 приложение 557<br>

M41
,
#M42
'x43'=><<<'M43'
<a id="y43"></a>
Разыменование массива<div class="kod">
function foo(){<br>
return array(1,2,3);}</div>
Обращение к нулевому элементу<div class="kod">
echo foo()[0];</div>

OSPanel\moduler\php\PHP5.5\php_inidevelopment<br>
строка 718<div class="kod">
; extension_dir="ext"</div>
M43
,
'x44'=><<<'M44'
<a id="y44"></a>
phpinfo()<br>
c45<div class="kod">
&lt;?php<br>
phpinfo();<br>
?&gt;</div>
Встроеная константа<div class="kod">
echo PHP_VERSION; // 5.5.3</div>
M44
,
'x45'=><<<'M45'
<a id="y45"></a>
2 глава раздел 1 <br>
Программа на PHP<br>
10.9.2017<br>
Корневой каталог веб-сервера обычно это public_html или www<div class="kod">
&lt;?php<br>
if (!mysql_connect('localhost','root',<br>
")) die('error');<br>
echo "соед. успешн. уст-но";<br>
?&gt;</div>
До php-тегов не должно быть ничего, он должен быть первым символами файла php иначе испортится cookies<br>
типы данных <a href="#y6">стр.6</a><br>
unset($x) - уничтожить переменную<br>
$isset($x) - проверить существование<br>
ссылка <a href="#y46">(46)</a> константы<a href="#y47">(47)</a> операции<a href="#y48">(48)</a><br>
do_while<a href="#y49">(49)</a> switch_case<a href="#y50">(50)</a><br>

M45
,
'x46'=><<<'M46'
<a id="y46"></a>
Ссылка<br>
$s="Привет";<br>
$a=&$s; жесткая ссылка<br>
echo $a; // Привет<br>
$b="s";<br>
echo $$b; // Привет .. мягкая ссылка<br>
M46
,
'x47'=><<<'M47'
<a id="y47"></a>
Константа<br>
define("A","1"); имя значение<br>
define('const","ko",true); чувствителен к регистру<br>
Для констант ненадо указывать $<br>
__FILE__ имя текущего сценария<br>
__DIR__ каталог<br>
__LINE__ строка выполняется<br>
print_r(get_defined_constants());<br>
даст все константы<br>
M47
,
'x48'=><<<'M48'
<a id="y48"></a>
Операции<br>
x%B остаток от деления<br>
$a++ инкремент, самый высокий приоритет<br>
++$a второй приоритет<br>
= самый низкий приоритет<br>
&gt;&gt;&lt;&lt; битовые операции<br>
!($a===$b) правильное не равно<br>
$s[1],-'dir'[0] // d первый символ<br>
echo `dir`; // вывод содержимого, как по команде Windows<br>
M48
,
'x49'=><<<'M49'
<a id="y49"></a>
do-while<div class="kod">
do{$i++;<br>
if($i==4)continue;<br>
if($i==6)break;<br>
}while($i&lt;=5);</div>
M49
,
'x50'=><<<'M50'
<a id="y50"></a>
50<br>
switch-case<div class="kod">
for ($x=0; $x&lt;5; $x++)<br>
switch ($x){<br>
case 1: echo '+';<br>
case 0: echo '2'; break;<br>
case 4: echo "=$x";<br>
//2+2=4<br>
default:<br>
echo 2;<br>
}</div>
M50
,
'x51'=><<<'M51'
<a id="y51"></a>
51<br>
раздел 2<br>
10.9.2017<br>
Передача параметров PHP-програм<br>
CGI Common Gateway<br>
Interface<br>
Общий ИНтерфейс Шлюза<br>
$n=$_GET['n']
Метод POST. Передача больших объемов и файлов, паролей<br>
$_REQUEST - массив объединяет три массива $_GET, $_POST, $_COOKKIE<br>
echo getenv("REMOTE_ADDR");<br>
дает значение переменной окружения<br>
location - переброс на др. страницы<br>
Header("location: http://ya.ru");<br>
заголовок<br>
редирект на яндекс<table class="t292"><tr><td>
4хх<br> 
5хх <br> 
2хх <br> 
1хх <br> 
3хх <br> 
</td><td>ошибка клиента<br>ошибки сервера<br>код успеха<br>информационное<br>перенаправления<br>
</td></tr></table>
M51
,
'x52'=><<<'M52'
<a id="y52"></a>
52<br>
target<br>
_blank в новом окне<br>
_self в текущ окне<br>
_parent во фрейме родителя<br>
_top как self<br>
M52
,
'x53'=><<<'M53'
<a id="y53"></a>
53<br>
$_REQUEST['u'];<br>
Ищет параметр u в $_POST и в $_GET<br>
c.79 join('',file('hello.html'));<br>
получает файл в виде массива строк<br>
экранируй двойные кавычки в echo<br>
echo "&lt;input type=\"text\"&gt;";<br>
одинарные нельзя<br>
с.81 знакоместо<br>
checkbox независимый перль <br>
radio зависимы переключатель<br>
checked переключатель активен<br>
multiple множественный выбор<br>
select option<br>

if (is_aray($os)) является ли массивом<br>
с.88 Тип банковской карты функция! с.54<br>
trim() обрезка пробелов<br>
c.90 Капча<br>
с.92 Форма поиска Яндекс<br>
с.94 Куки<br>
M53
,
'x54'=><<<'M54'
<a id="y54"></a>
54<br>
Функция<br>
10.9.2017<div class="kod">
Возведение в куб<br>
&lt;?php<br>
function foo($x)<br>
{return $x*$x*$x;}<br>
echo foo(2); // 8<br>
?&gt;</div>
M54
,
'x55'=><<<'M55'
<a id="y55"></a>
55<br>
SSL - защищенное соединение<br>
с.96 сессии<br>
с.98 идентификатор сессии<br>
session identifer (SID) какой юзер запустил сценарий<br>
SID - имя временного файла<br>
на сервере в папке /tmp<br>
session_start(); -- инит сессии<br>
с.99 имя сесии PHPSESID<br>
сериализовать массив - первратить в строку<br>
$a=serialize($b);<br>
$b=unserialige($a);<br>
Глава8 Вывод массива<div class="kod">
foreach ($_GET as $k=&gt;$v)<br>
echo "&lt;br&gt;$k=$v";</div>

Установка всех переменных из суперглобальных массивов<br>
eval("$".$k."='".$v."';");<br>
register_globals - отстой<br>
M55
,
'x56'=><<<'M56'
<a id="y56"></a>
56<br>
3Раздел<br>
Массивы, списки<br>
11.9.2017<br>
пример создания списка, <br>
$a[0]="unix";<br>
$a[]="linux"; - добавление в конец<br>
$a[]="mac";<br>
размер<br>
count($a)<br>
sizeof($a)<br>
с110 ассотиативные массивы, списки<br>
в качестве индекса элемента выступают строки<br>
Прямой перебор<br>
foreach($a as $k=&gt;$v) echo "$k=&gt;$v&lt;br&gt;";<br>
Обратный перебор<br>
for (end($a); ($k=key($a)); текущий ключ<br>
prev($a) предыдущий элемент<br>
echo "$k={$a[$k]}&lt;br&gt;";<br>
reset() - курсор на начало  массива <br>
next() - следующий элемент<br>
current() - текущий элемент <br>
pos() - <br>
M56
,
'x57'=><<<'M57'
<a id="y57"></a>
57<br>
list($i1,$i2,$i3)=$a;<br>
присвоит переменным значения элементов массива<br>
$a=array("Uni","lix","win");<br>
$a=array("host"=&gt;"loc",<br>
"user"=&gt;"root");<br>
c.112<br>
$a=[[1,2],[3,4],[5,6]];<br>
foreach ($a as list($x,$y))<br>
{eacho "x=$x; y=$y&lt;br&gt;";}<br>
<div class="kod">
//x=1; y=2<br>
x=3; y=4<br>
x=5; y=6</div>
unset($a) удалить массив<br>
$b=$a1+$a2; слияние массивов<br>
var_dump($b); вывод массива<br>
print_r($a); - вывод массива<br>
M57
,
'x58'=><<<'M58'
<a id="y58"></a>
58<br>
Сортировка<br>
sort($a)  - сортирует списки<br>
rsort($a) по убыванию<br>
asort($a) по значению<br>
arsort($a) по значению в обр порядке<br>
ksort($a) по ключам<br>
krsort($a)<br>
array_reverse($a) реверс массива<br>

shuffle($a)<br>
usort(),uasort(),uksort($a,"f")<br>
списка массив по значению массив по ключам функция сортировки<br>

natcasesort() натуральная сортировка<br>
array_push($a,"sd") добавит в конец<br>
$b=array_pop($a) вынуть в переменную<br>
array_unshift добавить в начало<br>
array_shift удалить первый<br>

M58
,
'x59'=><<<'M59'
<a id="y59"></a>
59<br>
в асс массив<br>
Упаковка<br>
$a=compact("i","j","k"); без "$"<br>
упакует переменные $i,$j,$k<br>
extract($a); создание переменных с именами ключей<br>
Массив сериализованый(55) можно хранить в БД или куках<br>
EXTR_OVERWRITE перезапись если уже существует<br>

Часть массива slice()<div class="kod">
$a=array(1,2,3,4,5);<br>
$b=array_slice()<br>
$a,0,3//1,2,3<br>
$a,2 // 3,4,5<br>
$a,-2,1 //4</div>
koli.php<br>
fill - автозаполнение<br>
$a=array_fill(0,10,5); // ,5,5,5,5,5,,5,5,,5,5,5,5,5,5,5,<br>
$a=array_fill_keys($k,7);// маcсив ключей значение<br>
c.127<br>
echo print_r(range(0,4)); // 0,1,2,3,4<br>
M59
,
'x60'=><<<'M60'
<a id="y60"></a>
60<br>
array_diff($a,$b) разница между массивами<br>
array_diff_assoc($a,$b) сумма всех элементов и ключей<br>
array_sum($a)<br>
echo array_sum(range(1,10)) - сумма чисел<br>

in_array("BSM",$a) наличие в массиве<br>
array_key_exists('name',$a)<br>
array_rand($a)<br>
(Начиная с PHP4.2 генератор случ.чисел включен)<br>
array_unique($a)<br>
array_values($a)<br>

array_keys($a)<br>
array_flip($a)<br>
array_count_values($a)<br>
array_replace<br>
array_search("za",$a)<br>
array_walk($a,'f')<br>
array_map("f",$a)<br>
M60
,
'x61'=><<<'M61'
<a id="y61"></a>
61<br>
4 Раздел<br>
Функция 54<br>
mt_rand(0,1)// рандом 0 или 1<br>
время 22<br>
расширение Math<br>
GMP повышенная точность<br>
BC произвольная точность<br>
fn аналог Delphi или описание<br>
strlen() length()<br>
strpos() pos()<br>
strstr() первое вхождение подстроки<br>
strchr<br>
substr() copy()<br>
strcmp() сравнить две строки<br>
strncmp() сравнить первые n символов строк <br>
str_repeat() повтор строки<br>
str_replace()<br>
strspn() stringreplace()<br>
strspn() наличие начальных символов<br>
strcspn() отсутствие начальных символов<br>
M61
,
'x62'=><<<'M62'
<a id="y62"></a>
62<br>
Замены<br>
\n на &lt;br&gt;<div class="kod">
echo nl2br("1\n2\n3\n4");</div>
&lt;,&gt; на &amp;lt;, &amp;gt;<div class="kod">
echo HtmlSpecialChars("5&lt;&lt;10&gt;&gt;2");</div>
обратное<br>
htmlSpecialChars_decode()<br>
htmlentities()<br>
html_entity_decode<br>
strtolower()<br>
strtoupper()<br>
strrev()<br>
str_shuffle()<br>
str_rot13()<br>
urlencode(0<br>
strip_tags()<br>
wordwrap($txt,30,"&lt;br&gt;");<br>
M62
,
'x63'=><<<'M63'
<a id="y63"></a>
63<br>
md5<br>
c151<br>
$p=md5($password);<br>
if ($pass===$password) echo "good";<br>
else echo "bad";<br>
md5_file('koli.php') вернет md5 файла<br>
sha1("привет")  алгоритм SHA1<br>
crc32("стр")  контрольная сумма<br>
crypt() хэш<br>
11.09.2017<br>
M63
,
'x64'=><<<'M64'
<a id="y64"></a>
64<br>
Перевод СС<br>
11.9.2017<br>
с157<div class="kod">
bin2hex() с двоичной в 16-ричную</div>
M64
,
'x65'=><<<'M65'
<a id="y65"></a>
65<br>
с167 csv<br>
c197 сокеты<br>
&lt;?php<br>
$s=fsockopen("localhost",80,$err,$ess);<br>
if (!$s){<div class="kod">
echo $ess.'&lt;br/&gt;';}</div>
else {<div class="kod">
echo 'нормик&lt;br/&gt;';<br>
fputs($s,"GET /index.html<br>
HTTP/1.0\n\n");<br>
echo fgets($s);<br>
fclose($s)}</div>
?&gt;<br>
отвечаетHTTP/1.1 400 Bad Request Connection close<br>
c196 DNS<br>
M65
,
'x66'=><<<'M66'
<a id="y66"></a>
66<br>
Произвольное число аргументов<div class="kod">
function f()<br>
{
foreach(func_get_args() as<br>
$p=&gt;$v)<br>
echo "Параметр $p<br>
Значение $v&lt;br&gt;\n"<br>
}</div>
Выведет все переданные параметры<br>
M66
,
'x67'=><<<'M67'
<a id="y67"></a>
67<br>
Факториал<br>
12.9.2017<div class="kod">
function f($x)<br>
{
if ($x==0) return 1;<br>
else return $x*f($x-1);<br>
}</div>

M67
,
'x68'=><<<'M68'
<a id="y68"></a>
68<br>
c202 генератор yeild c203 empty<br>
M68
,
'x69'=><<<'M69'
<a id="y69"></a>
69<br>
5 Раздел<br>
MySQL<br>
c207<br>
/...подключение к БД<br>
mysql_query('SET NAMES cp1251;');<br>
установка кодировки БД<div class="kod">
ORDER BY RAND() LIMIT 10;</div>
10 случайных записей<br>
с241 Постраничный вывод таблицы (пагинация)<br>
с243 Пример пагинации<br>
M69
,
'x70'=><<<'M70'
<a id="y70"></a>
70<br>
Сложные проекты<br>
6 раздел<br>
14.09.2017<br>
Картинку в БД не поместить, но есть BLOB<br>
исключить HTML код из PHP кода с помощью шаблонов<br>
.fpl .tpl<div class="kod">
&lt;p&gt;Добро, пж&lt;b&gt;{user}&lt;/b&gt;</div>
-&gt; Доступ к свойству класса<br>
с258 шаблонизатор Smarty<br>
Сначала создается php-код из шаблона, потом выполняет его<br>
www.smarty.net<br>
2.6.26.zip<div class="kod">
{* просто камент *}<br>
{*<br>
много<br>
строчный<br>
*}<br>
&lt;!-- камент будет отправлен браузеру --&gt;</div>
Плагин - пользовательсская функция- лежит в Smarty-x-y-z/libs/plugins<br>

M70
,
'x71'=><<<'M71'
<a id="y71"></a>
Экземпляр класса(объект)<br>
с284<br>
Доступ к члену класса идет с помощью -&gt; и указателя $this<br>
echo B::class; // A/B<br>
обьявлениен пространства имен должно быть первым оператором<br>
namespace A;<br>
class B{}<br>
echo B::class; // A/B<br>
конструктор<br>
function Me(){<br>
$this-&gt;to='user#mail.ru';}<br>
$mes=new Me; обьявление обьекта класса<br>
деструктор<br>
function __dectructor(){<br>
print "Destroying".$this-&gt;name."\n";<br>
}
абстрактный - не содержит реализации методов<br>
abstract class AbstractClass{<br>
abstract public function test();}<br>
нельзя создать экземпляр абстрактного класса<br>
M71
,
'x72'=><<<'M72'
<a id="y72"></a>
class MyClass{<br>
final function test(){<br>
echo "проверка";<br>
}
}
нельзя переопределить в классе потомке<br>
с288 __clone() клонирование<br>
с291 try {} finally {mysqli_close($db);}<br>
с293 константа - член класса<br>
статический член класса<br>
instanceof - является ли обьект экземпляром определенного класса<br>
с294 пространство имен<br>
типаж (traits) примеси<br>
use - подключить типаж (после)<br>
с297 сессия нужна для аутентификации. механизм более гибкий чем куки<br>
с310 контроль версий<br>
с316 Самодельные точки останова<br>
M72
,
'x73'=><<<'M73'
<a id="y73"></a>
с290<br>
Исключение<div class="kod">
try {}catch (Exception $e){}</div>
перехват исключения<hr><div class="kod">
throw new Exception("сооб")<br>
порождение</div>
M73
,
'x74'=><<<'M74'
<a id="y74"></a>
php.ini<br>
C:\OSPanel\modules\php\PHP-5.5\php.ini<br>
Директивы<br>
error_reporting=E_ALL<br>
или в сценарии<br>
error_reporting('E_ALL');<br>
или c:\Windows<br>
c518<br>
phpinfo(), строки Configuration File(php.ini)<br>
и Loaded Configuration File<br>
M74
,
'x75'=><<<'M75'
<a id="y75"></a>
7 раздел<br>
25.9.2017<br>
Основные элементы сайта<br>
upload - загрузка файлов на сервер<br>
multipart - форма для загрузки файлов на сервер<br>
отличается наличием параметра ENCTYPE="multipart/form-data"<br>
и наличие поля выбора файла<br>
&lt;input name="upf" type="file"&gt;<br>
необходимо редактировать php.ini<br>
file_uploads=On<br>
Посмотри в phpinfo()<br>
суперглобальный массив $_FILES<br>
C330 Ошибки загрузки файла<br>
chmod 777./upload/права на запись<br>
h ttp://jquery.malsup.com/form  плагин form<br>
AJAX, jQuery<br>
Форма JSON<br>
echo json_encode($d) отправляем данные в json формате<div class="kod">
$h='c-t';<br>
$h.='\nc';</div>
HtmlMimeMail5<br>
M75
,
'x76'=><<<'M76'
<a id="y76"></a>
Агрегатор - прога читающая RSS сообщения<br>
RSS-файл является XML-файлом<br>
с372 Создание граббера новостей<br>
с384 регулярка поиск почты @<br>
Аналоги<br>
Delphi<div class="kod">
extractfilename +1.exe<br>
extractfiledir .cts</div>
php<div class="kod">
ereg_replace(".*[\\/]","",$s);<br>
ereg_replace("[\\/]?[^\\/]*$","",$s);</div>
фильтры - замена регуляркам<br>
ru.php.net/manual/en/book.filter.php<br>
FILTER_VALIDATE_EMAIL<br>
AJAX  - асинхронный js и XML<br>
с392<br>
в фоновом режиме ищет запросы серверу, без юзера<br>
<table class="t292">
<tr><td>php </td><td> Delphi</td></tr>
<tr><td>__DIR__ </td><td>extractfiledir(paramstr(0)) </td></tr>
<tr><td>__FILE__ </td><td>paranstr(0) </td></tr>
</table>
M76
,
'x77'=><<<'M77'
<a id="y77"></a>
8 раздел Система управления контентом сайта CMS Content Managment System<br>
c421 $id=@htmls($id);<br>
c431 @mkdir("golez",0777); создание папки<br>
Одобрение, поле APR=1<br>
c443 WordPress - база данных <br>
curl<br>
SimpleHTML - DOM парсер<br>
$t=strip_tags($t,"&lt;a&gt;&lt;p&gt;&lt;b&gt;");// неприкасаемые - эти не трогает<br>
выстригает определенные теги<br>
c451 Счетчик. Журнал сервера - протокол доступа Weblizer - анализатор журнала<br>
c465 голосование<br>
header("Location: index.php?p=$p");<br>
c472 Система каментов более сложная чем система опросов<br>
DISQUS - платформа каментов<br>
M77
,
'x78'=><<<'M78'
<a id="y78"></a>
9 раздел<br>
16.09.2017<br>
с479<br>
ru.wordpress.com<br>
jquery.com/demos/datepicker<br>
готовый календарь<br>
Аутентификация - вход на сайт<br>
с495 Отправка письма<br>
сравнение строк ($s==="my")<br>
Панель управления WordPress<br>
http://сайт/wp-admin/<br>
WP юзает UTF8<br>
M78
,
'x79'=><<<'M79'
<a id="y79"></a>
10 раздел<br>
Безо сайта<br>
SSL - Secure Socket Layer<br>
https:// защищенная версия http шифрует<br>
TLS Transport Layer Security, развитие SSL<br>
Сертификат<br>
Взломы:<br>
1) Межсайтовый скриптинг пихает теги в поля ввода (XSS)<br>
2) SQL-иньекция (некорректный запрос)<br>
POST не пишется в журнал<br>
M79
,
'x80'=><<<'M80'
<a id="y80"></a>
11 раздел SPAW2<br>
www.spaweditor.com<br>
WAP-Wireless Application Protocol<br>
c547 Zend Guard шифрует php в байт код<div class="kod">
iconv("cp1251","utf-8","текст");</div>
переход<br>
$a[n] и $['n'] быстрее на 40%<br>
foreach на 30% медленнее чем for,while<br>

sizeof быстрее count<br>
c582 e-fh[bd<br>
ftp://ftp:bhv.ru/9785977535144.zip<br>

M80
,
'x81'=><<<'M81'
<a id="y81"></a>
Робин Никсон<br>
PHP,MySQL,js<br>

lpmj.net<br>
M81
,
'x82'=><<<'M82'
<a id="y82"></a>
2019 10 фев<br>
Последний символ строки<div class="kod">
1)substr("tests",-1); //"s"</div><br><div class="kod">
2)substr($s,-1)</div>
M82
,
'x83'=><<<'M83'
<a id="y83"></a>
83<br>
Последний id таблицы<div class="kod">
SELECT * FROM `gru`<br>
ORDER BY `id` DESC<br>
LIMIT 1  /// сортировка 1 шт обратный порядок</div>
`- косой апостроф<br>
`-гравис, над символом<br>
M83
,
'x84'=><<<'M84'
<a id="y84"></a>
Крякозябры в базе<br>
Лечится добавлением после открытия БД<div class="kod">
my_sqli_query($cu,"SET NAMES utf8");</div>
M84
,
'x85'=><<<'M85'
<a id="y85"></a>
Как хероку бота обновить?<br>
14.03.2019<br>
мануал как изготовить бота <a href="https://www.youtube.com/watch?v=wqWb9_QdE_g">wqWb9_QdE_g</a><br>
<a href="https://vk.com/public178987911">попиздеть с ботом https://vk.com/public178987911</a><br>
Открыть папку D:\bot2\php-getting-started так<br>
Shift-&gt;ПКМ-&gt;Открыть окно команд<br>
Пишем<div class="kod">
git add .<br>
git commit -m "UPD"<br>
git push heroku master</div>
M85
,
'x86'=><<<'M86'
<a id="y86"></a>
От инъекции<br>
25.03.2019<br>
строки<div class="kod">
$t=mysqli_real_escape=string($cu,$t);</div>
, где $cu - база данных, иногда канает без неё<br>
числа<div class="kod">
$i=(int)$i;</div>
M86
,
'x87'=><<<'M87'
<a id="y87"></a>
BINARY<br>
16.06.2019<br>
Позволяет различать регистр<div class="kod">
$a="SELECT * FROM `test` WHERE BINARI `act`='М'";</div>
Найдет строго большие буквы М<br>
M87
,
'x88'=><<<'M88'
<a id="y88"></a>
LIKE<br>
16.06.2019<br>
Поиск подстроки<div class="kod">
$x="SELECT * FROM `kok` WHERE `txt` LIKE '%нез%'";</div>
Найдет записи где в полях содержится подстрока 'нез'<br>
Отрицание<div class="kod">
`txt` NOT LIKE '%нез%'</div>
M88
,
'x89'=><<<'M89'
<a id="y89"></a>
ON DUPLICATE KEY UPDATE<br>
21.6.2019<div class="kod">
INSERT INTO `tnn`(`nam`,`lat`,`val`)<br>
VALUES('the','D',33)<br>
ON DUPLICATE KEY UPDATE `val`=33</div>
Добавляет в таблицу. если нету и инициализирует если запись уже есть. Но! Это поле должно быть мечено как УНИКАЛЬНОЕ.<br>
(В PMA найдешь)<br>
M89
,
'x90'=><<<'M90'
<a id="y90"></a>
Скопировать таблицу под другим именем<br>
16.07.2019<div class="kod">
CREATE TABLE kox AS SELECT * FROM kok</div>
kox - новая таблица<br>
kok - исходная таблица<br>
Автоинкременты настроить придется вручную<br>
M90
,
'x91'=><<<'M91'
<img src="oblon.png" align="right" alt="" height=55>
<a id="y91"></a>91<br>


Котеров, Симдянов<br>
PHP 7 в подлиннике<br>
<a href="https://www.youtube.com/watch?v=WYVBTz9QT6Y">WYVBTz9QT6Y</a> порекомендовано <img src="xoy.png" alt="" width=20><sup>ауди Хо</sup><br>
M91
,
'x92'=><<<'M92'
<a id="y92"></a>92<br>

Исходник, выдающий gif файл не c/gif.c , а cgiinside/c/gif.c<br>
M92
,
'x93'=><<<'M93'
<a id="y93"></a>93<br>
Null coalescing оператор ??<br>
php 7<br>
27.7.2019<br>
типа тернара для php7<br>
M93
,
'x94'=><<<'M94'
<a id="y94"></a>94<br>
Smarty ругается на CSS<br>
29.7.19<br>
Заключай CSS в программные скобки {literal}{/literal}<br>
M94
#M95
#M96
#M97
#M98
#M99
#M100
#M101
#M102
#M103
#M104
#M105
#M106
#M107
#M108
#M109
#M110
#M111
#M112
#M113
#M114
#M115
#M116
#M117
#M118
#M119
#M120
#M121
#M122
#M123
#M124
#M125
#M126
#M127
#M128
#M129
#M130
#M131
#M132
#M133
#M134
#M135
#M136
#M137
#M138
#M139
#M140
#M141
#M142
#M143
#M144
#M145
#M146
#M147
#M148
#M149
#M150
#M151
#M152
#M153
#M154
#M155
#M156
#M157
#M158
#M159
#M160
#M161
#M162
#M163
#M164
#M165
#M166
#M167
#M168
#M169
#M170
#M171
#M172
#M173
#M174
#M175
#M176
#M177
#M178
#M179
#M180
#M181
#M182
#M183
#M184
#M185
#M186
#M187
#M188
#M189
#M190
#M191
#M192
#M193
#M194
#M195
#M196
#M197
#M198
#M199
];?>
