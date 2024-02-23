<?php

namespace swuppio\randstring;

class RandString
{
    /**
     * @deprecated Use RandString::gen() instead
     */
    public static function generate(array $config = []): string
    {
        return self::gen(
            $config['length'] ?? 5,
            $config['chars'] ?? self::getChars()
        );
    }

    public static function gen(int $length = 5, ?string $symbols = null): string
    {
        if (empty($symbols)) {
            $symbols = self::getChars();
        }

        $numChars = strlen($symbols);
        $string = '';

        for ($i = 0; $i < $length; $i++) {
            $string .= $symbols[rand(0, $numChars - 1)];
        }

        return $string;
    }

    public static function getChars(): string
    {
        $symbols = [
            ['start' => ord('A'), 'end' => ord('Z')],
            ['start' => ord('a'), 'end' => ord('z')],
            ['start' => ord('0'), 'end' => ord('9')]
        ];

        return implode('', array_map(function ($range) {
            return implode('', range(chr($range['start']), chr($range['end'])));
        }, $symbols));
    }
}
