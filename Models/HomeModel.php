<?php
  
  namespace Models;

  class HomeModel extends DataBaseModel{

    public function registerUrl(){
    $sql = Connect()->prepare("INSERT INTO `short` VALUES (null,?,?,?)");
    $sql->execute(array($id,$cleanUrl,$hash));
  }
}
