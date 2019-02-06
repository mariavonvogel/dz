<?php
/* Smarty version 3.1.33, created on 2019-02-06 03:36:36
  from 'C:\OSPanel\domains\dz7\views\mainIndex.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c5a2c14c65759_67976398',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0959b02a25c9b14aed72b06923111a53c38e54d4' => 
    array (
      0 => 'C:\\OSPanel\\domains\\dz7\\views\\mainIndex.tpl',
      1 => 1549413394,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c5a2c14c65759_67976398 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Главная</title>

    <?php echo '<script'; ?>
 type="text/javascript"
            src="\vendor\twbs\bootstrap\site\docs\4.2\assets\js\vendor\jquery-slim.min.js"><?php echo '</script'; ?>
>
    <link href="/vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"><?php echo '</script'; ?>
 >
    <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
    <link href="/design/css/mainIndex.css" rel="stylesheet" type="text/css" media="all"/>

</head>
<body>
<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/vendor/twbs/bootstrap/dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>

<div class="main">
    <div class="nav_w3l">
        <ul>
            <li><a href="/main/index" class="hvr-sweep-to-bottom">Главная</a></li>
            <li><a href="/user/output" class="hvr-sweep-to-bottom">Все пользователи</a></li>
        </ul>
    </div>

    <form
            action="/user/check" method="post">

        <h4><strong>Введите данные:</strong></h4>

        <p><input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"></p>
        <p><input type="text" name="firstName" value="" placeholder="Имя" required></p>
        <p><input type="text" name="lastName" value="" placeholder="Фамилия" required></p>
        <p><input type="email" name="email" value="" placeholder="Email" required></p>

        <p>
            <select name="type" required>
                <option value="guest">Гость</option>
                <option value="admin">Админ</option>
            </select>
        </p>

        <div class="send">
            <input type="submit" value="Отправить данные">
            <input type="reset" value="Очистить поля">
        </div>

    </form>

</div>

</body>
</html><?php }
}
