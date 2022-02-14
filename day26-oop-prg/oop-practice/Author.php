<?php

class Author
{
    public $name = null;
    public $styles = [];
    public $country = null;
    public $image_url = null;
    public $songs = [];

    public function addSong($song)
    {
        $this->songs[] = $song;
    }

}