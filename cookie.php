<?php

if(isset($_COOKIE['curl_session_cookie'])) {
    $cook = true;
    echo "Сессионая кука";
}

if(isset($_COOKIE['curl_normal_cookie'])) {
    $cook = true;
    echo "Нормальная кука";
}

setcookie('curl_session_cookie', 1);
setcookie('curl_normal_cookie', 1);

if($cook) {
    echo "Я тебя знаю";
} else {
    echo "Ты новенький";
}