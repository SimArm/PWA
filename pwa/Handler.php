<?php

namespace Pwa;

class Handler
{
    private $Data;
    private $postData;

    public function __construct()
    {
        $this->Data;
        $this->postData;
    }

    function handler() {
        if (!empty($_POST["name"])) {
            $this->Data['name'] = $_POST["name"];
        }
        if (!empty($_POST["email"])) {
            $this->Data['email'] = $_POST["email"];
        }
        if (!empty($_POST["username"])) {
            $this->Data['username'] = $_POST["username"];
        }
        if (!empty($_POST["password"])) {
            $this->Data['password'] = $_POST["password"];
        }
        if (!empty($_POST["password2"])) {
            $this->Data['password2'] = $_POST["password2"];
        }
        return $this->Data;
    }

    function eventHandler() {
        if (!empty($_POST["event"])) {
            $this->postData['event'] = $_POST["event"];
        }
        if (!empty($_POST["color"])) {
            $this->postData['color'] = $_POST["color"];
        }
        if(!empty($_SESSION['id'])){
            $this->postData['user_id'] = $_SESSION['id'];
        }
        if(!empty($_POST["time"])){
            $this->postData['time'] = $_POST["time"];
        }
        return $this->postData;
    }
}
