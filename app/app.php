<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/LeetspeakTranslator.php";

    $app = new Silex\Application();

    $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('leet.twig');
    });

    $app->get("/result", function() use ($app) {
        $leetspeak = new LeetspeakTranslator;
        $leetspeakresult = $leetspeak->translator($_GET['input']);
        return $app['twig']->render('result.twig', array('result' => $leetspeakresult));
    });

    return $app;

?>
