<?php

class Ingredient {

    private $id;
    private $name;

    function __construct($data) {
        foreach ($data as $k => $v) {
            $this->$k = $v;
        }
    }

    function getId() {
        return $this->id;
    }

    function getName() {
        return $this->name;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setName($name) {
        $this->name = $name;
    }

}
