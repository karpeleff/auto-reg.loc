<?php
class main
{
    protected  $url = 'https://dash.cloudflare.com/sign-up';

    function __construct()
    {

    }



  public  function  index()
  {
      $ch = curl_init();

      curl_setopt($ch, CURLOPT_URL, "https://dash.cloudflare.com/sign-up");

//curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
//Выполняем запрос
      curl_exec($ch);
//Завершает сеанс
      curl_close($ch);
  }


  public function test()
  {

      $url = 'https://dash.cloudflare.com/sign-up';
      $options = array(
          CURLOPT_RETURNTRANSFER => true,     // return web page
          CURLOPT_HEADER         => false,    // don't return headers
          CURLOPT_FOLLOWLOCATION => true,     // follow redirects
          CURLOPT_ENCODING       => "",       // handle all encodings
          CURLOPT_USERAGENT      => "spider", // who am i
          CURLOPT_AUTOREFERER    => true,     // set referer on redirect
          CURLOPT_CONNECTTIMEOUT => 120,      // timeout on connect
          CURLOPT_TIMEOUT        => 120,      // timeout on response
          CURLOPT_MAXREDIRS      => 10,       // stop after 10 redirects
          CURLOPT_CAINFO         => 'cacert.pem',
      );

      $ch      = curl_init( $url );
      curl_setopt_array( $ch, $options );
      $content = curl_exec( $ch );
      $err     = curl_errno( $ch );
      $errmsg  = curl_error( $ch );
      $header  = curl_getinfo( $ch );
      curl_close( $ch );

      $header['errno'] = $err;
      $header['errmsg'] = $errmsg;
      $header['content'] = $content;
      return $header;
  }



}

