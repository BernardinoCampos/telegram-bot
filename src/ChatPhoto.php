<?php

namespace BernardinoCampos\TelegramBot;

use function BernardinoCampos\Values\get_value;

#[\AllowDynamicProperties]
class ChatPhoto
{
    private $values = [];

    public function getSmallFileId(): string
    {
        return get_value($this, 'small_file_id');
    }

    public function getBigFileId(): string
    {
        return get_value($this, 'big_file_id');
    }
}
