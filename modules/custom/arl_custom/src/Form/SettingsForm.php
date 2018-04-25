<?php

namespace Drupal\arl_custom\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Implements an example form.
 */
class SettingsForm extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'arl_custom_settings_form';
  }

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return [
      'arl_custom.settings',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('arl_custom.settings');

    $form['arl_custom_header_settings'] = array(
      '#type' => 'fieldset',
      '#title' => $this->t('Header'),
      '#collapsible' => TRUE,
    );

    $form['arl_custom_header_settings']['arl_cust_header_set_login_btn_text'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Button text'),
      '#default_value' => $config->get('arl_cust_header_set_login_btn_text'),
    );

    $form['arl_custom_header_settings']['arl_cust_header_set_login_url'] = array(
      '#type' => 'textfield',
      '#size' => 50,
      '#title' => $this->t('Log in url'),
      '#default_value' => $config->get('arl_cust_header_set_login_url'),
    );

    $form['arl_custom_header_settings']['arl_cust_header_set_login_text'] = array(
      '#type' => 'textarea',
      '#size' => 50,
      '#title' => $this->t('Log in text'),
      '#default_value' => $config->get('arl_cust_header_set_login_text'),
    );

    $form['arl_custom_contact_settings'] = array(
      '#type' => 'fieldset',
      '#title' => $this->t('Contact'),
      '#collapsible' => TRUE,
    );

    $form['arl_custom_contact_settings']['arl_cust_contact_set_tel'] = array(
      '#type' => 'textfield',
      '#size' => 50,
      '#title' => $this->t('Telephone'),
      '#default_value' => $config->get('arl_cust_contact_set_tel'),
    );

    $form['arl_custom_contact_settings']['arl_cust_contact_set_email'] = array(
      '#type' => 'textfield',
      '#size' => 50,
      '#title' => $this->t('Email'),
      '#default_value' => $config->get('arl_cust_contact_set_email'),
    );

    $form['arl_custom_files_settings'] = array(
      '#type' => 'fieldset',
      '#title' => $this->t('Files'),
      '#collapsible' => TRUE,
    );

    $form['arl_custom_files_settings']['arl_cust_files_nid'] = array(
      '#type' => 'number',
      '#size' => 50,
      '#title' => $this->t('Files page nid'),
      '#default_value' => $config->get('arl_cust_files_nid'),
    );

    return parent::buildForm($form, $form_state);
  }

//  /**
//   * {@inheritdoc}
//   */
//  public function validateForm(array &$form, FormStateInterface $form_state) {
//    if (strlen($form_state->getValue('phone_number')) < 3) {
//      $form_state->setErrorByName('phone_number', $this->t('The phone number is too short. Please enter a full phone number.'));
//    }
//  }
//
//  /**
//   * {@inheritdoc}
//   */
//  public function submitForm(array &$form, FormStateInterface $form_state) {
//    drupal_set_message($this->t('Your phone number is @number', array('@number' => $form_state->getValue('phone_number'))));
//  }


  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $values = $form_state->getValues();

    $this->config('arl_custom.settings')
      ->set('arl_cust_header_set_login_btn_text', $values['arl_cust_header_set_login_btn_text'])
      ->set('arl_cust_header_set_login_url', $values['arl_cust_header_set_login_url'])
      ->set('arl_cust_header_set_login_text', $values['arl_cust_header_set_login_text'])
      ->set('arl_cust_contact_set_tel', $values['arl_cust_contact_set_tel'])
      ->set('arl_cust_contact_set_email', $values['arl_cust_contact_set_email'])
      ->set('arl_cust_files_nid', $values['arl_cust_files_nid'])
      ->save();
  }
}
