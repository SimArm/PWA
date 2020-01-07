<?php

require __DIR__ . '\vendor\autoload.php';

session_start();

$log = new Monolog\Logger('name');
$log->pushHandler(new Monolog\Handler\StreamHandler('app.log',Monolog\Logger::WARNING));

    $head = new \Pwa\HeaderFooter();
    $head->header();

$render = new Pwa\Handler();
$dbfunction = new Pwa\DBfunctions();
$err = new Pwa\Validation();

try {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $data = $render->handler();
        $err->error;
        $err->validate($data);
        if (empty($err->error)) {
            $dbfunction->insertUser($data);
            header('location: login.php');
        } else {
            echo "<div style='display: flex; color: red' class='justify-content-center'>";
            $err->error();
            echo "</div>";
        }
    }
}catch(\Exception $e){
    echo $e;
}

$err = new Pwa\Validation();
$err->error();

    $reg = new \Pwa\Register();
    $reg->register();

    $footer = new \Pwa\HeaderFooter();
    $footer->footer();




