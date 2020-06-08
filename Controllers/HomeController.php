<?php
  namespace Controllers;

  class HomeController{

    private $view;

    public function __construct(){
      $this->view = new \Views\HomeView('home');
    }

    public function execute(){
      $this->view->render();
      HomeController::shortenUrl();
    }

    public function shortenUrl(){
      if(isset($_POST['acao']) && !$_POST['url'] == '' ){
        $url = $_POST['url'];
        //Filtra a url, evitando tentivas de invasão.
        $filterUrl = strip_tags($url, FILTER_SANITIZE_SPECIAL_CHARS);

        $cleanUrl = html_entity_decode($filterUrl, FILTER_SANITIZE_STRING);

        //Gera hash de até 8 carácteres, que sera gravado no bd
        $hash = \mt_rand(10000,99999)-1;
        //gera um id aleatorio, pois o usuario não está cadastrado.
        $id = \mt_rand(0,600000)-1;

        $register = new \Models\HomeModel;
        
      }else{
        echo 'erro';
      }
    }
  }