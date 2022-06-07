<!-- 1) создаём связь с базой данных. проверяем подключение - при запросе должно выдавать "connection successful" -->

<?php
$con = mysqli_connect('localhost', 'root', '', 'mystore');
if (!$con) {  // "!" - убрать перед проверкой/
  echo "connection successful";
};
