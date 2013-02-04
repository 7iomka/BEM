<?php
    /*
        php for processing registration

        input parameters:
            registration form parameters

    */

    $name = $_POST['name'];
    $email = $_POST['email'];
    $captcha = $_POST['captcha'];
    $comments = $_POST['comments'];

    if ($captcha == '486213') {

        header("HTTP/1.1 200 Спасибо.");

        $json_data = '{
            "key": "value"
        }';

    }
    else {
        header("HTTP/1.1 401 Неверный код.");
    }

    $json_data = str_replace("\r\n",'',$json_data);
    $json_data = str_replace("\n",'',$json_data);

    echo $json_data;

?>