<?php

namespace ErikAraujo\FilamentEnumAttributes\Concerns;

use ErikAraujo\FilamentEnumAttributes\Attributes\Color;
use ReflectionClassConstant;

trait HasColorAttribute
{
    /**
     * @return string|array{50:string,100:string,200:string,300:string,400:string,500:string,600:string,700:string,800:string,900:string,950:string}|null
     */
    public function getColor(): string | array | null
    {
        $ref = new ReflectionClassConstant(self::class, $this->name);
        $classAttributes = $ref->getAttributes(Color::class);

        if (count($classAttributes) === 0) {
            return null;
        }

        return $classAttributes[0]->newInstance()->color;
    }
}
