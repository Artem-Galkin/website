<?
class clMysql
{
  var $host = '';
  var $user = '';
  var $pass = '';
  var $dbname = '';
  var $db_connect = '';

}

public function __construct{
include $_SERVER['DOCUMENT_ROOT'].'/test/config.php';   //проверить подключение


this->host = $host;
  this->pass = $pass;
  this->user = $user;
  this->dbname = $dbname;


  // Подключаемся
  $link = @mysql_connect($this->host, $this->user, $this->pass);

  // Таблицу выбираем
  @mysql_select_db($this->dbname, $link);

  // Делаем запрос

  $r = @mysql_query("SELECT * FROM profile", $link);

  // Получаем первый объект

  $r1 = @mysql_fetch_object($r);




  $r2 = @mysql_fetch_object($r);
  $r3 = @mysql_fetch_object($r);


// print_r($r1);

// print_r($r2);

// print_r($r3);





}



class Row{

var $resMysql = '';

public function __construct()
{
  $this->resMysql = $resMysql;

}


}