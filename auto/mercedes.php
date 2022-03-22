<?php



/** класс для работы с авто Mercedes
*
*/
class Mercedes
{
    private $name;

    public function __construct($name = "Название не указано")
    {
        $this -> name = $name;
    }


    /**
     * Доступен везде и всем. 
     * Метод для получения названия авто.
     * @return string - название авто (что возвращать)
     */
    public function getName()
    {
        return $this->name;
    }  
   

}