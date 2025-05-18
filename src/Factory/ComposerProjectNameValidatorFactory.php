<?php declare(strict_types=1);

namespace AlanVdb\Composer;

use AlanVdb\Validator\Definition\ValidatorInterface;
use AlanVdb\Composer\Definition\ComposerProjectNameValidatorFactoryInterface;
use AlanVdb\Composer\ComposerProjectNameValidator;

class ComposerProjectNameValidatorFactory implements ComposerProjectNameValidatorFactoryInterface
{
    public function create() : ValidatorInterface
    {
        return new ComposerProjectNameValidator();
    }
}
