<?php

class AboutModel {

  private $table = 'article';
  private $tablebod = 'management';
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getProfile($order) {
    $this->db->query('select articleid,title,content from '.$this->table.' where pageid = :pageid and status = :status and `order` = :urutan');
    $this->db->bind('pageid','1');
    $this->db->bind('status',1);
    $this->db->bind('urutan',$order); 
    return $this->db->fetch();
  }

  public function getStrategi() {
    $this->db->query('select articleid,title,content from '.$this->table." where pageid = :pageid and status=:status");
    $this->db->bind('pageid',3);
    $this->db->bind('status',1);
    return $this->db->fetch();
  }

  public function getBOD() {
    $this->db->query('select profilename,profileposition,profiledesc_id,profiledesc_en,profilephoto from '.$this->tablebod." where status=:status");
    $this->db->bind('status',1);
    return $this->db->fetchAll();
  }
}