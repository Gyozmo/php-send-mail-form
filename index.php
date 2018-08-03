<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="/" method="post">
<label for="name">Name : </label><input name="name" type="text"><br>
<label for="mail">Mail : </label><input name="mail" type="text"><br>
<label for="content">Content : </label><input name="content" type="text">
<button type="submit"></button>
</form>
    <?php
    if (isset($_POST["name"]) && isset($_POST["mail"]) && isset($_POST["content"])) {
        mail($_POST["mail"],$_POST["name"],$_POST["content"]);
    }
    ?>
</body>
</html>