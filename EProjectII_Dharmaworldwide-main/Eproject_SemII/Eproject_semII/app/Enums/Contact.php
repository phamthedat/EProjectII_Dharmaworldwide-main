<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class Contact extends Enum
{
    const waiting_for_response =   1;
    const responded = 2;
}
