<?php

namespace ErikAraujo\FilamentEnumAttributes\Attributes;

use Attribute;

#[Attribute(Attribute::TARGET_CLASS_CONSTANT | Attribute::TARGET_CLASS)]
class Label
{
    public function __construct(
        public ?string $label,
        public bool $translate = false,
    ) {
    }
}
