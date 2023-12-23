<?php
require_once('../dao/questionDao.php');

class QuestionController
{
  private $questionDao;

  public function __construct()
  {
    $this->questionDao = new QuestionDao();
  }

  public function getQuestions()
  {
    return $this->questionDao->getAllQuestions();
  }

  public function getRandomQ()
  {
    return $this->questionDao->getRandomQuestion();
  }
}
// $questionController = new QuestionController();
// $randomQuestion = $questionController->getRandomQ();
// echo "<pre>";
// var_dump( $randomQuestion);