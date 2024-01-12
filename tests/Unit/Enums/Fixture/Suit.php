<?php

namespace ErikAraujo\FilamentEnumAttributes\Tests\Unit\Enums\Fixture;

use ErikAraujo\FilamentEnumAttributes\Attributes\Color;
use ErikAraujo\FilamentEnumAttributes\Attributes\Icon;
use ErikAraujo\FilamentEnumAttributes\Attributes\Label;
use ErikAraujo\FilamentEnumAttributes\Concerns\HasColorAttribute;
use ErikAraujo\FilamentEnumAttributes\Concerns\HasIconAttribute;
use ErikAraujo\FilamentEnumAttributes\Concerns\HasLabelAttribute;

enum Suit: string
{
    use HasColorAttribute;
    use HasIconAttribute;
    use HasLabelAttribute;

    #[Color([
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
    ])]
    case Clubs = 'clubs';

    #[
        Color('warning'),
        Label('Shine bright'),
    ]
    case Diamonds = 'diamonds';

    #[Color('gray')]
    #[Label('Heart')]
    #[Icon('heroicon-o-heart')]
    case Hearts = 'hearts';

    case Spades = 'spades';

    private function shouldAutoGenerateLabelFromValue(): bool
    {
        return false;
    }
}
