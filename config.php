<?php



    $bot_token = "471113290:AAGxwUFTcaOcKUTUij7mpYBDwJvf2A6j6Kc";

	// Using the TelegramBotPHP library by Eleirbag89 - https://github.com/Eleirbag89/TelegramBotPHP

	require ("Telegram.php");



	$telegram = new Telegram($bot_token);

	$website='https://api.telegram.org/bot'."$bot_token";



	$text = $telegram->Text();

	$data = $telegram->getData();

	$chat_id = $telegram->ChatID();







?>
