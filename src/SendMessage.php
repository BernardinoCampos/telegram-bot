<?php

namespace BernardinoCampos\TelegramBot;

use function BernardinoCampos\Values\get_value;
use function BernardinoCampos\Values\get_values;
use function BernardinoCampos\Values\set_value;

#[\AllowDynamicProperties]
class SendMessage
{
    private $values = [];

    private $objects = [];

    public function __construct(int $chatId, string $text)
    {
        set_value($this, 'chat_id', $chatId);
        set_value($this, 'text', $text);
    }

    public function getChatId(): int
    {
        return get_value($this, 'chat_id');
    }

    public function getText(): string
    {
        return get_value($this, 'text');
    }

    public function setParseMode(string $parseMode): void
    {
        set_value($this, 'parse_mode', $parseMode);
    }

    public function getParseMode(): ?string
    {
        return get_value($this, 'parse_mode');
    }

    public function setReplyMarkup(ReplyMarkup $replyMarkup): void
    {
        set_value($this, 'reply_markup', json_encode(get_values($replyMarkup)));
    }
}
