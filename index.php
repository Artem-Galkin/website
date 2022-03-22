<?php

include "./auto/bmw.php";
include "./auto/mercedes.php";


// проверка
if(isset($_GET['auto'])){

    echo "Пользователь выбрал автомобиль: \n\r";  
    switch ($_GET['auto']) {
            case "bmw":{
            // echo "Пользователь ищет запчасти по BMW";

            $newClass = new Bmw("bmw");
            break;
        }
            case "mercedes":{  
            $newClass = new Mercedes("Mercedes");
        }
            break;
            case "audi":{
            echo "Пользователь ищет запчасти по audi";
        }
            break;
    
    }

    $nameAuto = $newClass -> getName();
    //какая-то логика
    echo $nameAuto;

}