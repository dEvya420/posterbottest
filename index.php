<?php

require('config.php');

if ($text == '/start') {
    
    // First response after receiving "/start" from userLang
    $content = array(
        'chat_id' => $chat_id,
        'text' => "    Hi My first bot"
    );
    $telegram->sendMessage($content);
}



?>