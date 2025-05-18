<?php declare(strict_types=1);

namespace AlanVdb\Composer;

use AlanVdb\Validator\Definition\ValidatorInterface;

class ComposerProjectNameValidator implements ValidatorInterface
{
    public function validate(mixed $value) : bool
    {
        return is_string($value) ? (bool) preg_match('/^[a-z0-9]([_.-]?[a-z0-9]+)*\/[a-z0-9]([_.-]?[a-z0-9]+)*$/', $value) : false;
    }
}
