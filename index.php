<?php
 
require('config.php');

if ($text == '/start') {
    
    // First response after receiving "/start" from userLang
    $content = array(
        'chat_id' => $chat_id,
        'text' => "    אהלן אני הבוט של Weed4U :)"
        );
    $telegram->sendMessage($content);
}


if ($text == 'dfgdfg') {


    $content = array(

        'chat_id' => "654501309" ,

        'text' => "$text"

    );

    $telegram->sendMessage($content);

}

$option = array( 
    array($telegram->buildInlineKeyBoardButton("🌍 קהילה ראשית 🌏", $url="http://t.me/Weed4uIsrael")),
	//
    array($telegram->buildInlineKeyBoardButton("↩️ ערוץ הכיוונים הראשי ↪️", $url="http://t.me/Weed4uIsraelMainPlugs")),
    //
    array($telegram->buildInlineKeyBoardButton("💊 כיוונים פסיכודלי 💊", $url="http://t.me/Weed4uIsraelMainPsy"), $telegram->buildInlineKeyBoardButton("🔮 קהילה פסיכודליה 🔮", $url="https://t.me/Weed4uIsraelPsyCom")), 
    //Second row 
    array($telegram->buildInlineKeyBoardButton("🔄 יד2 📦", $url="http://t.me/Weed4uIsraelTrading"), $telegram->buildInlineKeyBoardButton("🌍קהילה🌏", $url="http://t.me/Weed4uIsrael"), $telegram->buildInlineKeyBoardButton("מה נשאר?", $url="http://yimutim.com")), 
    //Third row
    array($telegram->buildInlineKeyBoardButton("📊 לערוץ הביקורת 📋", $url="http://t.me/Weed4uIsraelReviews")) );
$keyb = $telegram->buildInlineKeyBoard($option);
$content = array('chat_id' => $chat_id, 'reply_markup' => $keyb, 'text' => "ברוכיםם הבאים לדיניה עולםםםם");
$telegram->sendMessage($content);


?>



