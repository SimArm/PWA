<?php

require __DIR__ . '\vendor\autoload.php';

session_start();

    $head = new \Pwa\HeaderFooter();
    $head->header();
    $eventRender = new \Pwa\Handler();
    $dbfunction = new Pwa\DBfunctions();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $data = $eventRender->eventHandler();
        $dbfunction->insertEvent($data);
        header('location: index.php');
    }

    $event = new \Pwa\Events();
    $event->events();

    $footer = new \Pwa\HeaderFooter();
    $footer->footer();
