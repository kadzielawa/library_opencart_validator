<?php
namespace validator;
final class Postcodevalidator{

    public $message = "Kod pocztowy jest nieprawidłowy!";

    public function isValid($postcode){
        $result = 0;
        if(preg_match("/^([0-9]{2})(-[0-9]{3})?$/i",$postcode)){
            $result = 1;
        };

        return $result;

    }

    public function getMessage(){
        return $this->message;
    }

}
