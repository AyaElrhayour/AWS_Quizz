<?php 

require_once ('./crudDao.php');


class AnswerDao extends CrudDao {

    public function __construct(){
        parent::__construct();
        $this->tablename = 'answer';
    }
    public function getAllAnswers(){
      return $this->getAll();
    }


}

?>