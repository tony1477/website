<?php
    
namespace WPG\IT\Website\models;
use WPG\IT\Website\core\Database;
class InfoModel {
    private $table = 'article';
    private $db;
    
    public function __construct()
    {
        $this->db = new Database;
    }

    public function saveContactUs($data)
    {
        $query = 'insert into contact(about,name,company,address,phone,email,message) values (:about,:name,:company,:address,:phone,:email,:message)';
        $this->db->query($query);
        $this->db->bind('about',$data['perihal']);
        $this->db->bind('name',$data['nama']);
        $this->db->bind('company',$data['perusahaan']);
        $this->db->bind('address',$data['alamat']);
        $this->db->bind('phone',$data['phone']);
        $this->db->bind('email',$data['email']);
        $this->db->bind('message',$data['pesan']);
        return $this->db->execute();
    }
}