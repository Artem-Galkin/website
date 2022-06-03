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
