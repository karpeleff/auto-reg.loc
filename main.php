<?php
class main
{
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
      echo 'i am test';
  }



}

