<?php

namespace WPG\IT\Website\models;
use WPG\IT\Website\core\Database;

class NewsModel {

  private $table = 'content_news';
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getPageNews($id=null) {
    $this->db->query('select newsid,title_id,highlight_id,title_en,highlight_en,slug,url,postdate,img from '.$this->table.' where status = :status order by postdate desc');
    $this->db->bind('status','1');
    return $this->db->fetchAll();
  }

  public function getDetailNews($url)
  {
    $this->db->query('select newsid,title_id,content_id,title_en,content_en,slug,url,postdate,img from '.$this->table.' where status = :status and url = :url');
    $this->db->bind('status','1');
    $this->db->bind('url',$url);
    return $this->db->fetch();
  }

}