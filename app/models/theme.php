<?php

require_once('./app/config/db.php');

class Theme{

  private $db;
  private $Id;
  private $Name;

  public function __construct()
  {
    $this->db = new db();
  }

  public function getId()
  {
    return $this->Id;
  }

  public function setId($id)
  {
    $this->Id = $id;
  }

  public function getName()
  {
    return $this->Name;
  }

  public function setName($name)
  {
    $this->Name = $name;
  }

}









?>