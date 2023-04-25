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
    
    $this->table = 'career';
    $this->db->query("select careerid,postdate,lastdate,title,location,requirement,jobdesc,notes,position from ".$this->table." where status = :status {$where}");
    $this->db->bind(':status',1);
    
    if($where!=null) {
      $this->db->bind(':careerid',$id); 
      return $this->db->fetch();
    } 
    return $this->db->fetchAll();
  }

  public function getDataEmployee($employeeid)
  {
    $this->table = 'new_employee';
    $this->db->query('select careerid,lower(replace(fullname," ","-")) as fullname from '.$this->table.' where employeeid = :employeeid');
    $this->db->bind('employeeid',$employeeid);
    return $this->db->fetch();
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

  public function updateQuestion($data)
  {
    $this->table = 'new_employee';
    $sql = 'update '.$this->table.' set question1=:question1, question2=:question2, question3=:question3, question4=:question4, question5=:question5 where employeeid = :employeeid';
    $this->db->query($sql);
    $this->db->bind('question1',$data['pertanyaan1']);
    $this->db->bind('question2',$data['pertanyaan2']);
    $this->db->bind('question3',$data['pertanyaan3']);
    $this->db->bind('question4',$data['pertanyaan4']);
    $this->db->bind('question5',$data['pertanyaan5']);
    $this->db->bind('employeeid',$data['employeeid']);
    $this->db->execute();
  }

  public function updateDoc($file,$type,$employeeid)
  {
    $this->table = 'new_employee';
    $sql = 'update '.$this->table.' set '.$type. '=:type where employeeid = :employeeid';
    $this->db->query($sql);
    $this->db->bind('type',$file);
    $this->db->bind('employeeid',$employeeid);
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

  public function getDataIdentityCard($employeeid)
  {
    $this->table = 'emp_identitycard';
    $this->db->query('select identityid,card_type,card_number,card_publisher,card_expired from '.$this->table.' where employeeid = :employeeid');
    $this->db->bind('employeeid',$employeeid);
    return $this->db->fetchAll();
  }

  public function delIdentityCard($identityid)
  {
    $this->table = 'emp_identitycard';
    $this->db->query('delete from '.$this->table.' where identityid = :identityid');
    $this->db->bind('identityid',$identityid);
    $this->db->execute();
  }

  public function updateIdentityCard($data)
  {
    $this->table = 'emp_identitycard';
    $sql = 'update '.$this->table.' set card_type=:card_type, card_number=:card_number, card_publisher=:card_publisher, card_expired=:card_expired where identityid = :identityid';
    $this->db->query($sql);
    $this->db->bind('card_type',$data['jenisidentitas']);
    $this->db->bind('card_number',$data['noidentitas']);
    $this->db->bind('card_publisher',$data['penerbit']);
    $this->db->bind('card_expired',$data['tglkadaluarsa']);
    $this->db->bind('identityid',$data['identityid']);
    $this->db->execute();
  }

  public function saveEducationHistory($data)
  {
    $this->table = 'emp_historyeducation';
    $sql = 'insert into '.$this->table.' (employeeid,title,major,institute,start_year,end_year) values (:employeeid,:title,:major,:institute,:start_year,:end_year)';
    $this->db->query($sql);
    $this->db->bind('employeeid',$data['employeeid']);
    $this->db->bind('title',$data['jenispendidikan']);
    $this->db->bind('major',$data['jurusan']);
    $this->db->bind('institute',$data['institusi']);
    $this->db->bind('start_year',$data['thnmasuk']);
    $this->db->bind('end_year',$data['thnselesai']);
    $this->db->execute();
  }

  public function getDataEducationHistory($employeeid)
  {
    $this->table = 'emp_historyeducation';
    $this->db->query('select educationid,title,major,institute,start_year,end_year from '.$this->table.' where employeeid = :employeeid');
    $this->db->bind('employeeid',$employeeid);
    return $this->db->fetchAll();
  }

  public function delEducationHistory($educationid)
  {
    $this->table = 'emp_historyeducation';
    $this->db->query('delete from '.$this->table.' where educationid = :educationid');
    $this->db->bind('educationid',$educationid);
    $this->db->execute();
  }

  public function updateEducationHistory($data)
  {
    $this->table = 'emp_historyeducation';
    $sql = 'update '.$this->table.' set title=:title, major=:major, institute=:institute, start_year=:start_year, end_year=:end_year where educationid = :educationid';
    $this->db->query($sql);
    $this->db->bind('title',$data['jenispendidikan']);
    $this->db->bind('major',$data['jurusan']);
    $this->db->bind('institute',$data['institusi']);
    $this->db->bind('start_year',$data['thnmasuk']);
    $this->db->bind('end_year',$data['thnselesai']);
    $this->db->bind('educationid',$data['educationid']);
    $this->db->execute();
  }

  public function saveWorkExperience($data)
  {
    $this->table = 'emp_workexperience';
    $sql = 'insert into '.$this->table.' (employeeid,company,position,start_date,end_date,job_desc,reason_leave,last_wage) values (:employeeid,:company,:position,:start_date,:end_date,:job_desc,:reason_leave,:last_wage)';
    $this->db->query($sql);
    $this->db->bind('employeeid',$data['employeeid']);
    $this->db->bind('company',$data['perusahaan']);
    $this->db->bind('position',$data['jabatan']);
    $this->db->bind('start_date',$data['tglgabung']);
    $this->db->bind('end_date',$data['tglselesai']);
    $this->db->bind('job_desc',$data['tugas']);
    $this->db->bind('reason_leave',$data['alasankeluar']);
    $this->db->bind('last_wage',$data['gajiterakhir']);
    $this->db->execute();
  }

  public function getDataWorkExperience($employeeid)
  {
    $this->table = 'emp_workexperience';
    $this->db->query('select experienceid,company,position,start_date,end_date,job_desc,reason_leave,last_wage from '.$this->table.' where employeeid = :employeeid');
    $this->db->bind('employeeid',$employeeid);
    return $this->db->fetchAll();
  }

  public function delWorkExperience($experienceid)
  {
    $this->table = 'emp_workexperience';
    $this->db->query('delete from '.$this->table.' where experienceid = :experienceid');
    $this->db->bind('experienceid',$experienceid);
    $this->db->execute();
  }

  public function updateWorkExperience($data)
  {
    $this->table = 'emp_workexperience';
    $sql = 'update '.$this->table.' set company=:company, position=:position, start_date=:start_date, end_date=:end_date, job_desc=:job_desc, reason_leave=:reason_leave, last_wage=:last_wage where experienceid = :experienceid';
    $this->db->query($sql);
    $this->db->bind('company',$data['perusahaan']);
    $this->db->bind('position',$data['jabatan']);
    $this->db->bind('start_date',$data['tglgabung']);
    $this->db->bind('end_date',$data['tglselesai']);
    $this->db->bind('job_desc',$data['tugas']);
    $this->db->bind('reason_leave',$data['alasankeluar']);
    $this->db->bind('last_wage',$data['gajiterakhir']);
    $this->db->bind('experienceid',$data['experienceid']);
    $this->db->execute();
  }

  public function saveFamily($data)
  {
    $this->table = 'emp_family';
    $sql = 'insert into '.$this->table.' (employeeid,relation,name,last_education,occupation,birthcity,birthdate,isalmarhum,company,address_company) values (:employeeid,:relation,:name,:last_education,:occupation,:birthcity,:birthdate,:isalmarhum,:company,:address_company)';
    $this->db->query($sql);
    $this->db->bind('employeeid',$data['employeeid']);
    $this->db->bind('relation',$data['hubungan']);
    $this->db->bind('name',$data['nama']);
    $this->db->bind('last_education',$data['pendidikan']);
    $this->db->bind('occupation',$data['pekerjaan']);
    $this->db->bind('birthcity',$data['tempatlahir']);
    $this->db->bind('birthdate',$data['tgllahir']);
    $this->db->bind('isalmarhum',$data['isalmarhum']);
    $this->db->bind('company',$data['perusahaan']);
    $this->db->bind('address_company',$data['alamatperusahaan']);
    $this->db->execute();
  }

  public function getDataFamily($employeeid)
  {
    $this->table = 'emp_family';
    $this->db->query('select familyid,relation,name,last_education,occupation,birthcity,birthdate,isalmarhum,company,address_company from '.$this->table.' where employeeid = :employeeid');
    $this->db->bind('employeeid',$employeeid);
    return $this->db->fetchAll();
  }

  public function delFamily($familyid)
  {
    $this->table = 'emp_family';
    $this->db->query('delete from '.$this->table.' where familyid = :familyid');
    $this->db->bind('familyid',$familyid);
    $this->db->execute();
  }

  public function updateFamily($data)
  {
    $this->table = 'emp_family';
    $sql = 'update '.$this->table.' set relation=:relation, name=:name, last_education=:last_education, occupation=:occupation, birthcity=:birthcity, birthdate=:birthdate, isalmarhum=:isalmarhum, company=:company, address_company=:address_company where familyid = :familyid';
    $this->db->query($sql);
    $this->db->bind('relation',$data['hubungan']);
    $this->db->bind('name',$data['nama']);
    $this->db->bind('last_education',$data['pendidikan']);
    $this->db->bind('occupation',$data['pekerjaan']);
    $this->db->bind('birthcity',$data['tempatlahir']);
    $this->db->bind('birthdate',$data['tgllahir']);
    $this->db->bind('isalmarhum',$data['isalmarhum']);
    $this->db->bind('company',$data['perusahaan']);
    $this->db->bind('address_company',$data['alamatperusahaan']);
    $this->db->bind('familyid',$data['familyid']);
    $this->db->execute();
  }

  public function saveEmergencyContact($data)
  {
    $this->table = 'emp_emergencycontact';
    $sql = 'insert into '.$this->table.' (employeeid,relation,name,phone,address) values (:employeeid,:relation,:name,:phone,:address)';
    $this->db->query($sql);
    $this->db->bind('employeeid',$data['employeeid']);
    $this->db->bind('relation',$data['hubungan']);
    $this->db->bind('name',$data['nama']);
    $this->db->bind('phone',$data['telp']);
    $this->db->bind('address',$data['alamat']);
    $this->db->execute();
  }

  public function getDataEmergencyContact($employeeid)
  {
    $this->table = 'emp_emergencycontact';
    $this->db->query('select emergencyid,relation,name,phone,address from '.$this->table.' where employeeid = :employeeid');
    $this->db->bind('employeeid',$employeeid);
    return $this->db->fetchAll();
  }

  public function delEmergencyContact($emergencyid)
  {
    $this->table = 'emp_emergencycontact';
    $this->db->query('delete from '.$this->table.' where emergencyid = :emergencyid');
    $this->db->bind('emergencyid',$emergencyid);
    $this->db->execute();
  }

  public function updateEmergencyContact($data)
  {
    $this->table = 'emp_emergencycontact';
    $sql = 'update '.$this->table.' set relation=:relation, name=:name, phone=:phone, address=:address where emergencyid = :emergencyid';
    $this->db->query($sql);
    $this->db->bind('relation',$data['hubungan']);
    $this->db->bind('name',$data['nama']);
    $this->db->bind('phone',$data['telp']);
    $this->db->bind('address',$data['alamat']);
    $this->db->bind('emergencyid',$data['emergencyid']);
    $this->db->execute();
  }

  public function saveOrganization($data)
  {
    $this->table = 'emp_organization';
    $sql = 'insert into '.$this->table.' (employeeid,name,position,startdate,enddate,jobdesc) values (:employeeid,:name,:position,:startdate,:enddate,:jobdesc)';
    $this->db->query($sql);
    $this->db->bind('employeeid',$data['employeeid']);
    $this->db->bind('name',$data['nama']);
    $this->db->bind('position',$data['posisi']);
    $this->db->bind('startdate',$data['tglmulai']);
    $this->db->bind('enddate',$data['tglselesai']);
    $this->db->bind('jobdesc',$data['pekerjaan']);
    $this->db->execute();
  }

  public function getDataOrganization($employeeid)
  {
    $this->table = 'emp_organization';
    $this->db->query('select organizationid,name,position,startdate,enddate,jobdesc from '.$this->table.' where employeeid = :employeeid');
    $this->db->bind('employeeid',$employeeid);
    return $this->db->fetchAll();
  }

  public function delOrganization($organizationid)
  {
    $this->table = 'emp_organization';
    $this->db->query('delete from '.$this->table.' where organizationid = :organizationid');
    $this->db->bind('organizationid',$organizationid);
    $this->db->execute();
  }

  public function updateOrganization($data)
  {
    $this->table = 'emp_organization';
    $sql = 'update '.$this->table.' set name=:name, position=:position, startdate=:startdate, enddate=:enddate, jobdesc=:jobdesc where organizationid = :organizationid';
    $this->db->query($sql);
    $this->db->bind('name',$data['nama']);
    $this->db->bind('position',$data['posisi']);
    $this->db->bind('startdate',$data['tglmulai']);
    $this->db->bind('enddate',$data['tglselesai']);
    $this->db->bind('jobdesc',$data['pekerjaan']);
    $this->db->bind('organizationid',$data['organizationid']);
    $this->db->execute();
  }

  public function getFile($employeeid,$type)
  {
    $this->table = 'new_employee';
    $this->db->query('select '.$type.' from '.$this->table.' where employeeid = :employeeid');
    $this->db->bind('employeeid',$employeeid);
    return $this->db->fetch();
  }

  public function getRowsofTable($table,$employeeid)
  {
    $this->db->query("select ifnull(count(1),0) as total from ".$table." where employeeid = :employeeid");
    $this->db->bind('employeeid',$employeeid);
    return $this->db->fetch();
  }
}
