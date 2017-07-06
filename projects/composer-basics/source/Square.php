<?php

namespace Shapes;

class Square {
    static function area($side) {
        $surfaceArea = ($side * $side);
        echo "The surface area of this square is $surfaceArea units\n";
    }
}

?>