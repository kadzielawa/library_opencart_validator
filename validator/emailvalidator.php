<?php

namespace validator;

final class Emailvalidator{

    public $message = "E-mail is not valid!";

    public function isValid($email){
        $result = 1;
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $result = 0;
        };

        return $result;

    }

    public function getMessage(){
        return $this->message;
    }

}
