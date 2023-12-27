<?php 
 require_once('../dao/answerDao.php');

 class AnswerController{
  
  private $answerDao;
  
  public function __construct(){
    $this->answerDao = new AnswerDao();
  }

  public function getAnswers(){
    return $this->answerDao->getAllAnswers();
  }

  public function getAnswersOfQuestion($questionId){
    return $this->answerDao->getAnswersOfQuestion($questionId);
  }
 }

?> 