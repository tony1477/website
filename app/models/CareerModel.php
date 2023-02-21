<?php

class CareerModel {

  private $table = 'career';
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getData($id) {
    $where=null;
    $this->db->query('select careerid,postdate,lastdate,title,location,requirement,jobdesc,notes,position from '.$this->table." where status=:status {$where}");
    $this->db->bind('status',1);
    if($id!=null) {
      $where = ' and careerid = :careerid';
      $this->db->bind('careerid',$id);
    }
    return $this->db->fetchAll();
  }
}
