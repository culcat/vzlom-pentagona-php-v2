<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <form action="./script.php" method="post">
        <input type="text" name="name" placeholder="Имя"><br>
        <input type="text" name="lastname" placeholder="Фамилия"><br>
        <label for="sel">Выберите свой возраст</label><br>
        <select name="sel" id="">
            <option value="1-18">1-18</option>
            <option value="19-30">19-30</option>
            <option value="31-50">31-50</option>
            <option value=">50">>50</option>
        </select>
        <br>
        <label for="pred">Выберите свое предпочтение:</label><br>
    <input name="pred" type="radio" value="Фрукты"> Фрукты<br>
    <input name="pred" type="radio" value="Овощи"> Овощи<br>
 <input type="submit" value="Check">

    </form>
</body>
</html>