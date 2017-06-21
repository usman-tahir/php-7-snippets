<?php

class MathOperations {
    protected $n = 10;
    
    // Division by zero error -> Exception
    public function performOperation(): string {
        try {
            $value = $this->n % 0;
            return $value;
        } catch (DivisionByZeroError $e) {
            return $e->getMessage();
        }
    }
}

$mathOperation = new MathOperations();
print($mathOperation->performOperation()); // Modulo by Zero (Exception)

?>