<?php

namespace ErikAraujo\FilamentEnumAttributes\Concerns;

use ErikAraujo\FilamentEnumAttributes\Attributes\Label;
use ReflectionClassConstant;

trait HasLabelAttribute
{
    public function getLabel(): ?string
    {
        $ref = new ReflectionClassConstant(self::class, $this->name);

        $labelClassAttributes = $ref->getAttributes(Label::class);
        if (count($labelClassAttributes) > 0) {
            if ($labelClassAttributes[0]->newInstance()->translate && function_exists('__')) {
                return __($labelClassAttributes[0]->newInstance()->label);
            }

            return $labelClassAttributes[0]->newInstance()->label;
        }

        if ($this->shouldAutoGenerateLabelFromValue()) {
            return $this->generateLabelFromValue();
        }

        return null;
    }

    private function shouldAutoGenerateLabelFromValue(): bool
    {
        return true;
    }

    private function generateLabelFromValue(): string
    {
        $parts = explode(' ', $this->value);

        $parts = count($parts) > 1
            ? array_map(
                fn (string $value): string => mb_convert_case($value, MB_CASE_TITLE, 'UTF-8'),
                $parts
            )
            : array_map(
                fn (string $value): string => mb_convert_case($value, MB_CASE_TITLE, 'UTF-8'),
                preg_split('/(?=\p{Lu})/u', implode('_', $parts), -1, PREG_SPLIT_NO_EMPTY)
            );

        $collapsed = str_replace(['-', '_', ' '], '_', implode('_', $parts));

        return implode(' ', array_filter(explode('_', $collapsed)));
    }
}
