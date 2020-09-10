<?php
class Book
{
  public $judul;
  public $penulis;
  public $JenisBuku;

  public function __construct($judul, $penulis, $JenisBuku)
  {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->JenisBuku = $JenisBuku;
  }
}
