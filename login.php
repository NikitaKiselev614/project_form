<?php
require_once('includes/functions.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $phone = $_POST['phone'] ?? '';


    $errors = validateFormData($email, $password, $phone);

    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<p style='color: red;'>{$error}</p>";
        }
        echo "<a href='index.php'>Вернуться на форму</a>";
        exit;
    }


    $users = loadUsers('data/users.json');

    $user = findUser($email, $phone, $users);

    if ($user && password_verify($password, $user['password'])) {
        echo "<h2>Добро пожаловать, {$user['email']}!</h2>";
        echo "<p>Email: {$user['email']}</p>";
        echo "<p>Телефон: {$user['phone']}</p>";
    } else {
        echo "<p style='color: red;'>Аутентификация не пройдена. Проверьте введённые данные.</p>";
        echo "<a href='index.php'>Вернуться на форму</a>";
    }
}

?>
