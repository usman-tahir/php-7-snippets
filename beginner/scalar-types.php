<?php
    // Coercive mode
    function sum(int ...$ints) {
        return array_sum($ints);
    }
    print(sum(2, '3', 4.1)); // Outputs 9, since it coerces the values into (2, 3, 4)
?>

<?php
    // Commented out since the declare statement needs to be the first line in the script;
    // the example holds, regardless
    /*
    declare(strict_types = 1);
    function sum(int ...$ints) {
        return array_sum($ints);
    }
    print(sum(2, '3', 4.1)); // Uncaught TypeError
    */
?>