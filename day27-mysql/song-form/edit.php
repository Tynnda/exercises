<?php

// edit.php?id=1

// display a form to edit an existing song

require_once 'DBBlackbox.php';
require_once 'Session.php';
require_once 'Song.php';
require_once 'helpers.php';

$session = Session::instance();

// get id of the song to edit from the URL
$id = $_GET['id'];

// prepare data about an existing song
$song = find($id, 'Song');

$genres = [
    'bluegrass' => 'Bluegrass',
    'country'   => 'Country',
    'metal'     => 'Metal',
    'heavy-metal'  => 'Heavy Metal &lt;3',
    'pop'       => 'Pop',
    'rock'      => 'Rock',
    'techno'    => 'Techno'
];

// display the form (prefilled with the data about the existing song)

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit a song</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php include 'messages.php'; ?>

    <form action="update.php?id=<?= $song->id ?>" method="post">

        <div class="form-group">
            <label for="title">Title</label>
            <input
                type="text"
                name="title"
                value="<?= old('title', $song->title) ?>"
            >
        </div>

        <div class="form-group">
            <label for="author_name">Author</label>
            <input
                type="text"
                name="author_name"
                value="<?= old('author_name', $song->author_name) ?>"
            >
        </div>

        <div class="form-group">
            <label for="genre">Genre</label>

            <select name="genre">

                <option
                    value=""
                    <?= !$song->genre ? ' selected' : '' ?>
                >
                        -- not selected --
                </option>

                <?php foreach ($genres as $value => $name) : ?>

                    <option
                        value="<?= $value ?>"
                        <?= old('genre', $song->genre) === $value ? ' selected' : '' ?>
                    >
                        <?= $name ?>
                    </option>

                <?php endforeach; ?>

            </select>
        </div>

        <div class="form-group">
            <button class="submit-button">Save</button>
        </div>

    </form>

    <!-- <script>
        document.querySelectorAll('.message').forEach(message => {
            setTimeout(() => {
                message.remove();
            }, 2000)
        })
    </script> -->

</body>
</html>