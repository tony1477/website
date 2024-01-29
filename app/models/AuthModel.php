<?php

namespace WPG\IT\Website\models;

use WPG\IT\Website\core\Database;

class AuthModel
{
    private $db ;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function store(array $data) :bool
    {
        try {
            // check if token was hit before
            // try to update other token 
            // to make expired
            if(count($this->checkAvailableToken($data['userid']))>0) $this->updateRestToken($data['userid']);
            
            $this->db->query('INSERT INTO authtoken (token,userid,issued,audience,issuedAt,notBefore,expired) VALUES(?,?,?,?,?,?,?)');
            $this->db->bind(1,$data['token']);
            $this->db->bind(2,$data['userid']);
            $this->db->bind(3,$data['issued']);
            $this->db->bind(4,$data['audience']);
            $this->db->bind(5,$data['issuedAt']);
            $this->db->bind(6,$data['notBefore']);
            $this->db->bind(7,$data['expired']);
            $this->db->execute();
            $this->db->close();
            return true;
        }
        catch(\Exception $e) {
            // for testing
            // $message = $e->getMessage();
            // return $message;
            return false;
        }
    }

    public function checkValidate(string $token) 
    {
        $this->db->query('select userid,issued,audience,issuedAt,notBefore,expired from authtoken where token = ? and expired > ? ');
        $this->db->bind(1,$token);
        $this->db->bind(2,time());
        return $this->db->fetch();
    }

    private function checkAvailableToken(string $userid) :?array
    {
        try {
            $this->db->query('SELECT id FROM authtoken WHERE userid = ? and expired > ? ');
            $this->db->bind(1,$userid);
            $this->db->bind(2,time());
            return $this->db->fetch();
        }
        catch(\Exception $e) {
            return null;
        }
    }

    private function updateRestToken(string $userid) :void
    {
        $this->db->query('UPDATE authtoken SET expired = ? WHERE userid = ? and expired > ?');
        $this->db->bind(1,time());
        $this->db->bind(2,$userid);
        $this->db->bind(3,time());
        $this->db->execute();
    }

    public function __destruct()
    {
        $this->db->close();
    }
}
