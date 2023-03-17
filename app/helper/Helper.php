<?php

class Helper {
  
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

  public function getContent(string $position) 
  {
    return $this->getBankofLang($position);
  }

  private function getBankofLang(string $position)
  {
    // check session of lang
    $folder = 'app/lang/id/lang.php'; 
    if($_SESSION['lang']==='en') $folder = 'app/lang/en/lang.php'; 
      // $bankArray = include $folder;
      include $folder;
      return $lang[$position];
  }
}