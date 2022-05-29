<?php
// https://www.youtube.com/watch?v=ZMhY6p7Axdc&list=PLM7wFzahDYnHdnEp8Nn_jD_jxYaWLnsyG&index=13
// ------------Время для людей.
// https://www.epochconverter.com/
//timesstamp - метка времени - какая-то метка времени и даты.
// Юникс время - время в секундах, которое прошло с 1 января 1970 (Юникс эпоха). Каждую секунду к этому времени добавляется 1 секунда.
$t = time();
date_default_timezone_set('America / Los_Angeles');
echo date('y-m-d H:i ', $t), "<br>";
echo $t, '<br>';
echo '<hr>';

// переклчаем тайм зону
date_default_timezone_set('Europe/Moscow');
$t = time();
echo date('y-m-d H:i ', $t), "<br>";
echo $t, '<br>';
echo '<hr>';

// -----трансформирование timesstamp в Юникс время.
$s = "10 September 2000 20:00";
echo strtotime($s), "<br>";
echo $t, "<br>";