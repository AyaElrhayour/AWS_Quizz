<?php 

require_once ('../dao/crudDao.php');


class AnswerDao extends CrudDao {
  
    public function __construct(){
        parent::__construct();
        $this->tablename = 'answer';
        
    }
    public function getAllAnswers(){
      return $this->getAll();
    }
    
    public function getAnswersOfQuestion($questionId){
      $request = $this->db->prepare("SELECT * FROM {$this->tablename} WHERE q_id = :q_id");
      $request->bindParam(":q_id",$questionId);
      $request->execute();
      return $request->fetchAll(PDO::FETCH_ASSOC);
    }

}

?>