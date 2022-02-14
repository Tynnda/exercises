<?php

// bootstrap the application together
require_once 'Author.php';
require_once 'Song.php';

// prepare data

// $author = new Author;
// $author->name = 'John Lennon';
// $author->styles = [
//     'pop',
//     'rock'
// ];
// $author->country = 'UK';
// $author->image_url = 'https://upload.wikimedia.org/wikipedia/commons/8/85/John_Lennon_1969_%28cropped%29.jpg';

$author = new Author;
$author->name = 'Paul McCartney';
$author->styles = [
    'pop',
    'rock'
];
$author->country = 'UK';
$author->image_url = 'https://upload.wikimedia.org/wikipedia/commons/2/22/Paul_McCartney_2021_%28cropped%29.jpg';

$song1 = new Song;
$song1->name = 'Imagine';
$song1->album = 'Who knows';

$author->addSong($song1);

$song2 = new Song;
$song2->name = 'Let it be';
$song2->album = 'I don\'t know';

$author->addSong($song2);

// var_dump($author);

// at the end!
include 'view.php';