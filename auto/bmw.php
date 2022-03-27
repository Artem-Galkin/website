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

    private $getClirins;
    private $baseClirins;

    public function setClirins($clirins)
    {

        return = $this->getClirins = $clirins;
    }
    public function calculateClirins()
    {

        return = $this->getClirins + 50;
    }
    public function getClirins()
    {

        return $this->$baseClirins;
    }


}

class Img {
    //2000 строк
    public function setSrc($pic = "", $w = 20, $h = 10){}
    public function getResult(){}
    protected function prepareImg(){}
    private function reciseImages(){}


}

class ImgShape extends Img {

    public function setSrc($pic = "", $w = 20, $h = 10){
        parent::setSrc(null, $pic);
        return $this;
    }
    public function setZ($z){
        return $this;
    }
    public function getResult(){
        // логика
        $this->prepareIng();
        $this->prepareIng();
        parent::getResult();
        // логика
    }

    $img = new ImgShape();
    $images = $img->setSrc($img,100,200) -> setZ(40) -> getResalt();
    











}