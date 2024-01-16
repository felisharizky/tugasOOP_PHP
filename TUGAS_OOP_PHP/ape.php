<?php
require_once 'animal.php';

class Ape extends Animal {
    public function get_yell() {
        return "Auooooo";
    }

  
    public $legs = 2;
}
?>
