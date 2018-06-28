<?php

class Recipe {

    private $id;
    private $name;
    private $time;
    private $image;

    function __construct(array $data) {
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

    function getTime() {
        return $this->time;
    }

    function getImage() {
        return $this->image;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setTime($time) {
        $this->time = $time;
    }

    function setImage($image) {
        $this->image = $image;
    }

}
