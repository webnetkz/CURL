<?php
$url = 'https://api.alan-trade.kz:8001/api/auth/login/';
$postdata = [
    'username' => 'turakova',
    'password' => 'Aa19112019#'
];


function request($url, $postdata = null, $cookiefile = 'C:/users/unix/downloads/1/ospanel/userdata/temp/curl/cookie.txt') {

    $ch = curl_init($url); // Инициализация дискриптора потока

     // Позволяет сохранять данные в переменную
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
     // Позволяет получать заголовки в виде ответа сервера
    //curl_setopt($ch, CURLOPT_HEADER, true);
     // Позволяет получать только закоголвки ответов, без контента
    //curl_setopt($ch, CURLOPT_NOBODY, true);
    // Следовать за редиректом, если в заголовках от сервера пришел ответ с перенаправлением
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
     // Позволяет отключить проверки сертификата и подключаться по HTTPS протоколу
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    // User-Agent
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.103 Safari/537.36');
     // Устанавливает куки
    //curl_setopt($ch, CURLOPT_COOKIE, 'curl_session_cookie=1;');
     // Записывает куки в файл
    curl_setopt($ch, CURLOPT_COOKIEJAR, $cookieFile);
     // Читает куки с файла
    curl_setopt($ch, CURLOPT_COOKIEFILE, $cookieFile);

    if($postdata) { 
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
    }

    $data = curl_exec($ch); // Получение данных в переменую

    curl_close($ch); // Закрывает дискриптор потока
    return $data;
}

// Подчищаем файл куки данных
file_put_contents('C:/users/unix/downloads/1/ospanel/userdata/temp/curl/cookie.txt', '');

$data = request($url);


echo '<pre>';
var_dump($data);