<?php

namespace https\forms;

use core\Validation;

class Login
{

    protected $errors = [];

    public function __construct($attributes)
    {

        if (! Validation::email($attributes['email'])) {
            $this->errors['email'] = 'Please Provide a Valid email address';
            
        };

        if (!Validation::password($attributes['password'])) {
            $this->errors['password'] = 'Minimum eight characters, at least one letter, one number and one special character:';
        };

        return empty($this->errors);


    }

    public function errors(){
        return $this->errors;
    }

    public function error($field,$message){
        $this->errors[$field] = $message ; 
        
    }


}
