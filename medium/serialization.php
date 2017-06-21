<?php

class A {
    public $object_A_property;
}

class B {
    public $object_B_property;
}

$object_a = new A();
$object_a->object_A_property = 1;

$object_b = new B();
$object_b->object_b_property = 2;

$serialized_a = serialize($object_a);
$serialized_b = serialize($object_b);

// Default behavior that accepts all classes
$data_a = unserialize($serialized_a, ["allowed_classes" => true]);

$data_b = unserialize($serialized_b, ["allowed_classes" => ["A", "B"]]);

print($data_a->$object_A_property); // 1
print("<br>");
print($data_b->$object_B_property); // 2

?>