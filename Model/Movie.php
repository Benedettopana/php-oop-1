<?php 

  class Movie{
    public $title;
    public $desc;
    public $year;

    function __construct(string $_title,string $_desc,int $_year){
      $this->setTitle($_title);
      $this->setDesc($_desc);
      $this->setYear($_year);
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

  }
?>