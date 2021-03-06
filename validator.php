<?php

final class Validator {

    private $availableValidators;

    private $messages;

    public function __construct($registry)
    {
        $this->setAvailableValidators();
    }

    public function validate($type,$string,$message="")  {
        if(isset( $this->availableValidators[$type])) {
            if(!$this->availableValidators[$type]->isValid($string)){
                $this->messages[$type] = strlen($message) ? $message : $this->availableValidators[$type]->getMessage();
            }
        } else {
            throw new Exception("Validator '$type' doesn't supported");
        }

        return $this;

    }

    public function getMessages() {
        return $this->messages;
    }

    private function setAvailableValidators(){

        $this->availableValidators = [
            'email' => new \validator\emailvalidator(),
            'telephone' => new \validator\telephonevalidator(),
            'containsmth' => new \validator\containsmthvalidator(),
            'postcode' => new \validator\postcodevalidator()
        ];
    }

}
