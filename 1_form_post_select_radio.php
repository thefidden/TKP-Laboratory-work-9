<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Форма POST</title>
</head>
<body>
<form name="form" method="post" action="1_post.php">
    <label>Сообщение<br>
        <input type="radio" name="message" value="Добро пожаловать">Добро пожаловать
        <br>
        <input type="radio" name="message" value="Добрый день">Добрый день
        <br>
        <input type="radio" name="message" value="Здравствуйте">Здравствуйте
        <br>
        <input type="radio" name="message" value="Рады Вас видеть">Рады Вас видеть
        <br>
    </label>
    <br>
    <label>
        Имя
        <select name="name">
            <option value = 'Николай'>Николай</option>
            <option value = 'Елена'>Елена</option>
            <option value = 'Михаил'>Михаил</option>
            <option value = 'Анна'>Анна</option>
            <option value = 'Евгений'>Евгений</option>
        </select>
    </label>
    <br><br>
    <input type="submit" value="Обработать данные на сервере">
</form>
</body>
</html>
