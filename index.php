<?php

require('config.php');

if ($text == '/start') {
    
    // First response after receiving "/start" from userLang
    $content = array(
        'chat_id' => $chat_id,
        'text' => "    אהלן וסהלןןן"
    );
    $telegram->sendMessage($content);
}


if ($text == 'dfgdfg') {
    
    // First response after receiving "/start" from userLang
    $content = array(
        'chat_id' => $chat_id,
        'text' => "    $text"
    );
    $telegram->sendMessage($content);
}

$option = array( 
    //First row
    array($telegram->buildInlineKeyBoardButton("💊 ערוץ הפסיכודלי 🔮", $url="http://t.me/Weed4uIsraelMainPsy"), $telegram->buildInlineKeyBoardButton("↩️ ערוץ הכיוונים ↪️", $url="http://t.me/Weed4uIsraelMainPlugs")), 
    //Second row 
    array($telegram->buildInlineKeyBoardButton("🔄 יד2 📦", $url="http://t.me/Weed4uIsraelTrading"), $telegram->buildInlineKeyBoardButton("🌍קהילה🌏", $url="http://t.me/Weed4uIsrael"), $telegram->buildInlineKeyBoardButton("מה נשאר?", $url="http://yimutim.com")), 
    //Third row
    array($telegram->buildInlineKeyBoardButton("📊 לערוץ הביקורת 📋", $url="http://t.me/Weed4uIsraelReviews")) );
$keyb = $telegram->buildInlineKeyBoard($option);
$content = array('chat_id' => $chat_id, 'reply_markup' => $keyb, 'text' => "ברוכיםם הבאים לדיניה עולםםםם");
$telegram->sendMessage($content);


?>



