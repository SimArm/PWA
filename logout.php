<?php

require __DIR__ . '\vendor\autoload.php';

session_start();
session_unset();
session_destroy();

header('location: login.php');
