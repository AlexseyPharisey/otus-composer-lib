<?php
declare(strict_types=1);

namespace Aleksey\OtusComposerPackage;
class PhoneValidatorRU
{
    const PHONE_LENGTH = 11;

    function validate(string $phoneNumber): bool
    {
        $phoneNumber = preg_replace('/\D/', '', $phoneNumber);

        if (preg_match('/^\+?\d{1,3}?\d{9,12}$/', $phoneNumber)
            && strlen($phoneNumber) === self::PHONE_LENGTH
            && preg_match('/^(?:\+7|8)\d{10}$/', $phoneNumber)
        ) {
            return true;
        } else {
            return false;
        }
    }
}
