<?php

class SustainabilityModel {

  private $table = 'article';
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getPolicy() {
    $this->db->query('select articleid,title,content from '.$this->table." where pageid = :pageid and status=:status");
    $this->db->bind('pageid',12);
    $this->db->bind('status',1);
    return $this->db->fetch();
  }

  public function getCertification() {
    $this->db->query('select articleid,title,content from '.$this->table." where pageid = :pageid and status=:status");
    $this->db->bind('pageid',13);
    $this->db->bind('status',1);
    return $this->db->fetch();
  }

  public function getEnvironment() {
    $this->db->query('select articleid,title,content from '.$this->table." where pageid = :pageid and status=:status");
    $this->db->bind('pageid',14);
    $this->db->bind('status',1);
    return $this->db->fetch();
  }

  public function getCSR() {
    $this->db->query('select articleid,title,content from '.$this->table." where pageid = :pageid and status=:status");
    $this->db->bind('pageid',15);
    $this->db->bind('status',1);
    return $this->db->fetch();
  }

  public function getOSH() {
    $this->db->query('select articleid,title,content from '.$this->table." where pageid = :pageid and status=:status");
    $this->db->bind('pageid',16);
    $this->db->bind('status',1);
    return $this->db->fetch();
  }
}