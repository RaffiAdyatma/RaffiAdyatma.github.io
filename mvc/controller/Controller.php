<?php

include_once("model\Model.php");

class Controller{
    public $model;

    public function __construct() {
        $this->model = new Model();
    }

    public function invoke(){
        if (!isset($_GET['book'])) {
            $books=$this->model->getListBooks();
            include("view/ViewBookList.php");
        }
        else{
            $book=$this->model->getBook($_GET['book']);
            include("view/ViewBook.php");
        }
    }
}

?>