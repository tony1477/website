<?php

class ContentModel {
    private $db;
    private $table = 'content';

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getData($position) 
    {
        $this->db->query('select text_id, text_en from '.$this->table.' where position = :position and status = :status');
        $this->db->bind('position',$position);
        $this->db->bind('status',1);
        return $this->db->fetch();
    }
}