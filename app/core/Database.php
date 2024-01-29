<?php

namespace WPG\IT\Website\core;
use WPG\IT\Website\core\Config;
class Database {
  private $host = Config::DB_HOST;
  private $user = Config::DB_USER;
  private $pass = Config::DB_PWD;
  private $db = Config::DB_NAME;

  private $dbh;
  private $stmt;

  public function __construct()
  {
    $dsn = 'mysql:host='.$this->host.';dbname='.$this->db;

    $option = [
      \PDO::ATTR_PERSISTENT => true,
      \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
    ];

    try {
      $this->dbh = new \PDO($dsn,$this->user,$this->pass,$option);
    } catch (\PDOException $e) {
      die($e->getMessage());
    }
  }

  public function query($query) {
    $this->stmt = $this->dbh->prepare($query);
  }

  public function bind($param,$value,$type=null) {
    if(is_null($type)) {
      switch(true) {
        case is_int($value):
          $type = \PDO::PARAM_INT;
          break;

        case is_bool($value):
          $type = \PDO::PARAM_BOOL;
          break;

        case is_null($value):
          $type = \PDO::PARAM_NULL;
          break;

        default:
          $type = \PDO::PARAM_STR;
      }
    }
    $this->stmt->bindValue($param,$value,$type);  
  }

  public function execute() {
    $this->stmt->execute();
  }

  public function fetchAll() {
    $this->execute();
    return $this->stmt->fetchAll(\PDO::FETCH_ASSOC);
  }

  public function fetch() {
    $this->execute();
    return $this->stmt->fetch(\PDO::FETCH_ASSOC);  
  }

  public function lastInsertId() {
    return $this->dbh->lastInsertId();
  }

  public function close() {
    return $this->stmt->closeCursor();
  }

  public function __destruct()
  {
    $this->dbh = null;
  }
}

