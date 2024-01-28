<?php

namespace ErikAraujo\FilamentEnumAttributes\Tests\Unit\Enums;

use ErikAraujo\FilamentEnumAttributes\Tests\TestCase;
use ErikAraujo\FilamentEnumAttributes\Tests\Unit\Enums\Fixture\UnoSpecialCard;

class HasDescriptionAttributeTest extends TestCase
{
    public function test_it_returns_a_string_if_a_string_description_attribute_is_set(): void
    {
        $this->assertSame('Draw two cards from the deck and skip your turn', UnoSpecialCard::DrawTwo->getDescription());
        $this->assertSame('Draw four cards from the deck and skip your turn', UnoSpecialCard::DrawFour->getDescription());
        $this->assertSame('Reverse the direction of play', UnoSpecialCard::ReverseDirection->getDescription());
    }

    public function test_it_returns_null_if_no_description_is_set(): void
    {
        $this->assertNull(UnoSpecialCard::SkipNext->getDescription());
    }
}
