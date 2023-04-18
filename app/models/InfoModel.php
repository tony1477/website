<?php
    class InfoModel {
        private $table = 'article';
        private $db;
      
        public function __construct()
        {
          $this->db = new Database;
        }

        public function saveContactUs($data)
        {
            $query = 'insert into contact(perihal,nama,perusahaan,alamat,notelp,email,pesan) values (:perihal,:nama,:perusahaan,:alamat,:notelp,:email,:pesan)';
            $this->db->query($query);
            $this->db->bind('perihal',$data['perihal']);
            $this->db->bind('nama',$data['nama']);
            $this->db->bind('perusahaan',$data['perusahaan']);
            $this->db->bind('alamat',$data['alamat']);
            $this->db->bind('notelp',$data['phone']);
            $this->db->bind('email',$data['email']);
            $this->db->bind('pesan',$data['pesan']);
            return $this->db->execute();
        }
    }