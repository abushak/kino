<?php
/**
 * @file
 * Enables modules and site configuration for a druppio site installation.
 */

use Drupal\contact\Entity\ContactForm;
use Drupal\Core\Form\FormStateInterface;

/**
 * Implements hook_form_FORM_ID_alter() for install_select_language_form().
 *
 * Allows the profile to alter the language settings form.
 */
function druppio_monopage_profile_form_install_select_language_form_alter(&$form, FormStateInterface $form_state) {
  $form['actions']['submit']['#suffix'] = druppio_monopage_profile_form_footer_content();
}

/**
 * Implements hook_form_FORM_ID_alter() for install_settings_form().
 *
 * Allows the profile to alter the site settings form.
 */
function druppio_monopage_profile_form_install_settings_form_alter(&$form, FormStateInterface $form_state) {
  $form['actions']['submit']['#suffix'] = druppio_monopage_profile_form_footer_content();
}

/**
 * Implements hook_form_FORM_ID_alter() for install_configure_form().
 *
 * Allows the profile to alter the configuration settings form.
 */
function druppio_monopage_profile_form_install_configure_form_alter(&$form, FormStateInterface $form_state) {
  $form['actions']['submit']['#suffix'] = druppio_monopage_profile_form_footer_content();
	$form['#submit'][] = 'druppio_monopage_profile_form_install_configure_submit';
}

/**
 * Submission handler to sync the contact.form.feedback recipient.
 */
function druppio_monopage_profile_form_install_configure_submit($form, FormStateInterface $form_state) {
  $site_mail = $form_state->getValue('site_mail');
  ContactForm::load('feedback')->setRecipients([$site_mail])->trustData()->save();
}

/**
 * Custom form footer content.
 */
function druppio_monopage_profile_form_footer_content() {
  $drupal = 'http://drupal.org/';
  $druppio = 'http://www.druppio.com/';

  $druppio_monopage_profile_path = drupal_get_path('profile', 'druppio_monopage_profile');
  $logo = $druppio_monopage_profile_path . '/images/druppio_logo.png';

  $html = '';
  $html .= '<br><br><br>';
  $html .= '<a href="'.$druppio.'" target="_blank" /><img src="/'.$logo.'" /></a>';
  $html .= '<p><em>Powered by <a href="'.$drupal.'">Drupal</a> and <a href="'.$druppio.'" target="_blank">Druppio</a>.</em></p>';

  return $html;
}
