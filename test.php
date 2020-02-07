<?php
//О том, что мы авторизовались будем судить по наличию формы logout
function isAuth( $data ){
  return preg_match('Выйти',$data);
}
$ch = curl_init();
$url = 'http://curl/form.php';
curl_setopt($ch, CURLOPT_URL, $url ); // отправляем на
curl_setopt($ch, CURLOPT_HEADER, 0); // пустые заголовки
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); // возвратить то что вернул сервер
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); // следовать за редиректами
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);// таймаут4
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);// просто отключаем проверку сертификата
curl_setopt($ch, CURLOPT_POST, 1); // использовать данные в post
curl_setopt($ch, CURLOPT_POSTFIELDS, array(
  'one'=>'login',
  'send'=>'Отправить',
));
//echo isAuth($data = curl_exec($ch))?'Success':'Failed';
$out = curl_exec($ch);
$out .= 5555;
var_dump($out);
curl_close($ch);