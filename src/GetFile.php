<?php

namespace BernardinoCampos\TelegramBot;

use function BernardinoCampos\Values\get_value;
use function BernardinoCampos\Values\get_values;
use function BernardinoCampos\Values\set_value;

/**
 * @see https://core.telegram.org/bots/api#getfile
 */
class GetFile
{
    private $values = [];

    public function __construct(string $fileId)
    {
        set_value($this, 'file_id', $fileId);
    }
}
