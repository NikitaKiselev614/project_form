<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма входа</title>
    <link rel="stylesheet" href="/assets/css/styles.css">
</head>
<body>
    <div class="login-form-container">
        <h2>Вход</h2>
        <form action="login.php" method="POST" id="loginForm">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div class="form-group">
                <label for="password">Пароль:</label>
                <input type="password" name="password" id="password" required>
            </div>
            <div class="form-group">
                <label for="phone">Телефон:</label>
                <input type="tel" name="phone" id="phone" pattern="\+375 \d{2} \d{3}-\d{2}-\d{2}" required placeholder="+375 XX XXX-XX-XX">
            </div>
            <div class="form-group">
                <button type="submit" name="submit">Войти</button>
            </div>
        </form>
    </div>

    <!-- <script src="/assets/js/form-validation.js"></script> -->  
    <!-- скрипт не используется  -->
</body>
</html>