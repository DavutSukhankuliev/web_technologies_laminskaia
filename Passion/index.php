<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF8">
        <meta name="viewport" content="width=device-width, initial-scale=1">        
        <link rel="stylesheet" href="style.css">
        <title>Passion</title>
    </head>
    <?php require_once('core/connection_php_mysql.php');?>
    <body>
    <header class="clearfix">
    <div class="container">
            <div class="header-left">
                <h1>Passion</h1>
            </div>
            <div class="header-right">
                <label for="open">
                    <span class="hidden-desktop"></span>
                </label>
                <input type="checkbox" name="" id="open">
                <nav>
                    <a href="https://tsulab.ru/tsu/user19/Passion/index.php?button=1">Главная</a>
                    <a href="https://tsulab.ru/tsu/user19/Passion/index.php?button=2">Связаться с нами</a>
                    <a href="https://tsulab.ru/tsu/user19/Passion/index.php?button=3">Статистика</a>
                </nav>
            </div>
        </div>
    </header>
    <section class="clearfix">
        <div class="container">
            <div class="section-left">
                <h1 class="section-title">Ваши passionate хендмейкеры ждут заказа</h1>
                <h5 class="section-tagline">Данный сайт несёт ознакомительный характер</h5>
            </div>
            <div class="section-right">
                <form method="get" action="https://tsulab.ru/tsu/user19/Passion/index.php">
                    <button class="learn-more" name="button" value="4">Узнать больше!</button>
                </form>
            </div>
        </div>
    </section>

<?php

if (isset($_GET['button'])) {
    if ($_GET['button'] == 1 || empty($_GET['button'])) {
        require_once('sites/blog.php');
        require_once('sites/addNote.php');
    }
    elseif ($_GET['button'] == 2) {
        require_once('sites/email.html');
    }
    elseif ($_GET['button'] == 3) {
        require_once('core/statistics_notes_number.php');
        require_once('core/statistics_comments_number.php');
        require_once('core/statistics_notes_last_month.php');
        require_once('core/statistics_comments_last_month.php');
        require_once('core/statistics_LAST_note.php');
        require_once('core/statistics_most_commented_note.php');
    }
    elseif ($_GET['button'] == 4) {
        require_once('sites/blog.php');
    }
}
?>
    </body>
</html>

