<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Author form</title>
</head>
<body>

    <!--          handle-form.php?id=    CREATE NEW -->
    <!--          handle-form.php?id=1   EDIT record 1 -->
    <!--          handle-form.php?id=2   EDIT record 2 -->
    <!--          handle-form.php?id=3   EDIT record 3 -->
    <form action="handle-form.php?id=<?= $author->id ?>" method="post">

        <label for="name">Name</label><br>
        <input
            type="text"
            name="name"
            id="name"
            value="<?= $author->name ?>"
        >
        <br>
        <br>

        <label for="country">Country</label><br>
        <input
            type="text"
            name="country"
            id="country"
            value="<?= $author->country ?>"
        >
        <br>
        <br>

        <button>Save author</button>

    </form>

    <ul>
        <?php foreach ($all_authors as $one_author) : ?>
            <li>
                <?= $one_author->name ?>

                <a href="display-form.php?id=<?= $one_author->id ?>">EDIT</a>
            </li>
        <?php endforeach; ?>
    </ul>

    <a href="display-form.php">Create a new author</a>

</body>
</html>