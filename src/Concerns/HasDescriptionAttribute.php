<?php

namespace ErikAraujo\FilamentEnumAttributes\Concerns;

use ErikAraujo\FilamentEnumAttributes\Attributes\Description;
use ReflectionClassConstant;

trait HasDescriptionAttribute
{
    public function getDescription(): ?string
    {
        $ref = new ReflectionClassConstant(self::class, $this->name);

        $descriptionClassAttributes = $ref->getAttributes(Description::class);
        if (count($descriptionClassAttributes) > 0) {
            if ($descriptionClassAttributes[0]->newInstance()->translate && function_exists('__')) {
                return __($descriptionClassAttributes[0]->newInstance()->description);
            }

            return $descriptionClassAttributes[0]->newInstance()->description;
        }

        return null;
    }
}
