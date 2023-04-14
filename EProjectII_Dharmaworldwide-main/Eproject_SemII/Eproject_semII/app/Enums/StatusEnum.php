<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class StatusEnum extends Enum
{
    const Cancel =   -1;
    const wait_for_confirmation =   1;
    const confirmed = 2;
    const delivery = 3;
    const Complete = 4;
}
