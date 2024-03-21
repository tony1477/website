<?php

namespace WPG\IT\Website\repository;

use WPG\IT\Website\core\Database;
use WPG\IT\Website\entity\Identity;

class IdentityRepository
{
    private Database $db;
    private const TABLENAME = 'authidentity';
    public function __construct()
    {
        $this->db = new Database();
    }

    public function verify(Identity $identity) :?Identity
    {
        $this->db->query('SELECT id,username,`password`,isactive FROM '.self::TABLENAME.' WHERE username = ? and isactive = ?');
        $this->db->bind(1,$identity->getUsername());
        $this->db->bind(2,1);
        $result = $this->db->fetch();
        if($result) {
            // verify password then
            if($this->hashPassword($identity->getPassword(),$result['password'])) {
                $identity->setId($result['id']);
                $identity->setHash($result['password']);
                return $identity;
            }
        }
        return null;
        // return $result;
    }

    private function hashPassword(string $password,string $hash) :bool
    {   
        if(password_verify($password, $hash)) return true;
        return false;
    }
}
