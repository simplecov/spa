<?php

namespace Simplecov;

require_once 'PHPMailer/PHPMailerAutoload.php';

class Form{

    public $request;

    public function __construct()
    {

    }

    public function setRequest()
    {
        $this->request = $_REQUEST;
    }

    public function getRequest()
    {
        return $this->request;
    }

    function checkData()
    {
        echo 'DATA';
    }
}

new Form();

dump($_REQUEST);