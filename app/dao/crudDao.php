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
}
