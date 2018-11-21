<?php
namespace validator;
final class Containsmthvalidator{

    public $message = "Wypełnij zaznaczone pole!";

    public function isValid($smth){
        $result = 0;
        if((utf8_strlen(trim($smth))) > 0){
            $result = 1;
        };

        return $result;

    }

    public function getMessage(){
        return $this->message;
    }

}
