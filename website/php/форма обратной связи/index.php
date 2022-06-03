<?php


if (isset($_POST['name']) && isset($_POST['tel'])) {
  $name = $_POST['name'];
  $tel = $_POST['tel'];


  if (mail(
    'artem.galkin2020@mail.ru',
    'Новое письмо',
    'Вы успешно зарегистрированы!' . "\n" .
      'Вы ввели имя:' . $name . "\n" .
      'Вы ввели телефон:' . $tel
  )) {
    echo ('успешно отправлено');
  } else {
    echo ('Ошибка');
  }
}



?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form method="post">
    <input type="text" name="name" placeholder="Имя">
    <input type="number" name="tel" placeholder="Телефон">

    <input type="submit" value="Отправить">

  </form>



</body>

</html>