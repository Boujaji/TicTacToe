<?php


class player {
    public $name;
    public $piece;

    function __construct($name, $piece) {
        $this->name = $name;
        $this->piece = $piece;
    }



    function __toString() {
        return $this->name . " - " . $this->piece;
    }
}