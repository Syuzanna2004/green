<?php
    include('../config/constants.php'); 
    include('login-check.php');
?>

<html>
    <head>
    <title>зеленый - панель администратора</title>
    <link rel="stylesheet" href="../css_admin/admin.css">
    </head>
    <body>

        <div class="menu text-center">
            <div class="wrapper">
            <ul>
                <li><a href="index.php">Главная</a></li>
                <li><a href="manage-admin.php">Администратори</a></li>
                <li><a href="manage-category.php">Категории</a></li>
                <li><a href="manage-plants.php">Растения</a></li>
                <li><a href="manage-order.php">Заказы</a></li>
                <li><a href="logout.php">Выйти</a></li>
            </ul>
            </div>
        </div>
</body>
</html>
