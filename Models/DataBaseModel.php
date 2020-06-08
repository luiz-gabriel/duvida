<?php

  namespace Models;

  class DataBaseModel{
  private static $pdo; 

  private static $Host = 'localhost';
  private static $User = 'root';
  private static $Password = '';
  private static $DataBase = 'iniki';

  public function Connect(){
    if (self::$pdo == null)
    {
        try{
          self::$pdo = new PDO('mysql:host='.self::$Host.';dbname='.self::$DataBase,self::$User,self::$Password,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

          self::$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        }catch(Exception $e){
          echo $e;
        }
    }

    return self::$pdo; 
    }
  }


  