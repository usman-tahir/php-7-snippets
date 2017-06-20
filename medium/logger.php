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

class MyLogger implements Logger {
    public function log(string $message) {
        print("LOG: " . $message);
    }
}

// Create a new instance of the application
$app = new Application;
$app->setLogger(new MyLogger);

$app->getLogger()->log("My first log message");

?>