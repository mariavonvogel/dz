<?php
/* Smarty version 3.1.33, created on 2019-02-06 04:06:14
  from 'C:\OSPanel\domains\dz7\views\outputUsers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c5a33067fb4c0_82370687',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '541d46b2f47ed5e31152f62b8d5eabb8e90c0169' => 
    array (
      0 => 'C:\\OSPanel\\domains\\dz7\\views\\outputUsers.tpl',
      1 => 1549415166,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c5a33067fb4c0_82370687 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ввод данных</title>

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

    <link rel="stylesheet" type="text/css" href="/design/css/users.css">

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

<input class="form-control" type="text" placeholder="Поиск..." id="search-text" onkeyup="tableSearch()">

<p></p>

<div class="main">
    <div class="nav_w3l">
        <ul>
            <li><a href="/main/index" class="hvr-sweep-to-bottom">Главная</a></li>
            <li><a href="/user/output" class="hvr-sweep-to-bottom">Все пользователи</a></li>
        </ul>
        <h3><strong>Данные пользователей:</strong></h3>
    </div>



<table class="table table_dark" id="user-list"  style="text-align: center; width: 800px;">
        <thead><tr>
            <th>ID</th>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Email</th>
            <th>Тип</th>
            <th>Редактирование</th>
            <th>Удаление</th>
        </tr></thead>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
?>
            <tbody><tr>
                <td><?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['user']->value['firstName'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['user']->value['lastName'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['user']->value['type'];?>
</td>
                <td><a href='/main/index/?id=<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
'>Редактировать</a></td>
                <td><a href='/main/index/?id=<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
&action=delete'>Удалить</a></td>
            </tr></tbody>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table>

<p></p>
    <div class="main">
        <div class="more_w3ls">
            <a href="/main/index">Вернуться на главную</a>
        </div>
    </div>

</body>
</html>

<?php echo '<script'; ?>
 type="text/javascript" src="/design/js/search.js"><?php echo '</script'; ?>
><?php }
}
