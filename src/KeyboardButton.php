<?php

namespace BernardinoCampos\TelegramBot;

use function BernardinoCampos\Values\get_value;
use function BernardinoCampos\Values\set_value;

#[\AllowDynamicProperties]
class KeyboardButton
{
    private $values = [];

    private $objects = [];

    public function __construct(string $text)
    {
        set_value($this, 'text', $text);
    }

    public function setRequestContact(bool $bool): void
    {
        set_value($this, 'request_contact', $bool);
    }

    public function setRequestLocation(bool $bool): void
    {
        set_value($this, 'request_location', $bool);
    }

    public function getRequestContact(): bool
    {
        return get_value($this, 'request_contact', false);
    }

    public function getRequestLocation(): bool
    {
        return get_value($this, 'request_location', false);
    }
}
