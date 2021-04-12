<?php

declare(strict_types=1);

namespace Nawarian\Raylib\Types;

use FFI;
use FFI\CData;
use InvalidArgumentException;
use Nawarian\Raylib\RaylibFFIProxy;

final class Color
{
    public int $red;
    public int $green;
    public int $blue;
    public int $alpha;

    public function __construct(int $red, int $green, int $blue, int $alpha)
    {
        $this->red = $red;
        $this->green = $green;
        $this->blue = $blue;
        $this->alpha = $alpha;
    }

    public static function lightGray(): Color
    {
        return new self(200, 200, 200, 255);
    }

    public static function gray(): Color
    {
        return new self(130, 130, 130, 255);
    }

    public static function darkGray(): Color
    {
        return new self(80, 80, 80, 255);
    }

    public static function blue(): Color
    {
        return new self(0, 121, 241, 255);
    }

    public static function gold(): Color
    {
        return new self(255, 203, 0, 255);
    }

    public static function green(): Color
    {
        return new self(0, 228, 48, 255);
    }

    public static function lime(): Color
    {
        return new self(0, 158, 47, 255);
    }

    public static function maroon(): Color
    {
        return new self(190, 33, 55, 255);
    }

    public static function skyBlue(): Color
    {
        return new self(102, 191, 255, 255);
    }

    public static function red(): Color
    {
        return new self(230, 41, 55, 255);
    }

    public static function black(): Color
    {
        return new self(0, 0, 0, 255);
    }

    public static function rayWhite(): Color
    {
        return new self(245, 245, 245, 255);
    }

    /**
     * @psalm-suppress MixedPropertyAssignment
     * @psalm-suppress UndefinedPropertyAssignment
     */
    public function toCData(RaylibFFIProxy $ffi): CData
    {
        try {
            /** @var CData $color */
            $color = $ffi->new('Color');
        } catch (FFI\ParserException $e) {
            throw new InvalidArgumentException(
                'Object $ffi does not provide the type "struct Color"'
            );
        }

        $color->r = $this->red;
        $color->g = $this->green;
        $color->b = $this->blue;
        $color->a = $this->alpha;

        return $color;
    }
}