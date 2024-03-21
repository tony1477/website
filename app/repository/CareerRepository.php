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
        $this->db->query('SELECT employeeid,fullname,sex,birthcity,birthdate,`status`,nationally,npwp,
        (select `title` from career c where c.careerid = a.careerid) as `position`,
        isfresh,email,religion,address_ktp,address_real,mobilephone,postdate,ijazah,cv,photo,
        question1,question2,question3,question4,question5
        FROM '.self::TABLENAME.' a WHERE fullname like ? limit ? offset ? ');
        $this->db->bind(1,'%'.$filters['search'].'%');
        $this->db->bind(2,$filters['length']);
        $this->db->bind(3,$filters['start']);
        return $this->db->fetchAll();
    }

    public function getDetail(int $id) :array
    {
        $this->db->query('SELECT employeeid,fullname,sex,birthcity,birthdate,`status`,nationally,npwp,
        (select `title` from career c where c.careerid = a.careerid) as `position`,
        isfresh,email,religion,address_ktp,address_real,mobilephone,postdate,ijazah,cv,photo,
        question1,question2,question3,question4,question5 FROM '.self::TABLENAME.' a WHERE employeeid = ?');
        $this->db->bind(1,$id);
        return $this->db->fetch();
    }

    public function getPhoto(int $id) :array
    {
        $this->db->query('SELECT photo FROM '.self::TABLENAME.' WHERE employeeid = ?');
        $this->db->bind(1,$id);
        return $this->db->fetch();
    }

    public function getIjazah(int $id) :array
    {
        $this->db->query('SELECT ijazah FROM '.self::TABLENAME.' WHERE employeeid = ?');
        $this->db->bind(1,$id);
        return $this->db->fetch();
    }

    public function getCv(int $id) :array
    {
        $this->db->query('SELECT cv FROM '.self::TABLENAME.' WHERE employeeid = ?');
        $this->db->bind(1,$id);
        return $this->db->fetch();
    }

    public function getEmployeeContact(int $id) :?array
    {
        $this->db->query('SELECT relation, `name`, phone, `address` FROM emp_emergencycontact WHERE employeeid = ?');
        $this->db->bind(1,$id);
        return $this->db->fetchAll();
    }

    public function getEmployeeFamily(int $id) :?array
    {
        $this->db->query('SELECT relation, `name`, last_education, occupation, birthcity, birthdate, isalmarhum, company, address_company
        FROM emp_family WHERE employeeid = ?');
        $this->db->bind(1,$id);
        return $this->db->fetchAll();
    }

    public function getEmployeeEducation(int $id) :?array
    {
        $this->db->query('SELECT title, major, institute, start_year, end_year FROM emp_historyeducation WHERE employeeid = ?');
        $this->db->bind(1,$id);
        return $this->db->fetchAll();
    }

    public function getEmployeeIdentity(int $id) :?array
    {
        $this->db->query('SELECT card_type, card_number, card_publisher, card_expired FROM emp_identitycard WHERE employeeid = ?');
        $this->db->bind(1,$id);
        return $this->db->fetchAll();
    }

    public function getEmployeeOrganization(int $id) :?array
    {
        $this->db->query('SELECT `name`, position, startdate, enddate, jobdesc FROM emp_organization WHERE employeeid = ?');
        $this->db->bind(1,$id);
        return $this->db->fetchAll();
    }

    public function getEmployeeWorkExperience(int $id) :?array
    {
        $this->db->query('SELECT company, position, `start_date`, end_date, job_desc, reason_leave, last_wage FROM emp_workexperience WHERE employeeid = ?');
        $this->db->bind(1,$id);
        return $this->db->fetchAll();
    }
}
