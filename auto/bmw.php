<?php

include_once "driver.php";

// класс для работы с авто BMW.

class Bmw extends Driver



{
  

    public function __construct($name = "Название не указано")
    {
        $this -> name = $name;
    }

    Public function getName()
    {
        return "Concern ".  $this->name;
    }  





}


