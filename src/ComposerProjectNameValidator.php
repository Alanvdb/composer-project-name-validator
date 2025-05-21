<?php declare(strict_types=1);

namespace AlanVdb\Composer;

use AlanVdb\Validator\Definition\ValidatorInterface;
use AlanVdb\Validator\AbstractValidator;

class ComposerProjectNameValidator
    extends AbstractValidator
    implements ValidatorInterface
{
    public function __construct(string $errorMessage = 'The project name must be in the format vendor/package.')
    {
        parent::__construct($errorMessage);
    }

    public function isValid(mixed $value) : bool
    {
        return is_string($value) ? (bool) preg_match('/^[a-z0-9]([_.-]?[a-z0-9]+)*\/[a-z0-9](([_.]|-{1,2})?[a-z0-9]+)*$/', $value) : false;
    }
}
