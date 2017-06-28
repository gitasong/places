<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Place.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('places.html.twig', array('places' => Place::getAll()));
    });

    $app->post("/places", function() use ($app) {
        $place = new Place($_POST['city']);  //creates new Place w/data from city field
        $place->save();  //saves new task to $_SESSION variable 'saved_places' using save() method
        return $app['twig']->render('create_place.html.twig', array('newplace' => $place));  // renders 'You've created a place!' template w/'newplace' as twig template variable
    });



    return $app;
?>
