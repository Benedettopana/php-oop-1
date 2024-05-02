<?php 

  class Movie{
    public $title;
    public $desc;
    public $year;
    public $genre;

    function __construct(string $_title,string $_desc,int $_year, array $_genre){
      $this->setTitle($_title);
      $this->setDesc($_desc);
      $this->setYear($_year);
      $this->setGenre($_genre);
    }

    public function setTitle($_title){
      $this->title = $_title;
    }
    public function setDesc($_desc){
      $this->desc = $_desc;
    }
    public function setYear($_year){
      $this->year = $_year;
    }
    public function setGenre($_genre){
      $this->genre = $_genre;
    }

  }
?>