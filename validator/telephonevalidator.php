<?php
namespace validator;
final class Telephonevalidator{

    public $message = "Telephone is not valid!";

    public function isValid($telephone){
        $result = 0;
        if(preg_match('/^(?:\(\d{3}\)|\d{3}-)\d{3}-\d{3}$/',$telephone)){
            $result = 1;
        }

        return $result;

    }

    public function getMessage(){
        return $this->message;
    }

}
