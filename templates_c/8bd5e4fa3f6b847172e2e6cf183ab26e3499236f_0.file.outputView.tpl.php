<?php
/* Smarty version 3.1.33, created on 2019-01-23 23:29:29
  from 'C:\OSPanel\domains\dz7\views\outputView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c48cea9bdac55_75896306',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8bd5e4fa3f6b847172e2e6cf183ab26e3499236f' => 
    array (
      0 => 'C:\\OSPanel\\domains\\dz7\\views\\outputView.tpl',
      1 => 1548275367,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c48cea9bdac55_75896306 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Список пользователей</title>
    <style>
        body {
            background: #FFF0F5
        }
    </style>
</head>
<body>
<input class="form-control" type="text" placeholder="Поиск..." id="search-text" onkeyup="tableSearch()">


<h4>Данные пользователей:</h4>

    <table id="user-list" cellpadding="5" cellspacing="0" border="1" style="text-align: center; width: 800px;">
        <tr>
            <th>ID</th>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Email</th>
            <th>Тип</th>
            <th>Редактирование</th>
            <th>Удаление</th>
        </tr>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
?>
            <tr>
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
            </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table>













<button name="write" class="j-submit-report" onclick="window.location.href='/main/index'">Вернуться к вводу данных</button>

</body>
</html>

<?php echo '<script'; ?>
 type="text/javascript" src="/design/js/search.js"><?php echo '</script'; ?>
><?php }
}
