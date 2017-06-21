<?php

class A {
    private $x = 1;
}

class B {
    private $x = 2;
}

// Closure for accessing the variable x of an object
$value = function() {
    return $this->x;
};

print($value->call(new A)); // 1
print($value->call(new B)); // 2

?>