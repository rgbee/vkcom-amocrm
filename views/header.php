<?php
    $router = Router::instance();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="/amocrm/assets/css/style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script type="text/javascript" src="/amocrm/assets/js/main.js"></script>
    <title>Service for amoCRM</title>
</head>
<body>
    <div id="top-menu" class="area fs-2">
        <ul>
            <li>
                <a href="/amocrm/leads" class="<?= $router->is_current_route('/amocrm/leads') ? 'actived' : '' ?>">Сделки</a>
            </li>
            <li>
                <a href="/amocrm/leads/create" class="<?= $router->is_current_route('/amocrm/leads/create') ? 'actived' : '' ?>">Новая сделка</a>
            </li>
            <li>
                <a href="/amocrm/settings" class="<?= $router->is_current_route('/amocrm/settings') ? 'actived' : '' ?>">Настройки</a>
            </li>
            <li>
                <a href="/amocrm/help" class="<?= $router->is_current_route('/amocrm/help') ? 'actived' : '' ?>">Справка</a>
            </li>
            <li>
                <a href="/amocrm/feedback" class="<?= $router->is_current_route('/amocrm/feedback') ? 'actived' : '' ?>">Связаться</a>
            </li>
        </ul>
    </div>