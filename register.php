<?php
require 'db.php';

$message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $password = password_hash($_POST["password"], PASSWORD_BCRYPT);

    $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $username, $password);

    if ($stmt->execute()) {
        $message = "✅ Регистрацията беше успешна!";
    } else {
        $message = "❌ Грешка: " . $stmt->error;
    }
}
?>
<!DOCTYPE html>
<html lang="bg">
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
    <style>
        body {
            background: #121212;
            color: #e0e0e0;
            font-family: 'Segoe UI', sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 50px;
        }
        h2 {
            color: #00ffff;
        }
        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
            width: 300px;
        }
        input {
            padding: 10px;
            border: 2px solid #00ffff;
            background: #1e1e1e;
            color: #fff;
            border-radius: 5px;
        }
        button {
            padding: 10px;
            background: #00ffff;
            color: #121212;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background: #00cccc;
        }
        .msg {
            margin-top: 20px;
            color: #90ee90;
        }
        a {
            color: #ff00ff;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <h2>Регистрация</h2>
    <form method="post">
        <input name="username" placeholder="Потребителско име" required>
        <input name="password" type="password" placeholder="Парола" required>
        <button type="submit">Създай акаунт</button>
    </form>
    <?php if ($message): ?>
        <div class="msg"><?= $message ?></div>
    <?php endif; ?>
    <a href="index.php">⬅ Обратно</a>
</body>
</html>
