<?php
class Place
{
    private $city;
    private $image_path;

    function __construct($city, $image_path)
    {
        $this->city = $city;
        $this->image_path = $image_path;
    }

    function setCity($new_city)
    {
        $this->city = (string) $new_city;
    }

    function getCity()
    {
        return $this->city;
    }

    function setImagePath($new_image_path)
    {
        return $this->new_image_path;
    }

    function getImagePath()
    {
        return $this->image_path;
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
