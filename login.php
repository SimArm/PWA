<?php

require __DIR__ . '\vendor\autoload.php';

session_start();

    $head = new \Pwa\HeaderFooter();
    $head->header();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $uname = $_POST['username'];
    $getdata = new Pwa\DBfunctions();
    $array = $getdata->getDataByUsername($uname);
    if ($_POST['username'] !== $array['username']) {
        echo "<div style='display: flex; color:red' class='justify-content-center'>There is no user with this username</div>>";
    }
    if ($_POST['username'] == $array['username']) {
        if ($_POST['password'] !== $array['password']) {
            echo "<div style='display: flex; color:red' class='justify-content-center'>Wrong password</div>>";
        } else {
            $_SESSION['id'] = $array['id'];
            $_SESSION['logged'] = true;
            header('location: index.php');
        }
    }
}
if (isset($_SESSION['logged']) && $_SESSION['logged'] == true) {
    if ($_POST['username'] == 'kill') {
        echo "logged out" . $_SESSION['id'];
        session_unset();
        session_destroy();
    }
}

    $log = new \Pwa\Login();
    $log->login();

    $footer = new \Pwa\HeaderFooter();
    $footer->footer();




