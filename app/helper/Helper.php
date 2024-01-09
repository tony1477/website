<?php

namespace WPG\IT\Website\helper;
use WPG\IT\Website\models\ContentModel;
use WPG\IT\Website\models\NewsModel;
class Helper {

  private $model;
  
  public function full_url() {
    return sprintf(
      "%s://%s%s",
      isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
      $_SERVER['SERVER_NAME'],
      $_SERVER['REQUEST_URI']
    );
  }

  public function getParam()
  {

  }

  public function getUrl()
  {
    return sprintf("%s", substr($_SERVER['QUERY_STRING'],4));
  }

  public function getContent($position) 
  {
    return $this->getBankofLang($position);
  }

  public function getContentDb($position) 
  {
    return $this->getContentFromDb($position);
  }

  private function getBankofLang($position) 
  {
    // check session of lang
    $folder = 'app/lang/id/lang.php'; 
    if($_SESSION['lang']==='en') $folder = 'app/lang/en/lang.php'; 
      // $bankArray = include $folder;
      include $folder;
      return $lang[$position];
  }

  private function getContentFromDb($position)
  {
    require_once 'app/models/ContentModel.php';
    $this->model = new ContentModel();
    $content = $this->model->getData($position);
    if($_SESSION['lang']=='id') return $content['text_id'];
    return $content['text_en'];
  }

  public function getNewsTitle($array) 
  {
    require_once 'app/models/NewsModel.php';
    $this->model = new NewsModel();
    if($_SESSION['lang']=='id') return $array['title_id'];
    return $array['title_en'];
  }

  public function getNewsHighlight($array) 
  {
    require_once 'app/models/NewsModel.php';
    $this->model = new NewsModel();
    if($_SESSION['lang']=='id') return $array['highlight_id'];
    return $array['highlight_en'];
  }

  public function getNewsContent($array) 
  {
    require_once 'app/models/NewsModel.php';
    $this->model = new NewsModel();
    if($_SESSION['lang']=='id') return $array['content_id'];
    return $array['content_en'];
  }
}