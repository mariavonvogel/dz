<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Главная</title>

    <script type="text/javascript"
            src="\vendor\twbs\bootstrap\site\docs\4.2\assets\js\vendor\jquery-slim.min.js"></script>
    <link href="/vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script >
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <link href="/design/css/mainIndex.css" rel="stylesheet" type="text/css" media="all"/>

</head>
<body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="/vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>

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

        <p><input type="hidden" name="id" value="{$id}"></p>
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
</html>