<?php

# Telegra Mailer
# Simple PHP module for sending data from landing to telegram
# Version: 1.0
# Autor: Artem Marenkov

class telegraMailer {

    private $bot_token;
    private $chat_id;
    private $message_text;


    public function __construct($bot_token, $chat_id, $message_text)
    {
        $this->bot_token = $bot_token;
        $this->chat_id = $chat_id;
        $this->message_text = $message_text;
    }


    public function send() : void
    {    
        fopen (
            "https://api.telegram.org/bot{$this->bot_token}/sendMessage?chat_id={$this->chat_id}&parse_mode=html&text={$this->message_text}",
            "r"
        );
    }

}

