<?php

require __DIR__ . '\vendor\autoload.php';

session_start();

    $head = new \Pwa\HeaderFooter();
    $head->header();

    $main = new \Pwa\Main();
    $main->mainContent();

    $footer = new \Pwa\HeaderFooter();
    $footer->footer();
