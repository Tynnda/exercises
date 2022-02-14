<?php

class Author
{
    public $id = null;
    public $name = null;
    public $country = null;
    public $date_of_birth = null;

    public function hydrateFromRequest()
    {
        $this->name = $_POST['name'] ?? $this->name;
        $this->country = $_POST['country'] ?? $this->country;
        $this->date_of_birth = $_POST['date_of_birth'] ?? $this->date_of_birth;
    }
}
