# PHP + MySQL Docker Login System

Този проект демонстрира базова уеб система за регистрация и вход на потребители, използвайки:

- ✅ PHP 8.2 с Apache
- ✅ MySQL 8
- ✅ Docker и Docker Compose
- ✅ Модерен dark/neon дизайн

---

## 📁 Структура на проекта

.
├── Dockerfile
├── docker-compose.yml
├── db/
│ └── init.sql # Скрипт за създаване на таблици
├── public/
│ ├── db.php # Конфигурация за връзка с MySQL
│ ├── index.php # Начална страница
│ ├── register.php # Регистрация
│ ├── login.php # Вход
│ └── test.php # Тестване на връзката с базата


---

## ▶️ Как да стартираш проекта

1. Клонирай или изтегли проекта:
   ```bash
   git clone https://github.com/your-username/your-repo.git
   cd your-repo

    Стартирай контейнерите:

docker-compose up --build

Отвори в браузър:

    http://localhost:8080

🛠 Функционалности

    Регистрация на потребители с хеширане на паролите (BCRYPT)

    Вход с проверка на хеш

    Визуален интерфейс с вграден CSS

    Автоматично създаване на MySQL таблицата при стартиране

📦 Зависимости

    PHP 8.2 + Apache

    MySQL 8.0

    Docker / Docker Compose

🔐 Бележки по сигурността

    За демонстрация се използва root/root като MySQL креденшъли.

    В продукционна среда използвайте .env файл и създайте отделен потребител за базата.

