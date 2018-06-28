<?php

class Step {

    private $number;
    private $text;

    function __construct($data) {
        foreach ($data as $k => $v) {
            $this->$k = $v;
        }
    }

    function getNumber() {
        return $this->number;
    }

    function getText() {
        return $this->text;
    }

    function setNumber($number) {
        $this->number = $number;
    }

    function setText($text) {
        $this->text = $text;
    }

}
