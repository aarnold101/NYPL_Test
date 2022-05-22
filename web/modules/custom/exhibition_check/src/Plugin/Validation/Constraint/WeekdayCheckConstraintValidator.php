<?php

namespace Drupal\exhibition_check\Plugin\Validation\Constraint;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

/**
 * Validates the Weekday Check Constraint.
 */
class WeekdayCheckConstraintValidator extends ConstraintValidator {

  /**
   * Validator 2.5 and upwards compatible execution context.
   *
   * @var \Symfony\Component\Validator\Context\ExecutionContextInterface
   */
  protected $context;

  /**
   * {@inheritdoc}
   */
  public function validate($items, Constraint $constraint) {
    foreach ($items as $item) {
      if ( date( 'N', $item->value )  >= 6 || date( 'N', $item->end_value )  >= 6 ) {
	$this->context->addViolation($constraint->message);
      }
    }
  } // close function
} // close class
