<?php

namespace ErikAraujo\FilamentEnumAttributes\Tests\Unit\Enums;

use ErikAraujo\FilamentEnumAttributes\Tests\TestCase;
use ErikAraujo\FilamentEnumAttributes\Tests\Unit\Enums\Fixture\Suit;
use ErikAraujo\FilamentEnumAttributes\Tests\Unit\Enums\Fixture\UnoSpecialCard;

class HasLabelAttributeTest extends TestCase
{
    public function test_it_returns_auto_generated_label_if_no_label_attribute_is_set(): void
    {
        $this->assertSame('Draw Two', UnoSpecialCard::DrawTwo->getLabel());
        $this->assertSame('Draw Four', UnoSpecialCard::DrawFour->getLabel());
        $this->assertSame('Skip Next', UnoSpecialCard::SkipNext->getLabel());
        $this->assertSame('Reverse Direction', UnoSpecialCard::ReverseDirection->getLabel());
    }

    public function test_it_returns_a_string_if_a_string_label_attribute_is_set(): void
    {
        $this->assertSame('Heart', Suit::Hearts->getLabel());
        $this->assertSame('Shine bright', Suit::Diamonds->getLabel());
    }

    public function test_it_returns_null_if_automatic_generation_is_disabled(): void
    {
        $this->assertNull(Suit::Clubs->getLabel());
        $this->assertNull(Suit::Spades->getLabel());
    }
}
