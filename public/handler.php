<?php
    require_once '../users.php';
    $errors = [];
    extract($_POST);

    foreach ($_POST as $k => $v) {
        if (empty($v)) $errors[] = "Заповніть поле {$k}";
    }

    if (!empty($email) && !str_contains($email, '@')) $errors[] = "Невірний формат email";

    if(!empty($email)) {
        $arr = array_column($users, 'email');

        if (in_array($email, $arr)) {
            $message = "Вказаний email {$email} вже використовується";
            $errors[] = $message;
            email_search_log($message);
        } else {
            email_search_log("Вказаний email {$email} не знайдено");
        }
    }

    if (!empty($password) && !empty($password_confirm) && $password !== $password_confirm) $errors[] = "Паролі не співпадають";

    if (empty($errors)) $users[] = $_POST;


    echo json_encode($errors);

    function email_search_log($str): void
    {
        $file = $_SERVER['DOCUMENT_ROOT'] . '/email_search_log.txt';
        file_put_contents($file, date("d-m-Y H:i:s") . " | " . $str . "\r\n", FILE_APPEND);
    }