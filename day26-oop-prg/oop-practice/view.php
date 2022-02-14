<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP practice</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="author">

        <div class="author__image">
            <img src="<?= $author->image_url ?>" alt="">
        </div>

        <div class="author__data">

            <h1><?= $author->name ?></h1>

            <h2>Styles</h2>
            <ul>
                <?php foreach ($author->styles as $style) : ?>
                    <li><?= $style ?></li>
                <?php endforeach; ?>
            </ul>

            <h2>Country</h2>
            <div class="country"><?= $author->country ?></div>

            <?php if ($author->songs) : ?>

                <h2>Songs</h2>
                <ul>
                    <?php foreach ($author->songs as $song) : ?>
                        <li>
                            <?= $song->name ?> (<?= $song->album ?>)
                        </li>
                    <?php endforeach; ?>
                </ul>

            <?php endif; ?>

        </div>

    </div>

</body>
</html>