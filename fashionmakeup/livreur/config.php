<!--
<?php
class Database
{
    private static $dbName = 'projet' ;
    private static $dbHost = '' ;
    private static $dbUsername = 'root';
    private static $dbUserPassword = '';

    private static $cont  = null;

    public function __construct() {
        die('Init function is not allowed');
    }

    public static function connect()
    {
       // One connection through whole application
       if ( null == self::$cont )
       {
        try
        {
          self::$cont =  new PDO( "mysql:host=".self::$dbHost.";"."dbname=".self::$dbName, self::$dbUsername, self::$dbUserPassword);
        }
        catch(PDOException $e)
        {
          die($e->getMessage());
        }
       }
       return self::$cont;
    }

    public static function disconnect()
    {
        self::$cont = null;
    }
}
?>
-->
<?php

class Config
{
public static $db=NULL;
public static function getConnexion(){
  try{
if (!isset(self::$db)) {
self::$db=new PDO(
  'mysql:host=localhost;dbname=projet',
  'root', //login
  '' //password
);
self::$db->setAttribute(
  PDO::ATTR_ERRMODE,
  PDO::ERRMODE_EXCEPTION
);
}
}catch(Exeption $e){
  die('Erreur : '.$e.getMessage());
}
return self::$db;
}
}
Config::getConnexion();
?>
