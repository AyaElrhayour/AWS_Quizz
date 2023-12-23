<?php
require_once('./app/config/conexion.php');

class CrudDao
{
  private $db;
  protected $tablename;
  protected $All = ['*'];

  public function __construct()
  {
    $this->db = DB::getInstance()->getConnection();
  }
  protected function getAll()
  {
    $request = $this->db->prepare("SELECT " . implode(', ', $this->All) . " FROM {$this->tablename} ");
    $request->execute();
    // ORDER BY RAND() LIMIT 1
    return $request->fetchAll(PDO::FETCH_ASSOC);
  }

}
