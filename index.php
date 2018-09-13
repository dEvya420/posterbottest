<?php
 
require('config.php');

if ($text == '/start') {
    
    // First response after receiving "/start" from userLang
    $content = array(
        'chat_id' => $chat_id,
        'text' => "    "
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
    array($telegram->buildInlineKeyBoardButton("🔄 יד2 📦", $url="http://t.me/Weed4uIsraelTrading"), $telegram->buildInlineKeyBoardButton("📊 ערוץ הביקורת 📋", $url="http://t.me/Weed4uIsraelReviews"), $telegram->buildInlineKeyBoardButton("📝 הגשת ביקורת ✏️", $url="כרגע.בבניה")), 
    //Third row
    array($telegram->buildInlineKeyBoardButton("💰 רוצה לפרסם אצלינו ? 📣", $callback_data="parsess")) );
	array($telegram->answerCallbackQuery(array id="parsess", "asdasd"));
$keyb = $telegram->buildInlineKeyBoard($option);

$content = array('chat_id' => $chat_id, 'reply_markup' => $keyb, 'text' => "אהלן אני הבוט של Weed4U :)");
$telegram->sendMessage($content);


?>



