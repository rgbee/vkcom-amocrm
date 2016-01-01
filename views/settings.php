<?php
require_once __DIR__."/header.php";

?>
<div id="content" class="area">
        <form action="" method="POST">
            <div class="rows_wrapper">
                <div class="row">
                    <input type="text" class="text" name="subdomain" placeholder="Аккаунт" value="" />
                </div>
                <div class="row">
                    <input type="text" class="text" name="email" placeholder="Email" value="" />
                </div>
                <div class="row">
                    <input type="text" class="text" name="api-hash" placeholder="Api hash" value="" />
                </div>
                <div class="row">
                    <button class="button-blue fs-4">Сохранить</button>
                    <button class="button-blue fs-4">Проверить подключение</button>
                </div>
            </div>
        </form>
    </div>