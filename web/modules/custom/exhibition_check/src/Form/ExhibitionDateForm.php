<?php

namespace Drupal\date_validate\Form;

use Drupal\Core\Entity\EntityForm;
use Drupal\Core\Form\FormStateInterface;

class  FormValidate {

  public function validateForm(array &$form, FormStateInterface $form_state) {
    parent::validateForm($form, $form_state);
    if (empty($form_state->getValue('time_format')) && empty($form_state->getValue('date_format'))) {
      $form_state->setErrorByName('field_date_range', $this->t('Please specify either the time format or the date format.'));
    }
  }

} // class end
