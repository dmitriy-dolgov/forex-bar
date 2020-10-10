<?php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>FOREX BAR</title>
    <?php if (IS_INTERNET): ?>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <?php else: ?>
        <link rel="stylesheet" href="inc/bootstrap.min.css">
    <?php endif; ?>
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark bg-primary">
    <div class="d-flex w-50">
        <a class="navbar-brand mr-0" href="#">FOREX BAR</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    <div class="navbar-collapse collapse justify-content-center" id="collapsingNavbar">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">BIDLeveL</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Контакты</a>
            </li>
        </ul>
    </div>
    <span class="navbar-text small text-truncate mt-1 w-50 text-right">Присоединиться</span>
</nav>
