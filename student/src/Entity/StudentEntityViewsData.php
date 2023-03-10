<?php

namespace Drupal\student\Entity;

use Drupal\views\EntityViewsData;

/**
 * Provides Views data for Student entity entities.
 */
class StudentEntityViewsData extends EntityViewsData {

  /**
   * {@inheritdoc}
   */
  public function getViewsData() {
    $data = parent::getViewsData();

    // Additional information for Views integration, such as table joins, can be
    // put here.
    return $data;
  }

}
