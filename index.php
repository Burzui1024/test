<?php
class Validator {
    private $str;
    public function __construct($str)
    {
        $this->str=$str;
    }

    public function validString() {
        if (substr_count($this->str,'{') == substr_count($this->str,'}'))
        {
            return "code true";
        }
        return "code false";
    }
}
$newJob = new Validator('{{lajkdhf{adfa}{}adfasdfadf{}}}');
print($newJob->validString());
print ("\n");