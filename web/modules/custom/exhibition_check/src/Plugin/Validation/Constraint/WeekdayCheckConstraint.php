<?php

namespace Drupal\exhibition_check\Plugin\Validation\Constraint;

use Symfony\Component\Validator\Constraint;

/**
 * Checks that the submitted dates are on weekdays only
 *
 * @Constraint(
 *   id = "WeekdayCheck",
 *   label = @Translation("Only allows weekday values", context = "Validation"),
 * )
 */
class WeekdayCheckConstraint extends Constraint {

  /**
   * The default violation message.
   *
   * @var string
   */
  public $message = 'You may only select weekdays for the start and end.';
}

