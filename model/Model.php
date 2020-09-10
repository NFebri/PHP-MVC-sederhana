<?php
include_once('model/Book.php');
class Model
{
  public function getBookList()
  {
    //kode array yg menstimulasi database
    return array(
      'Pemrograman Web' => new Book('Pemrograman Web', 'Bara', 'pemrograman'),
      'Pemrograman Berorientasi Objek' => new Book('Pemrograman Berorientasi Objek', 'Dinda', 'pemrograman'),
      'Pemrograman Perangkat Bergarak' => new Book('Pemrograman Perangkat Bergarak', 'Bramastya', 'pemrograman'),
    );
  }

  public function getBook($judul)
  {
    $allBooks = $this->getBookList();
    return $allBooks[$judul];
  }
}
