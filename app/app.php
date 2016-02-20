<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RepeatCounter.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('form.html.twig');
    });

    $app->post("/userInput", function() use($app) {
        $my_RepeatCounter = new RepeatCounter;
        $result = $my_RepeatCounter->countWord($_POST['phrase'], $_POST['find']);
        return $app['twig']->render('results.html.twig', array('result' => $result));
    });

    return $app;
?>
