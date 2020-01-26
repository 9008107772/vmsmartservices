<?php

/**
 * @file
 * Contains \Drupal\smartservices_form\Form\SmartservicesForm.
 */

namespace Drupal\smartservices_form\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Url;
use Drupal\taxonomy\Entity\Vocabulary;
use Drupal\taxonomy;
use Drupal\Core\Ajax\AjaxResponse;
use Drupal\Core\Ajax\DataCommand;
use Drupal\Core\Ajax\HtmlCommand;

/**
 * Form controller for the user register forms.
 */
class SmartservicesForm extends FormBase {
  /**
   * {@inheritdoc}.
   */
  public function getFormId() {
    return 'smartservices_customform_form';
  }

  /**
   * {@inheritdoc}.
   */
  public function buildForm(array $form, FormStateInterface $form_state,$parent = NULL,$child = NULL) {

	if($parent == '1'){
		$form['phone_number'] = array(
		  '#type' => 'textfield',
		  '#title' => $this->t('Mobile Number'),
		  '#maxlength' => 15,
		);

		$form['amount'] = array(
		  '#type' => 'textfield',
		  '#title' => $this->t('Amount'),
		  '#maxlength' => 15,
		);
	}
	if($parent == '2'){
		$form['phone_number'] = array(
		  '#type' => 'textfield',
		  '#title' => $this->t('Customer ID'),
		  '#maxlength' => 15,
		);

		$form['amount'] = array(
		  '#type' => 'textfield',
		  '#title' => $this->t('Recharge Amount'),
		  '#maxlength' => 15,
		);
	}
	if($parent == '6'){
		$form['phone_number'] = array(
		  '#type' => 'textfield',
		  '#title' => $this->t('Consumer Number'),
		  '#maxlength' => 15,
		);

		$form['amount'] = array(
		  '#type' => 'textfield',
		  '#title' => $this->t('Bill Amount'),
		  '#maxlength' => 15,
		);
	}
	if($parent == '13'){
		$form['phone_number'] = array(
		  '#type' => 'textfield',
		  '#title' => $this->t('Mobile Number'),
		  '#maxlength' => 15,
		);

		$form['amount'] = array(
		  '#type' => 'textfield',
		  '#title' => $this->t('Amount'),
		  '#maxlength' => 15,
		);
	}
	if($parent == '5'){
		$form['phone_number'] = array(
		  '#type' => 'textfield',
		  '#title' => $this->t('Customer ID'),
		  '#maxlength' => 15,
		);
	}

    $form['submit'] = array(
      '#type' => 'submit',
      '#value' => t('Recharge'),
    );

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {

  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {

    
  }
}
  