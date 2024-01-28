<?php

namespace ErikAraujo\FilamentEnumAttributes\Attributes;

use Attribute;

#[Attribute(Attribute::TARGET_CLASS_CONSTANT | Attribute::TARGET_CLASS)]
class Description
{
    public function __construct(
        public ?string $description,
        public bool $translate = false,
    ) {
    }
}
