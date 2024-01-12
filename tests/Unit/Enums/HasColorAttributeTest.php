<?php

namespace ErikAraujo\FilamentEnumAttributes\Tests\Unit\Enums;

use ErikAraujo\FilamentEnumAttributes\Tests\TestCase;
use ErikAraujo\FilamentEnumAttributes\Tests\Unit\Enums\Fixture\Suit;

class HasColorAttributeTest extends TestCase
{
    public function test_it_returns_null_if_no_color_attribute_is_set(): void
    {
        $this->assertNull(Suit::Spades->getColor());
    }

    public function test_it_returns_a_string_if_a_string_color_attribute_is_set(): void
    {
        $this->assertSame('gray', Suit::Hearts->getColor());
        $this->assertSame('warning', Suit::Diamonds->getColor());
    }

    public function test_it_returns_an_array_if_a_color_attribute_is_set(): void
    {
        $expectedColor = [
            50 => '254, 242, 242',
            100 => '254, 226, 226',
            200 => '254, 202, 202',
            300 => '252, 165, 165',
            400 => '248, 113, 113',
            500 => '239, 68, 68',
            600 => '220, 38, 38',
            700 => '185, 28, 28',
            800 => '153, 27, 27',
            900 => '127, 29, 29',
            950 => '69, 10, 10',
        ];

        $this->assertSame($expectedColor, Suit::Clubs->getColor());
    }
}
