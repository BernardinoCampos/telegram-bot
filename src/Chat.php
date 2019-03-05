<?php

namespace Formapro\TelegramBot;

use function Formapro\Values\get_value;

class Chat
{
    private $values = [];

    private $objects = [];

    public function getId(): int
    {
        return get_value($this, 'id');
    }
}
