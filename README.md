# Шаблонизатор PHP
Быстрый, удобный и практичный шаблонизатор PHP. Делался для себя и если кому то он понравится, то может тоже им вполне пользоваться. Прост в настройке, достаточно указать в самом классе в переменной **$templates_folder** вашу папку шаблонов

## С чего начать

Сам класс Template весит всего 3кб, половина из которого это его комментарии.
1. Подключаем класс к нашему проекту, вы можете это делать как угодно, но для простоты картины я буду использовать **require_once**

```php
require_once('../core/template.php');
```

2. Инициилизируем наш класс и сразу же подгрузим шаблон

```php
 $templateBasic = new Template('first', 'BASIC');
```

Где первое значение это файл шаблона (**first.html**) а второе - это секция которую мы обозначим в самом шаблоне как **[TEMPLATE_BASIC]**

Сам файл **basic.html** может выглядить так
```html
[TEMPLATE_BASIC]
<html>
<head></head>
<body>
{main}
[IF apple == 1] one apple [/IF]
[IF apple == 2] two apple [/IF]
</body>
</html>
[/TEMPLATE_BASIC]
```

3. Наш шаблон подгрузился и теперь можно его модернизировать используя метод **set**

```php
$templateBasic->set('{название переменной}', 'на что менять');
```

К примеру:

```php
$templateBasic->set('{main}', 'тут будет что нибудь написано');
```

4. Так же в данном шаблонизаторе можно добавить условия методом **setVar**

К примеру 
```php
$templateBasic->setVar('apple', 2);
```
А как вы могли заметить у нас в шаблоне два условия apple, один равен 1, а второй 2. Соответственно, мы сейчас, методом setVar установили значение переменной apple равной 2. Соответственно на экране появится только two apple

5. И теперь нам осталось вывести шаблон. Сначала получаем его методом **view**, а потом выводим его на экран через echo или print

```php
echo $templateBasic->view();
```

# Заключение

В заключении хочу сказать, что трудно это назвать шаблонизатором, но со своей функцией он справляется отлично. Он отлично подойдет для новичков.
