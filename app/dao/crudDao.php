<?php
require_once('../config/conexion.php');

class CrudDao
{
  protected $db;
  protected $tablename;
  protected $All = ['*'];

  public function __construct()
  {
    $this->db = DB::getInstance()->getConnection();
  }
  protected function getAll()
  {
    $request = $this->db->prepare("SELECT " . implode(', ', $this->All) . " FROM {$this->tablename}");
    $request->execute();
    return $request->fetchAll(PDO::FETCH_ASSOC);
  }

  protected function getRandom()
  {
    $request = $this->db->prepare("SELECT " . implode(', ', $this->All) . " FROM {$this->tablename} ORDER BY RAND() LIMIT 3 ");
    $request->execute();
    return $request->fetchAll(PDO::FETCH_ASSOC);
  }
}
