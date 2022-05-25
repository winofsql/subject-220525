<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <title>掲示板</title>
</head>

<body>
    <h3 class="alert alert-primary">掲示板</h3>
    <div id="content" class="m-4">
        <form action="" method="POST">
            <p>
                <span style='display:inline-block;width:100px;'>メッセージ</span>
                <input type="text" name="message" value="<?= $_POST["message"] ?>">
            </p>

            <p>
                <span style='display:inline-block;width:100px;'>投稿者</span>
                <input type="text" name="user" value="<?= $_POST["user"] ?>">
            </p>

            <input type="submit" name="send" value="投稿">
        </form>

        <h5 class="m-4 alert alert-primary" style='width:200px;text-align:center'>投稿一覧 (<?= $kensu ?>件)</h5>
        <ul>
            <?= $line_data ?>
        </ul>

    </div>

</body>

</html>