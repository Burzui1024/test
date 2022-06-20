<?php

class Validator
{
    private $str;

    public function __construct($str)
    {
        $this->str = $str;
    }

//    public function validString() {
//        if (substr_count($this->str,'{') == substr_count($this->str,'}'))
//        {
//            return "code true";
//        }
//        return "code false";
//    }
    public function validString()
    {

        $open = ["{"];

        $stack = array();
        $this->str = preg_replace('/[a-z0-9]/', '', $this->str);

        for ($i = 0; $i < strlen($this->str); $i++) {

            $current_bracket = $this->str[$i];

            if (in_array($current_bracket, $open))

                array_push($stack, $current_bracket);

            else {

                if (empty($stack)) return "code false";

                $popped_bracket = array_pop($stack);

                if ($popped_bracket === "{" and $current_bracket !== "}")

                    return 'code true';
            }

        }
        return "code false";

    }
}

$newJob = new Validator('}dsfsdfsdf{{}}{');
print($newJob->validString());
print ("\n");