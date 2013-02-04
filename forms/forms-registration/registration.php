<?php
    /*
        php for processing registration

        input parameters:
            registration form parameters

    */

    $login = $_POST['login'];
    $password = $_POST['password'];

    if ($login == 'test@test.com' && $password == '1111') {

        header("HTTP/1.1 200 Регистрация успешно завершена.");

        $json_data = '{
            "key": "value"
        }';

    }
    else {
        header("HTTP/1.1 401 Выберете другой логин или пароль.");
    }

    $json_data = str_replace("\r\n",'',$json_data);
    $json_data = str_replace("\n",'',$json_data);

    echo $json_data;

?>