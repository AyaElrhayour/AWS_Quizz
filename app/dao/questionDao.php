<?php

require_once('../dao/crudDao.php');


class QuestionDao extends CrudDao
{

  public function __construct()
  {
    parent::__construct();
    $this->tablename = 'question';
  }
  public function getAllQuestions()
  {
    return $this->getAll();
  }

  public function getRandomQuestion()
  {
    $request = $this->db->prepare("SELECT " . implode(', ', $this->All) . " FROM {$this->tablename} ORDER BY RAND() LIMIT 10 ");
    $request->execute();
    return $request->fetchAll(PDO::FETCH_ASSOC);
  }
}
