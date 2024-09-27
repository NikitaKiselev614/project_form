<?php

function loadUsers($filePath) {
    if (file_exists($filePath)) {
        $usersJson = file_get_contents($filePath);
        return json_decode($usersJson, true);
    }
    return [];
}

function findUser($email, $phone, $users) {
    foreach ($users as $user) {
        if ($user['email'] === $email && $user['phone'] === $phone) {
            return $user;
        }
    }
    return null;
}


function verifyPassword($inputPassword, $hashedPassword) {
    return password_verify($inputPassword, $hashedPassword);
}

function validateFormData($email, $password, $phone) {
    $errors = [];


    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Некорректный email';
    }

  
    if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/', $password)) {
        $errors[] = 'Пароль должен содержать минимум 8 символов, одну большую, одну маленькую буквы и одну цифру';
    }


    if (!preg_match('/^\+375 \d{2} \d{3}-\d{2}-\d{2}$/', $phone)) {
        $errors[] = 'Телефон должен быть в формате +375 XX XXX-XX-XX';
    }

    return $errors;
}
?>
