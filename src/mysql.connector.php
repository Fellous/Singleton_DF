<?php

try
{
    $db = new PDO('mysql:host=127.0.0.1;port=3306;dbname=bddqcm',
        'root',
        '',
        array( PDO::ATTR_PERSISTENT => false, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8')
    );
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}

// Exemple
//$recipesStatement = $db->prepare('SELECT * FROM etudiants');
//$recipesStatement->execute();
//$recipes = $recipesStatement->fetchAll();

class Singleton {
 
    /**
     * @var Singleton
     * @access private
     * @static
     */
     private static $_instance = null;
   
     /**
      * Constructeur de la classe
      *
      * @param void
      * @return void
      */
     private function __construct() {  
     }
   
     /**
      * Méthode qui crée l'unique instance de la classe
      * si elle n'existe pas encore puis la retourne.
      *
      * @param void
      * @return Singleton
      */
     public static function getInstance() {
   
       if(is_null(self::$_instance)) {
         self::$_instance = new Singleton();  
       }
   
       return self::$_instance;
     }
  }