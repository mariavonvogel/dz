<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ввод данных</title>


    <link href="/vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script >
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css" href="/design/css/users.css">

</head>
<body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="/vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>

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

        {foreach $users as $user}

            <tbody><tr class="data-id" value="{$user['id']}">
                <td>{$user['id']}</td>
                <td>{$user['firstName']}</td>
                <td>{$user['lastName']}</td>
                <td>{$user['email']}</td>
                <td>{$user['type']}</td>
                <td><a href='/main/index/?id={$user['id']}'>Редактировать</a></td>
                <td><input class="user-delete" type="button" value="Удалить"></td>

            </tr></tbody>
        {/foreach}
    </table>

    <script>
        $(function (){
            $('.table .data-id').on('click', function() {
                var id = $(this).attr('value');
                $(this).hide();
                $.ajax({
                    url: "/main/index/?id="{" + id + "}"&action=delete",
                    type: 'GET',
                    dataType: 'json',
                    success: function (data) {
                        console.log(data);
                        data = JSON.parse(data);

                    }

                });
            });
        });

    </script>

    <p></p>
    <div class="main">
        <div class="more_w3ls">
            <a href="/main/index">Вернуться на главную</a>
        </div>
    </div>

</body>
</html>

<script type="text/javascript" src="/design/js/search.js"></script>