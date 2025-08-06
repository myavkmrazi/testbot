<?php

require_once 'config.php';
require_once 'functions.php';

$content = file_get_contents("php://input");
$update = json_decode($content);

if (!$update || !isset($update->message)) {
  exit();
}

$chat_id = $update->message->chat->id;
$text = $update->message->text ?? '';

if ($text === '/start') {
  send_request('sendMessage', [
    'chat_id' => $chat_id,
    'text' => 'вебхук работает!'
  ]);
}
