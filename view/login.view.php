<?= $_COOKIE['lg'] ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>

<body>
    <p>type any thing to login 'marhbaaa'</p>
    <form action="" method="post">
        <hr>
        <div>
            <label for="username">username</label>
            <input type="text" name="username" id="username" required>
        </div>
        <hr>
        <div>
            <label for="password">password</label>
            <input type="password" name="password" id="password" required>
        </div>
        <hr>
        <button type="submit">log in</button>
    </form>
</body>

</html>