<?php

include "./avto/bmw.php";
include "./avto/mercedes.php";


// проверка
if(isset($_GET['avto'])){

    switch ($_GET['avto']) {
        case "bmw":{
            echo "Пользователь ищет запчасти по BMW";

            $newClass = new Bmw("BMW");
            $newNever = new Bmw();
            // $newClass ->getName();
            $newNever ->getName();
        }

        break;


        case "mercedes":{
            echo "Пользователь ищет запчасти по mercedes";


        }

        break;

        case "mercedes":{
            echo "Пользователь ищет запчасти по mercedes";


        }

        break;





    }
}
