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

$option = array( 
    //First row
    array($telegram->buildInlineKeyBoardButton("Button 1", $url="http://link1.com"), $telegram->buildInlineKeyBoardButton("Button 2", $url="http://link2.com")), 
    //Second row 
    array($telegram->buildInlineKeyBoardButton("Button 3", $url="http://link3.com"), $telegram->buildInlineKeyBoardButton("Button 4", $url="http://link4.com"), $telegram->buildInlineKeyBoardButton("Button 5", $url="http://link5.com")), 
    //Third row
    array($telegram->buildInlineKeyBoardButton("Button 6", $url="http://link6.com")) );
$keyb = $telegram->buildInlineKeyBoard($option);
$content = array('chat_id' => $chat_id, 'reply_markup' => $keyb, 'text' => "This is a Keyboard Test");
$telegram->sendMessage($content);


?>
