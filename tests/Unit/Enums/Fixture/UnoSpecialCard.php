<?php

namespace ErikAraujo\FilamentEnumAttributes\Tests\Unit\Enums\Fixture;

use ErikAraujo\FilamentEnumAttributes\Attributes\Description;
use ErikAraujo\FilamentEnumAttributes\Concerns\HasDescriptionAttribute;
use ErikAraujo\FilamentEnumAttributes\Concerns\HasLabelAttribute;

enum UnoSpecialCard: string
{
    use HasDescriptionAttribute;
    use HasLabelAttribute;

    #[Description('Draw two cards from the deck and skip your turn')]
    case DrawTwo = 'draw two';

    #[Description('Draw four cards from the deck and skip your turn')]
    case DrawFour = 'draw_four';

    case SkipNext = 'skip-next';

    #[Description('Reverse the direction of play')]
    case ReverseDirection = 'reverseDirection';
}
