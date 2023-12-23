<?php 
 require_once('./app/dao/answerDao.php');

 class AnswerController{
  private $answerDao;
  
  public function __construct(){
    $this->answerDao = new AnswerDao();
  }

  public function getAnswers(){
    return $this->answerDao->getAllAnswers();
  }
 }

?>