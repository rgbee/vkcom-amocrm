<?php
require_once __DIR__."/../header.php";

?>
<div id="content" class="area">
    <form id="item1-content" action="" method="POST">
        <div id="top-submenu" class="fs-4">
            <ul>
                <li class="selected">Добавление</li>
                <li>Поиск</li>
            </ul>
        </div>
        <div class="rows_wrapper">
            <div class="row">
                <input type="text" class="text w-8 fs-3" name="name" placeholder="ФИО" value="" />
            </div>
            <div class="row">
                <input type="text" class="text w-8 fs-3" name="email" placeholder="Email" value="" />
            </div>
            <div class="row">
                <input type="text" class="text w-8 fs-3" name="phone" placeholder="Телефон" value="" />
            </div>  
            <div class="row">
                <input type="text" class="text w-8 fs-3" name="comment" placeholder="Примечание" value="" />
            </div>
            <div class="row">
                <button class="button-blue">Добавить</button>
            </div>
        </div>
    </form>
    <div id="item2-content">
        <input id="search" type="text" class="text w-5 fs-4" name="search" placeholder="Поиск" value="">
        <button class="button-blue fs-4">Поиск</button>
    </div>
    <div id="item3-content" class="rows_wrapper">
        <script>
            jQuery(function($){
                $('.select-vk-user').click(function(){
                   var $wrapper = $(this).parents('.entity-info').first(); 
                   var name = $.trim($wrapper.find('.contain-name').text());
                   var email = $.trim($wrapper.find('.contain-email').text());
                   var phone = $.trim($wrapper.find('.contain-phone').text());
                   
                   if (name != '') {
                       $('input[name="name"]').val(name);
                   }
                   if (email != '') {
                       $('input[name="email"]').val(email);
                   }
                   if (phone != '') {
                       $('input[name="phone"]').val(phone);
                   }
                   
                   $('input[name="comment"]').focus();
                });
            });
        </script>
        <div class="row ">
            <div class="entity-info">
                <div class="content">
                    <img width="100" src="http://cs624618.vk.me/v624618643/260e2/p3277Rr9mM8.jpg" />
                </div>
            </div>
            <div class="contact entity-info">
                <div class="content">
                  <p class="contain-name">
                      Иванов Иван
                  </p>
                </div>
                <div class="add-content height-1">
                  <p>
                      <span class="contain-email">ivanov@mail.ru</span>
                  </p>
                </div>
                <div class="add-content height-1">
                  <p>
                      <span class="contain-phone">+79009009090</span>
                  </p>
                </div>
                <div>
                    <button class="button-blue fs-4 select-vk-user" type="button">Выбрать</button>
                </div>
            </div>
        <div>
        <div class="clear_fix"></div>
    </div>
</div>
