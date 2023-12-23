<?php 
 require_once('./app/dao/questionDao.php');

 class QuestionController{
  private $questionDao;
  
  public function __construct(){
    $this->questionDao = new QuestionDao();
  }

  public function getQuestions(){
    return $this->questionDao->getAllQuestions();
  }
 }

?>