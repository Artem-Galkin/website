<?php

/**
 * Базовый(родительский) класс автомобилей
 */
class Driver{

    protected $name;

    /**
     * Доступен везде и всем. 
     * Метод для получения названия авто.
     * @return string - название авто (что возвращать)
     */
    Public function getName()
    {
        return $this->name;
    }  


}