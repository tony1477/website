<?php

namespace WPG\IT\Website\repository;
use WPG\IT\Website\core\Database;

class CareerRepository
{
    private Database $db;
    private const TABLENAME = 'new_employee';
    public function __construct()
    {
        $this->db = new Database();
    }

    public function getEmployees(array $filters) :array
    {
        $this->db->query('SELECT fullname,sex,birthcity,birthdate,`status`,nationally,npwp,
        isfresh,email,religion,address_ktp,address_real,mobilephone,postdate,ijazah,cv,photo 
        FROM '.self::TABLENAME.' limit ? offset ? ');
        $this->db->bind(1,$filters['length']);
        $this->db->bind(2,$filters['start']);
        return $this->db->fetchAll();
    }

    public function getDetail(int $id) :array
    {
        $this->db->query('select fullname FROM '.self::TABLENAME.' where employeeid = ?');
        $this->db->bind(1,$id);
        return $this->db->fetch();
    }

}
