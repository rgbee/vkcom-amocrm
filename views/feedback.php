<?php
require_once __DIR__."/header.php";
?>

<div id="content" class="area">
    <div>
        <p class="fs-3">Здесь вы можете оставить свои замечания и предложения.</p>
    </div>
    <form action="" method="POST">
        <div class="rows_wrapper">
            <div class="row">
                <input type="text" class="text w-5 fs-3" name="email" placeholder="Ваша почта" value="" />
            </div>
            <div class="row">
                <textarea name="message" class="w-5 fs-3" placeholder="Ваше сообщение"></textarea>
            </div>
            <div class="row">
                <button class="button-blue">Отправить</button>
            </div>
        </div>
    </form>
</div>