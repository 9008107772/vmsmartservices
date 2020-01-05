<?php
/**
 * @file
 * Contains \Drupal\smartservices_form\Controller\SmartservicesController.
 */

namespace Drupal\smartservices_form\Controller;

use Drupal\Core\Url;
use Drupal\Core\Controller\ControllerBase;

class SmartservicesController extends ControllerBase {
  public function content() {
	return array(
      \Drupal::formBuilder()
        ->getForm('Drupal\smartservices_form\Form\SmartservicesForm')
    );
  }
}