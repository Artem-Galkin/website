<?php
// https://www.youtube.com/watch?v=VpenlM0NFYo&list=PLM7wFzahDYnHdnEp8Nn_jD_jxYaWLnsyG&index=10

// 1. Размер файла
echo filesize('t1.txt');


// 2. Создаём файл
$fp = fopen('date.txt','w');
  $a = fwrite($fp, date('Y m d H:i:s', time()));
  var_dump($a);
fclose($fp);


// 3. читать файл

$filename = "date.txt";
$handle = fopen($filename, "r"); // где "r" - режимы открытия. !!!! Режимы бывают разные - смотри подсказки.
$contents = fread($handle, filesize($filename));
fclose($handle);
echo '<br>';
var_dump($contents);
echo '<br>';


// 4. Получать содержимое папки
echo '<br>';
echo '<br>';
if ($handle = opendir('')) {
    while (false !== ($entry = readdir($handle))) {
        if ($entry != "." && $entry != "..") {
            echo "$entry<br>";
           
        }
    }
    closedir($handle);
}