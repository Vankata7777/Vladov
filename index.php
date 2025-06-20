<!DOCTYPE html>
<html lang="bg">
<head>
    <meta charset="UTF-8">
    <title>Добре дошли в системата</title>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            background: #121212;
            color: #e0e0e0;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 40px;
        }

        h1 {
            color: #00ffff;
            margin-bottom: 10px;
        }

        p {
            max-width: 600px;
            text-align: center;
            margin-bottom: 30px;
        }

        ul.features {
            list-style: none;
            padding: 0;
            margin-bottom: 40px;
        }

        ul.features li::before {
            content: \"\\272A\";
            color: #ff00ff;
            padding-right: 10px;
        }

        .nav {
            display: flex;
            gap: 20px;
        }

        .nav a {
            text-decoration: none;
            padding: 10px 20px;
            background-color:rgb(255, 255, 255);
            border: 2px solid #00ffff;
            color: #00ffff;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .nav a:hover {
            background-color: #00ffff;
            color: #121212;
        }

        footer {
            margin-top: 60px;
            font-size: 0.9em;
            color: #666;
        }
    </style>
</head>
<body>
    <h1>PHP + MySQL DEMO</h1>
    <p>Това е демонстрационна уеб система, разработена с PHP 8, MySQL 8 и Docker. Тя включва основна потребителска регистрация и вход.</p>

    <ul class="features">
        <li>Контейнеризация с Docker</li>
        <li>MySQL база данни с автоматично създаване на таблици</li>
        <li>Формуляри за регистрация и вход</li>
    </ul>

    <div class="nav">
        <a href="register.php">Регистрация</a>
        <a href="login.php">Вход</a>
        <a href="test.php">Тест на базата</a>
    </div>
</body>
</html>
