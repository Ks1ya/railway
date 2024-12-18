<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    echo "Доступ запрещен. Вы не являетесь администратором.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Админская Панель</title>
    <link rel="stylesheet" href="/Railway/admin.css">
</head>
<body>
    <header>
        <h1>Админская Панель</h1>
        <nav>
            <a href="logout.php">Выход</a>
        </nav>
    </header>
    <main>
        <h2>Добавить информацию о поезде</h2>
        <form action="add_ticket.php" method="POST">
            <div class="input-box">
                <input class="input-field" type="text" name="train_number" required>
                <label class="input-label">Номер поезда</label>
            </div>
            <div class="input-box">
                <input class="input-field" type="text" name="departure_station" required>
                <label class="input-label">Станция отправления</label>
            </div>
            <div class="input-box">
                <input class="input-field" type="text" name="arrival_station" required>
                <label class="input-label">Станция прибытия</label>
            </div>
            <div class="input-box">
                <input class="input-field" type="datetime-local" name="departure_time" required>
                <label class="input-label">Время отправления</label>
            </div>
            <div class="input-box">
                <input class="input-field" type="datetime-local" name="arrival_time" required>
                <label class="input-label">Время прибытия</label>
            </div>
            <div class="input-box">
                <input class="input-field" type="text" name="travel_time" required>
                <label class="input-label">Время в пути</label>
            </div>
            <div class="input-box">
                <input class="input-field" type="text" name="seat_type" required>
                <label class="input-label">Тип места</label>
            </div>
            <div class="input-box">
                <input class="input-field" type="number" name="price" step="0.01" required>
                <label class="input-label">Цена</label>
            </div>
            <button type="submit">Добавить билет</button>
        </form>
    </main>
</body>
</html>
