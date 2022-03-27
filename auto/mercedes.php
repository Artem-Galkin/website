<?php

include_once "driver.php";

/** класс для работы с авто Mercedes
*
*/
class Mercedes extends driver 

{

    public function __construct($name = "Название не указано")
    {
        $this -> name = $name;
    }



}