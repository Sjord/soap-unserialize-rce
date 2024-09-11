<?php
class A {
    private $prop = "A";

    public function showAProp() {
        var_dump($this->prop);
    }
}

class B extends A {
    protected $prop = "B";
    public $pub = "pub";

    public function showBProp() {
        var_dump($this->prop);
    }
}

$b = new B();
$b->showAProp(); // string(1) "A"
$b->showBProp(); // string(1) "B"
echo (serialize($b));
