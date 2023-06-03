<?php

namespace BernardinoCampos\TelegramBot;

use function BernardinoCampos\Values\get_value;
use function BernardinoCampos\Values\get_values;
use function BernardinoCampos\Values\set_object;
use function BernardinoCampos\Values\set_value;

#[\AllowDynamicProperties]
class LabeledPrice
{
    private $values = [];

    public function __construct(string $label, int $amount)
    {
        set_value($this, 'label', $label);
        set_value($this, 'amount', $amount);
    }

    public function getLabel(): string
    {
        return get_value($this, 'label');
    }

    public function getAmount(): int
    {
        return get_value($this, 'amount');
    }
}
