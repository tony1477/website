<?php

class BusinessModel {

  private $table = 'article';
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getPlantation() {
    $this->db->query('select articleid,title,content from '.$this->table." where pageid = :pageid and status=:status");
    $this->db->bind('pageid',7);
    $this->db->bind('status',1);
    return $this->db->fetch();
  }

  public function getMill() {
    $this->db->query('select articleid,title,content from '.$this->table." where pageid = :pageid and status=:status");
    $this->db->bind('pageid',8);
    $this->db->bind('status',1);
    return $this->db->fetch();
  }

  public function getTrading() {
    $this->db->query('select articleid,title,content from '.$this->table." where pageid = :pageid and status=:status");
    $this->db->bind('pageid',9);
    $this->db->bind('status',1);
    return $this->db->fetch();
  }

  public function getFnb() {
    $this->db->query('select articleid,title,content from '.$this->table." where pageid = :pageid and status=:status");
    $this->db->bind('pageid',10);
    $this->db->bind('status',1);
    return $this->db->fetch();
  }
}