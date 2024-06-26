<?php
class Validation
{
    public $errors = [];

    public function checkBody($input)
    {
        if (strlen(trim($input)) == 0) {
            $this->errors['body'] = "Body cannot be empty";
            return false;
        } elseif (strlen($input) > 1000) {
            $this->errors['body'] = "Note description too long";
            return false;
        } else {
            return true;
        }
    }

    public function getErrors()
    {
        return $this->errors;
    }
}
