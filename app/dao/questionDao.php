<?php 

require_once ('./crudDao.php');


class QuestionDao extends CrudDao {

    public function __construct(){
        parent::__construct();
        $this->tablename = 'question';
    }
    public function getAllQuestions(){
      return $this->getAll();
    }


}

?>