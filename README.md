# Filament Enum Attributes

[![Latest Version on Packagist](https://img.shields.io/packagist/v/erikaraujo/filament-enum-attributes.svg?style=flat-square)](https://packagist.org/packages/erikaraujo/filament-enum-attributes)
[![Total Downloads](https://img.shields.io/packagist/dt/erikaraujo/filament-enum-attributes.svg?style=flat-square)](https://packagist.org/packages/erikaraujo/filament-enum-attributes)
![GitHub Actions](https://github.com/erikaraujo/filament-enum-attributes/actions/workflows/main.yml/badge.svg)

Enum traits to allow the use of attributes in Filament Enums.

## Installation

You can install the package via composer:

```bash
composer require erikaraujo/filament-enum-attributes
```

## Usage

First, you need to import and use the `Enum` traits in your Filament enum class:

```php
use HasColorAttribute;
use HasIconAttribute;
use HasLabelAttribute;
use HasDescriptionAttribute;
```

Or you can import all traits by simply doing:

```php
use HasFilamentEnumAttributes;
```

Now, instead of coding the default filament `get` methods (`getColor()`, `getIcon()` and `getLabel()`) as per the documentation, you may simply use the `#[Color]`, `#[Icon]` and `#[Label]` attributes in your enum cases.

See example below:

```php
enum Suit: string implements HasColor, HasIcon, HasLabel, HasDescription
{
    use HasColorAttribute;
    use HasIconAttribute;
    use HasLabelAttribute;
    use HasDescriptionAttribute;

    #[Color(['gray', 'warning'])]
    case Clubs = 'clubs';

    #[
        Color('warning'),
        Label('Shine bright'),
    ]
    case Diamonds = 'diamonds';

    #[Color('gray')]
    #[Label('Club')]
    #[Icon('heroicon-o-heart')]
    case Hearts = 'hearts';

    #[Description('The upside down black heart.')]
    case Spades = 'spades';
```

Make sure everything is imported:
```php
use ErikAraujo\FilamentEnumAttributes\Attributes\Color;
use ErikAraujo\FilamentEnumAttributes\Attributes\Icon;
use ErikAraujo\FilamentEnumAttributes\Attributes\Label;
use ErikAraujo\FilamentEnumAttributes\Concerns\HasColorAttribute;
use ErikAraujo\FilamentEnumAttributes\Concerns\HasIconAttribute;
use ErikAraujo\FilamentEnumAttributes\Concerns\HasLabelAttribute;
use ErikAraujo\FilamentEnumAttributes\Concerns\HasDescriptionAttribute;
```

You can also pass a boolean `translate` param to both the `Label` and `Description` attributes if you want to translate the string using the laravel helper.
So, the following:

```php
#[Description('descriptions.suits.spades')]
```

Will be evaluated as `__('descriptions.suits.spades')`.


### Testing

To execute the tests, just run the composer scriopt:

```bash
composer test
```

If you want to check on the coverage, run:

```bash
composer test:coverage:html
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
