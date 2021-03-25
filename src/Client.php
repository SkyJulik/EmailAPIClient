<?php

namespace EmailAPIClient;

class Client {
    
    public function sendEmail(string $subject = 'test subject'): void
    {
        echo $subject;
        return;
    }
    
    public function getEmail() {
        
    }
}
