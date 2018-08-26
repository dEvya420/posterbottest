<?php



    $bot_token = "658690075:AAFQNAqF3MnR-YzLK7wx3xMFxQYwgqNhEmI";

	
	;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
	
	
	$dbhost     ="localhost";  

	$dbname     ="XXXbot";

	$dbusername ="root";

	$dbpassword ="ImHere";



	// Using the TelegramBotPHP library by Eleirbag89 - https://github.com/Eleirbag89/TelegramBotPHP

	require ("Telegram.php");



	$telegram = new Telegram($bot_token);

	$website='https://api.telegram.org/bot'."$bot_token";



	$text = $telegram->Text();

	$data = $telegram->getData();

	$chat_id = $telegram->ChatID();







?>
