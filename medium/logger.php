<?php

interface Logger {
    public function log(string $message);
}

class Application {
    private $logger;
    
    public function getLogger(): Logger {
        return $this->logger;
    }
    
    public function setLogger(Logger $logger) {
        $this->logger = $logger;
    }
}

// Create a new instance of the application
$app = new Application;
$app->setLogger(new class implements Logger {
   public function log(string $message) {
       print("LOG: " . $message);
   } 
});

$app->getLogger()->log("My first log message");

?>