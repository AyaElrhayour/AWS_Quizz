<?php

require_once('./app/config/db.php');

class Answer{

  private $db;
  private $Id;
  private $Q_Id;
  private $Answer;
  private $Points;

  public function __construct()
  {
    $this->db = new db();
  }
  // public function __set($property, $value){
  //   $this->$property = $value;
  // }
  // public function __get($property){
  //   return $this->$property;
  // }

  // $object->__set("Answer", "aymane");
  // $test= $object->__get("ID");

  public function getId()
  {
    return $this->Id;
  }

  public function setId($id)
  {
    $this->Id = $id;
  }

  public function getQ_Id()
  {
    return $this->Q_Id;
  }

  public function setQ_Id($q_id)
  {
    $this->Q_Id = $q_id;
  }

  public function getAnswer()
  {
    return $this->Answer;
  }

  public function setAnswer($answer)
  {
    $this->Answer = $answer;
  }

  public function getPoints()
  {
    return $this->Points;
  }

  public function setPoints($points)
  {
    $this->Points = $points;
  }
}
