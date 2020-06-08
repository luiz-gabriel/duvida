<?php
  namespace Views;

  class HomeView
  {
    private $fileName;

    public function __construct($fileName){
        $this->fileName = $fileName;
    }

    public function render(){
    include('Pages/'.$this->fileName.'.php');
    }
  }