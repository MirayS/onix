<?php

declare(strict_types=1);

namespace MirayS\Onix\Hydration;

use ReflectionClass;
use ReflectionNamedType;

final class ClassMetadataFactory
{
    private static array $cache = [];

    public static function for(string $class): array
    {
        if (isset(self::$cache[$class])) {
            return self::$cache[$class];
        }

        $map = [];

        foreach ((new ReflectionClass($class))->getMethods() as $method) {
            if (!$method->isPublic() || $method->isStatic()) {
                continue;
            }

            $name = $method->getName();

            if (str_starts_with($name, 'set')) {
                $element = substr($name, 3);
                $collection = false;
            } elseif (str_starts_with($name, 'add')) {
                $element = substr($name, 3);
                $collection = true;
            } else {
                continue;
            }

            if ($element === '' || $method->getNumberOfParameters() !== 1) {
                continue;
            }

            $type = $method->getParameters()[0]->getType();
            $className = null;
            $builtinType = null;

            if ($type instanceof ReflectionNamedType) {
                if ($type->isBuiltin()) {
                    $builtinType = $type->getName();
                } else {
                    $className = $type->getName();
                }
            } else {
                $builtinType = 'string';
            }

            $key = strtolower($element);

            if (isset($map[$key]) && !$collection) {
                continue;
            }

            $map[$key] = new PropertyMetadata($element, $name, $collection, $className, $builtinType);
        }

        return self::$cache[$class] = $map;
    }
}
