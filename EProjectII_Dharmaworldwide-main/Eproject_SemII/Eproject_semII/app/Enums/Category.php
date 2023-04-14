<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class Category extends Enum
{
    const Progressive_House =   1;
    const Future_Bass = 2;
    const Big_room = 3;
}
