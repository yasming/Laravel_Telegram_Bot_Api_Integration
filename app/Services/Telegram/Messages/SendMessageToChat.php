<?php


namespace App\Services\Telegram\Messages;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class SendMessageToChat
{
    private $urlToSendMessageFromBot;

    public function __construct()
    {
        $urlToSendMessageFromBot       = config('telegram.send_message_url');
        $this->urlToSendMessageFromBot = Str::replace(
            [
                '{botAndToken}',
                '{text_to_be_sent}'
            ],
            [
                config('telegram.bot_and_token'),
                __('Received Message')
            ] , $urlToSendMessageFromBot
        );    
    }

    public function setChatId($chatId) : self
    {
        $this->urlToSendMessageFromBot = Str::replace('{chat_id}', $chatId, $this->urlToSendMessageFromBot);
        return $this;
    }

    public function sendMessage()
    {
        $response = Http::post($this->urlToSendMessageFromBot);
        return $response->json();
    }

}
