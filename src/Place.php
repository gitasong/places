<?php
class Place
{
    private $city;

    function __construct($city)
    {
        $this->city = $city;
    }

    function setCity($new_city)
    {
        $this->city = (string) $new_city;
    }

    function getCity()
    {
        return $this->city;
    }

    function save()  // pushes each new place to array; saves in $_SESSION variable 'saved_places'
    {
        array_push($_SESSION['saved_places'], $this);
    }

    static function getAll()  // retrieves saved_places from $_SESSION variable
    {
        return $_SESSION['saved_places'];
    }

    static function deleteAll()  // deletes saved_places array
    {
        $_SESSION['saved_places'] = array();
    }
}
?>
