<?php

// класс для работы с авто BMW.

class bmw
{
    private $name;

    public function __construct($name = "Название не указано")
    {
        $this -> name = $name;
      
      
    }

    //** Доступен везде и всем */
    //** Метод для получения названия авто */
    //** return string - названия авто */
    Public function getName()
    {

        return $this->name;

    }  



}


