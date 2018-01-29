<?php

namespace BG\CoreBundle\Validator;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class ValidateValueValidator extends ConstraintValidator
{
  public function validate($value, Constraint $constraint)
  {
    if ($value > 100 || $value < ) {
      $this->context->addViolation($constraint->message);
    }
  }
}
