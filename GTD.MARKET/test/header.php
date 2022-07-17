<!-- Подключение --> -->
<!--  include $_SERVER['DOCUMENT_ROOT'] . '/clMysql.php' служит для подключения базы данных. Так как мы будем работать с базами данных - файл "clNav" подключается ниже, чем место подключения баз данных  -->
<!-- $clMysql = new clMysql(); - экземпляр класса -->
<!-- include $_SERVER['DOCUMENT_ROOT'] . '/clNav.php'; данный файл предназначен для хранения основных функций. -->
<!--   $clNav = new clNav($clMysql); - ' так с помощью оператора "new", мы создаём экземпляр класса. Таких экземпляров может быть несколько. У каждого экземпляра будут свои методы. Методы вызываются через знак (->), например, $clNav->clMesql так мы можем получить доступ к какой-либо переменной.-->

<!-- Подключаем базу данных. -->

<!-- классу  $clNav передали переменную (ссылку на базу данных). Теперь наш класс записал ссылку на соединение и хранит в переменной "var" -->

<!-- <?php



      include $_SERVER['DOCUMENT_ROOT'] . '/clMysql.php';

      $clMysql = new clMysql();



      include $_SERVER['DOCUMENT_ROOT'] . '/clNav.php';

      $clNav = new clNav($clMysql);

      ?> -->


<!DOCTYPE html>
<html lang="en">
<!-- // Апач видит ШТЛ код и записывает его в некий буфер для вывода. -->

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Document</title>
  <!-- У link обязательный атрибут "type и rel" -->
  <link href="/gtd.market/test/css/style.css type=" text/css" rel="stylesheet">
  <!-- У script обязательный атрибут "type" -->
  <script src="/gtd.market/test/js/jquery-3.6.0.min.js type=" text/javascript"></script>


</head>



<style>
  body,
  html {
    height: 100%;
    margin: 0;
    padding: 0;
    font-size: 14px;

  }



  .grid_mainpage {
    display: grid;
    height: 100%;
    grid-template-columns: auto minmax(max-content, 1170px) auto;
    grid-template-areas: "toppanel toppanel toppanel"
      "left body right"
      "left body right"
      "footer footer footer";
  }




  .toppanel {

    grid-area: toppanel;
    background-color: #6b80ff;
  }

  .left {
    grid-area: left;
    background-color: #eeff86;
  }

  .right {
    grid-area: right;
    background-color: #71ffb1;
  }

  .footer {
    grid-area: footer;
    background-color: #c9ffa8;
    display: flex;
    justify-content: center;
    padding: 5px;
  }

  .body {
    grid-area: body;
    background-color: #f2ffc6;

  }

  .header {
    grid-area: body;
    background-color: #ffc222;
  }

  .center {
    grid-area: body;
    background-color: #c6efb5;
  }





  a {
    text-decoration: none;
    display: inline-block;
  }

  ul,
  li {
    list-style: none;
    margin: 0;
    padding: 0;
  }


  .menu li {
    display: inline-block;
  }

  .menu a {
    color: #323232;
    font-size: 16px;
    line-height: 36px;
    border: 1px solid transparent;
    padding: 0px 16px;
    transition: all .3s;
  }

  .menu a:hover {
    border-color: #ffc222;
  }

  .menu li+li {
    padding-left: 10px;
  }
</style>

<body>

  <!-- Используем глобальную переменную - обыкновенный массив -->

  <!-- 1)    Создаём переменную и инициализируем её как пусто - "", и говорим ей, - Так как у нас шапка у нас подключена на главную страницу сайта и на страницу регистрации, то наш код будет срабатывать там и там.  Дальше говорим ей, если наша глобальная переменная нам возращает вот это значение "register/index.php", то мы присваиваем новое значение. Добавляем информацию к стилям, смотри пункт 2. Возможна ошибка связанная с ковычками. Для этого необходимо экранировать ковычки, поставив в $style, перед двойными xковычками поставить"\"   Существующие глобальные переменные: _SERVER, _COOKIE, _ENV, _FILES, _GET, _POST, _REQUEST, _SESSION, HHTTP_ENV_VARS, HHTP_GET_VARS (серверный язык). Команда print_r($_SERVER) позволяет распечатать переменные, и посмотреть что у них внутри. Указывая данную переменную мы обращаемся к массиву, указанному в глобальной переменной. Если в одной строке ввести echo '<pre>', а в другой указать print_r($_SERVER ) и вывести в браузере в понятном виде (который содержит "ключ-значение").Данные переменные выдаёт операционные системы. В данном случае PHP узнал у АПАЧИ, где находится этот сайт, например: [DOCUMENT_ROOT] => C:/USR/www/test.ru-->
  <?php
  $style = "";
  // В данном случае глобальная переменная возвращает путь к нахождению текущего сайта.
  if ($_SERVER['SCRIPT_NAME'] == '/gtd.market/test/register/index.php') {
    $style = 'grid-template-areas: \"toppanel toppanel toppanel\"
      \"header header header\"
      \"header body header\"
      \"footer footer footer\"';
  }

  ?>


  <!-- Создаём грид -->
  <div class="grid_mainpage" style="<?= $style ?>">
    <div class="left">left</div>
    <div class="right">right</div>

    <!-- Навигация -->


    <div class="toppanel">


      <nav class="menu">
        <!--  создаём флекс блок, который состоит из 4рех блоков: logo, menu, -->
        <div style="display: flex;">
          <!-- "/" указывается, когда мы собираемся искать в корне сайта-->
          <div><a href="#"><img src="/test/img/logo.jpg"></a></div>
          <div>
            <ul>
              <li><a href="#">Транспорт</a></li>
              <li><a href="#">Площадки</a></li>
              <li><a href="#">Тендеры</a></li>
              <li><a href="#">Проверки</a></li>
              <li><a href="#">Новости</a></li>
              <li><a href="#">АТИ-Доки</a></li>
              <li><a href="#">Страхование</a></li>
              <li><a href="#">Тракмаркет</a></li>
              <li><a href="#">GRS-мониторинг</a></li>
              <li><a href="#">Рейтинг</a></li>

            </ul>
          </div>
          <div style="flex-grow: 1">pusto</div>
          <!-- Для того чтобы прижать кнопки к правому блоку, нам необходимо для класса Pusto прописать флекс -->

          <!-- Кнопку делаем ввиде ссылки, так как её можно кому-нибудь дать. Когда клиент нажимает на кнопку "Регистрации", Апач принил запрос и переводит Клиента на страницу с регистрацией. Апач видит, что внутри лежит файл РНР - открывает её. -->
          <div><a href="/test/register">Регистрация</a>
          </div>
          <div></div>

        </div>


      </nav>

    </div>

    <!-- Форма регистрации -->

    <!-- Шапка -->

    <div class="header">

      Center
    </div>

    <!-- центральная часть -->
    <div class="body">


      <!-- нет закрывающих тэгов -->