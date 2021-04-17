<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class PublishStateType extends Enum
{
    const DRAFT = 'draft';
    const PUBLIC = 'public';

    /**
     * Get the description for an enum value
     *
     * @param $value
     * @return string
     */
    public static function getDescription($value): string
    {
        switch ($value){
            case self::DRAFT:
                return '下書き';
                brake;
            case self::PUBLIC:
                return '公開';
                brake;
            default:
                return self::getKey($value);
        }
    }

    public static function getValue(string $key)
    {
        switch ($key){
            case '下書き':
                return 0;
            case '公開':
                return 1;
            default:
                return parent::getValue($key);
        }
    }
}
