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


    //? Metodi SET
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
    //? /Metodi SET

    //? Metodi GET
    public function getTitle(){
      return $this->title;
    }
    public function getDesc(){
      return $this->desc;
    }
    public function getYear(){
      return $this->year;
    }
    public function getGenre(){
      return $this->genre;
    }
    //? /Metodi GET

  }
?>