<?php

namespace ErikAraujo\FilamentEnumAttributes\Attributes;

use Attribute;

#[Attribute(Attribute::TARGET_CLASS_CONSTANT | Attribute::TARGET_CLASS)]
class Color
{
    /**
     * @param  string|array{50:string,100:string,200:string,300:string,400:string,500:string,600:string,700:string,800:string,900:string,950:string}|null  $color
     */
    public function __construct(
        public string | array | null $color,
    ) {
    }
}
