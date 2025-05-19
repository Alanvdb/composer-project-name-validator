<?php declare(strict_types=1);

namespace AlanVdb\Composer;

use AlanVdb\Validator\Definition\ValidatorInterface;

class ComposerProjectNameValidator implements ValidatorInterface
{
    private string $errorMessage;

    public function __construct(string $errorMessage = 'The project name must be in the format vendor/package.')
    {
        $this->errorMessage = $errorMessage;
    }

    public function isValid(mixed $value) : bool
    {
        return is_string($value) ? (bool) preg_match('/^[a-z0-9]([_.-]?[a-z0-9]+)*\/[a-z0-9]([_.-]?[a-z0-9]+)*$/', $value) : false;
    }

    public function getErrorMessage() : string
    {
        return $this->errorMessage;
    }
}
