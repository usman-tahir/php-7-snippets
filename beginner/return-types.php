<?php
declare(strict_types = 1);
function returnIntValue(int $value): int {
    return $value;
    // Invalid example: return $value + 1.0; (Uncaught TypeError)
}
print(returnIntValue(5)); // 6
?>