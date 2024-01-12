<?php

namespace ErikAraujo\FilamentEnumAttributes\Concerns;

use ErikAraujo\FilamentEnumAttributes\Attributes\Icon;
use ReflectionClassConstant;

trait HasIconAttribute
{
    public function getIcon(): ?string
    {
        $ref = new ReflectionClassConstant(self::class, $this->name);
        $classAttributes = $ref->getAttributes(Icon::class);

        if (count($classAttributes) === 0) {
            return null;
        }

        return $classAttributes[0]->newInstance()->icon;
    }
}
