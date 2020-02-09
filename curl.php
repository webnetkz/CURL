<?php

    $cookieFile = 'C:/users/unix/downloads/1/ospanel/userdata/temp/curl/cookie.txt';

    $ch = curl_init('https://alan-trade.kz'); // Инициализация дискриптора потока

     // Позволяет сохранять данные в переменную
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
     // Позволяет получать заголовки в виде ответа сервера
    curl_setopt($ch, CURLOPT_HEADER, true);
     // Позволяет получать только закоголвки ответов, без контента
    curl_setopt($ch, CURLOPT_NOBODY, true);
    // Следовать за редиректом, если в заголовках от сервера пришел ответ с перенаправлением
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
     // Позволяет отключить проверки сертификата и подключаться по HTTPS протоколу
    //curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    //curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
     // Устанавливает куки
    //curl_setopt($ch, CURLOPT_COOKIE, 'curl_session_cookie=1;');
     // Записывает куки в файл
    //curl_setopt($ch, CURLOPT_COOKIEJAR, $cookieFile);
     // Читает куки с файла
    //curl_setopt($ch, CURLOPT_COOKIEFILE, $cookieFile);

    $data = curl_exec($ch); // Получение данных в переменую

    curl_close($ch); // Закрывает дискриптор потока

    echo '<pre>';
    var_dump($data);