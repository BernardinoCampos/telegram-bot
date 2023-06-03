<?php

namespace BernardinoCampos\TelegramBot;

use function BernardinoCampos\Values\get_value;
use function BernardinoCampos\Values\set_value;

#[\AllowDynamicProperties]
class ReplyKeyboardRemove implements ReplyMarkup
{
    private $values = [];

    private $objects = [];

    public function __construct(bool $selective = false)
    {
        set_value($this, 'remove_keyboard', true);
        set_value($this, 'selective', $selective);
    }

    public function isSelective(): bool
    {
        return get_value($this, 'selective', false);
    }
}
