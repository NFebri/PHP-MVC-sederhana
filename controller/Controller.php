<?php
include_once('model/Model.php');
class Controller
{
  public $model;
  public function __construct()
  {
    $this->model = new Model();
  }

  public function invoke()
  {
    if (!isset($_GET['book'])) {
      //tidak ada buku yg diminta, menampilkan daftar buku
      $book = $this->model->getBookList();
      include 'view/list.php';
    } else {
      //menampilkan buku yang diminta
      $book = $this->model->getBook($_GET['book']);
      include 'view/view.php';
    }
  }
}
