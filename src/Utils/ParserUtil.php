<?php


namespace legiaifenix\wpcftoop\Utils;


class ParserUtil
{
    const REPLACEABLES = [' ', '-', '#', ':'];

    public static function parseNameToDBFormat(string $name)
    {
        return strtolower(str_replace(self::REPLACEABLES, '_', $name));
    }
}