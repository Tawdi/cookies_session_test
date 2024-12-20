<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
</head>

<body>

    <h1>home page</h1>
    <form action="" method="POST">

        <select name="langue" id="langue">
            <option <?= $_COOKIE['lg'] == 'ar' ? 'selected' :  ' '; ?> value="ar">ar</option>
            <option <?= $_COOKIE['lg'] == 'trg' ? 'selected' : ' '; ?> value="trg">trg</option>
            <option <?= $_COOKIE['lg'] == 'fr' ? 'selected' : ' '; ?> value="fr">fr</option>
            <option <?= $_COOKIE['lg'] == 'en' ? 'selected' : ' '; ?> value="en">en</option>
        </select>
        <button type="submit" name="cookie_form"> submit </button>
    </form>

    <?= $message; ?>

</body>

</html>