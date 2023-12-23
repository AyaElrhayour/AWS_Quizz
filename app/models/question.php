<?php



class Question
{

  private $id;
  private $t_id;
  private $question;
  private $explanation;

  public function __construct()
  {
  }

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getT_Id()
  {
    return $this->t_id;
  }

  public function setT_Id($t_id)
  {
    $this->t_id = $t_id;
  }

  public function getQuestion()
  {
    return $this->question;
  }

  public function setQuestion($question)
  {
    $this->question = $question;
  }

  public function getExplanation()
  {
    return $this->explanation;
  }

  public function setExplanation($explanation)
  {
    $this->explanation = $explanation;
  }
}
