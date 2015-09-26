<?php

/**
 * @file
 * Contains \Drupal\tutorial1\Controller\DemoController.
 */

namespace Drupal\routing\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * DemoController.
 */
class SimpleRoutingController extends ControllerBase {
  /**
   * Generates an example page.
   */
  public function helloWorld() {
    return array(
      '#markup' => t('Hello World!'),
    );
  }
}
