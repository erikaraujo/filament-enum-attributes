<?php

namespace ErikAraujo\FilamentEnumAttributes\Tests\Unit\Enums\Fixture;

use ErikAraujo\FilamentEnumAttributes\Concerns\HasLabelAttribute;

enum UnoSpecialCard: string
{
    use HasLabelAttribute;

    case DrawTwo = 'draw two';

    case DrawFour = 'draw_four';

    case SkipNext = 'skip-next';

    case ReverseDirection = 'reverseDirection';
}
