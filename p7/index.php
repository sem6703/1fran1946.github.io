<?php



//Подключаем класс Smarty
require_once 'libs/Smarty.class.php';
//Создадим объект класса Smarty
$smarty = new Smarty();
$smarty->template_dir='vw';
$smarty->compile_dir='tmp';

require_once 'php200.php';
$smarty->assign('xt',$xt);

//Создадим переменную для примера
$name = 'Vasya';
//Передаем переменную в шаблонизатор Smarty
$smarty->assign('name',$name);

$z=array(8,9,7,5,4);
$smarty->assign('z',$z);

$a = [
    'Piphia' => <<<jo1
42,
jo1
,
    'Alisa'=><<<'jo2'
12,
jo2
#M190
#M191
#M192
#M193
#M194
#M195
];
/*
$a=[
'Piphia'=><<<MARKER
45,
MARKER
;

'Alisa'=><<<'jo2'
12,
jo2
];


'Neo'=><<<'jo3'
31,
jo3;
'Triny'=>22
*/
$smarty->assign('p',$a);
//Выводим шаблон на экран
$smarty->display('main.tpl');

?>
