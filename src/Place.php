<?php
class Place
{
    private $city;
    private $image;
    private $memory;
    private $duration;

    function __construct($city, $image, $memory, $duration)
    {
        // $uploaddir = '/var/www/uploads/';
        // $uploadfile = $uploaddir . basename($_FILES['image']['type']);
        $this->city = $city;
        // $this->image = $uploadfile;
        $this->memory = $memory;
        $this->duration = $duration;
        // var_dump($image);
    }

    function setCity($new_city)
    {
        $this->city = (string) $new_city;
    }

    function getCity()
    {
        return $this->city;
    }

    function setImage($new_image)
    {
        return $this->new_image;
    }

    function getImage()
    {
        return $this->image;
    }

    function setMemory($new_memory)
    {
        return $this->new_memory;
    }

    function getMemory()
    {
        return $this->memory;
    }

    function setDuration($new_duration)
    {
        return $this->new_duration;
    }

    function getDuration()
    {
        return $this->duration;
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
