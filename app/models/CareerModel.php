<?php

class CareerModel {

  private $table = 'career';
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getData($id) {
    $where = null;
    if($id!=null) $where = ' and careerid = :careerid';
    
    $this->db->query("select careerid,postdate,lastdate,title,location,requirement,jobdesc,notes,position from ".$this->table." where status = :status {$where}");
    $this->db->bind(':status',1);
    
    if($where!=null) $this->db->bind(':careerid',$id);
    return $this->db->fetchAll();
  }

  public function saveProfile($data)
  {
    $this->table = 'new_employee';
    $sql = "insert into ".$this->table."(careerid,fullname,sex,birthcity,birthdate,status,nationally,npwp,isfresh,email,religion,postdate) values(:careerid,:fullname,:sex,:birthcity,:birthdate,:status,:nationally,:npwp,:isfresh,:email,:religion,:postdate)";
    $this->db->query($sql);
    $this->db->bind('careerid',$data['careerid']);
    $this->db->bind('fullname',$data['nama']);
    $this->db->bind('sex',$data['jenis']);
    $this->db->bind('birthcity',$data['tempat']);
    $this->db->bind('birthdate',$data['tanggal']);
    $this->db->bind('status',$data['status']);
    $this->db->bind('nationally',$data['nasional']);
    $this->db->bind('npwp',$data['npwp']);
    $this->db->bind('isfresh',$data['fresh']);
    $this->db->bind('email',$data['email']);
    $this->db->bind('religion',$data['agama']);
    $this->db->bind('postdate',date('Y-m-d'));
    $this->db->execute();

    $employeeid = $this->db->lastInsertId();
    return $employeeid;
  }

  public function updateProfile($data)
  {
    $this->table = 'new_employee';
    $sql = 'update '.$this->table.' set fullname=:fullname, sex=:sex, birthcity=:birthcity, birthdate=:birthdate, status=:status, nationally=:nationally, npwp=:npwp, isfresh=:isfresh, email=:email, religion=:religion where employeeid = :employeeid';
    $this->db->query($sql);
    $this->db->bind('fullname',$data['nama']);
    $this->db->bind('sex',$data['jenis']);
    $this->db->bind('birthcity',$data['tempat']);
    $this->db->bind('birthdate',$data['tanggal']);
    $this->db->bind('status',$data['status']);
    $this->db->bind('nationally',$data['nasional']);
    $this->db->bind('npwp',$data['npwp']);
    $this->db->bind('isfresh',$data['fresh']);
    $this->db->bind('email',$data['email']);
    $this->db->bind('religion',$data['agama']);
    $this->db->bind('employeeid',$data['employeeid']);
    $this->db->execute();
  }

  public function updateIdentityContact($data)
  {
    $this->table = 'new_employee';
    $sql = 'update '.$this->table.' set address_ktp=:address_ktp, address_real=:address_real, mobilephone=:mobilephone where employeeid = :employeeid';
    $this->db->query($sql);
    $this->db->bind('address_ktp',$data['alamat1']);
    $this->db->bind('address_real',$data['alamat2']);
    $this->db->bind('mobilephone',$data['nohp']);
    $this->db->bind('employeeid',$data['employeeid']);
    $this->db->execute();
  }

  public function saveIdentityCard($data)
  {
    $this->table = 'emp_identitycard';
    $sql = 'insert into '.$this->table.' (employeeid,card_type,card_number,card_publisher,card_expired) values (:employeeid,:card_type,:card_number,:card_publisher,:card_expired)';
    $this->db->query($sql);
    $this->db->bind('employeeid',$data['employeeid']);
    $this->db->bind('card_type',$data['jenisidentitas']);
    $this->db->bind('card_number',$data['noidentitas']);
    $this->db->bind('card_publisher',$data['penerbit']);
    $this->db->bind('card_expired',$data['tglkadaluarsa']);
    $this->db->execute();
  }
}
