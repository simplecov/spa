<?php

namespace Simplecov;

require_once 'PHPMailer/PHPMailerAutoload.php';

class Form{

    public $request;

    public function getRequest()
    {
        return $this->request;
    }

    function checkData($request)
    {

    }
}

new Form();


dump($_REQUEST);