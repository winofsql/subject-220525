<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
        <input type="text" name="message" value="<?= $_POST["message"] ?>">
        <input type="text" name="user" value="<?= $_POST["user"] ?>">

        <input type="submit" name="send" value="投稿">
    </form>
    <hr>
    <ul>
        <?= $line_data ?>
    </ul>

</body>

</html>