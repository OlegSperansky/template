<?php
  //Подключаем класс template
  require_once('../core/template.php');

  //Инициируем класс, сразу подключая шаблон first и его секцию BASIC
  $templateBasic = new Template('first', 'BASIC');
  //Меняем значение {main} в шаблоне
  $templateBasic->set('main', 'Тут будет какой то текст');
  //Выставляем условие что apple равно 2
  $templateBasic->setVar('apple', 2);
  //Выводим получившийся шаблон
  echo $templateBasic->view();
?>
