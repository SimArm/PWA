<?php

namespace Pwa;

class Validation
{
    public $error;
    public $posterror;

    public function __construct()
    {
        $this->error = [];
        $this->posterror= [];
    }

    public function validate($value){
        if (empty($value['name'])) {
            array_push($this->error, 'Name is required');
        }else{
            if(!preg_match("/^[a-zA-Z ]*$/", $value["name"])) {
            array_push($this->error, 'Name must contain only letters');
        }
        }
        if (empty($value['email'])) {
            array_push($this->error, 'Email is required');
        } else {
            if (!filter_var($value["email"], FILTER_VALIDATE_EMAIL)) {
                array_push($this->error, 'Invalid email');
            }}
        if (empty($value['username'])) {
            array_push($this->error, 'Username is required');
        }
        if (empty($value['password'])) {
            array_push($this->error, 'Password is required');
        }else if(empty($value['password2'])) {
            array_push($this->error, 'Repeat passwor');
        }else if($value['password'] != $value['password2']) {
                array_push($this->error, 'Passwords do not match');
        }
    }

    public function error(){
        if (count($this->error) > 0){
           echo "<div>";
        foreach ($this->error as $value){
            echo "  $value" . ";" . "  ";
        }
  	        echo "</div>";
        }
    }

}
