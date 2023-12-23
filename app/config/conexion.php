<?php 

class DB {
  private static $instance ;
  private $con;

  public function __construct(){
    $dns = 'mysql:host=' .DB_HOST. ';dbname=' .DB_NAME;
    $this->con = new PDO($dns , DB_USER, DB_PASS);
    $this->con->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
 }
 public static function getInstance() {
  if (!self::$instance) {
      self::$instance = new DB();
  }
  return self::$instance;
}

public function getConnection() {
  return $this->con;
}
}
?>