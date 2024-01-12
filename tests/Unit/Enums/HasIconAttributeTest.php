<?php

namespace ErikAraujo\FilamentEnumAttributes\Tests\Unit\Enums;

use ErikAraujo\FilamentEnumAttributes\Tests\TestCase;
use ErikAraujo\FilamentEnumAttributes\Tests\Unit\Enums\Fixture\Suit;

class HasIconAttributeTest extends TestCase
{
    public function test_it_returns_null_if_no_icon_attribute_is_set(): void
    {
        $this->assertNull(Suit::Clubs->getIcon());
        $this->assertNull(Suit::Diamonds->getIcon());
        $this->assertNull(Suit::Spades->getIcon());
    }

    public function test_it_returns_a_string_if_a_string_icon_attribute_is_set(): void
    {
        $this->assertSame('heroicon-o-heart', Suit::Hearts->getIcon());
    }
}
