<?php

use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Theme\ThemeSettings;
use Drupal\system\Form\ThemeSettingsForm;
use Drupal\Core\Form;
use Drupal\block\Entity\Block;
use Drupal\block_content\Entity\BlockContent;

/**
 * Implements hook_form_system_theme_settings_alter().
 */
function druppio_monopage_form_system_theme_settings_alter(&$form, \Drupal\Core\Form\FormStateInterface $form_state) {

  // 0. Vertical tabs.
  $form['druppiomonopage'] = array(
    '#type' => 'vertical_tabs',
    '#title' => 'Druppio monopage Settings',
  );

  // 1. Style settings tab.
  $form['druppiomonopagestyle'] = array(
    '#type' => 'details',
    '#title' => t('Style'),
    '#description' => '<strong>' . t('Custom CSS Settings') . '</strong>',
    '#group' => 'druppiomonopage',
  );

  $form['druppiomonopagestyle']['druppio_monopage_custom_css_enable'] = array(
    '#type' => 'checkbox',
    '#title' => t('Enable custom CSS'),
    '#description' => t('Enable this option if you want to add custom CSS without
    modifying theme. When you enable it, a new text area will appear below, where
    you can enter CSS. Entire content of text area will be saved in the following file: "/sites/default/files/druppio-monopage-custom.css"
    after you click on the "Save configuration" button. If you disable this option you will
    not loose any of your existing custom CSS, but it will not be applied to pages.'),
    '#default_value' => theme_get_setting('druppio_monopage_custom_css_enable'),
    '#group' => 'druppiomonopagestyle',
  );

  // Load custom CSS from file.
  if (file_exists('public://druppio-monopage-custom.css'))
    $custom_css = file_get_contents('public://druppio-monopage-custom.css');
  else
    $custom_css = '';

  $form['druppiomonopagestyle']['druppio_monopage_custom_css'] = array(
    '#type' => 'textarea',
    '#title' => t('Custom CSS'),
    '#rows' => 10,
    '#resizable' => TRUE,
    '#default_value' => $custom_css,
    '#description' => t('Enter you custom CSS here or navigate to "/sites/default/files/druppio-monopage-custom.css" and edit the file directly.
    Note: remember not to change the file name.'),
    '#states' => array(
      "visible" => array(
        "input[name='druppio_monopage_custom_css_enable']" => array("checked" => TRUE)),
    ),
    '#group' => 'druppiomonopagestyle',
  );

  // 2. Blocks tab.
  $form['druppiomonopageblocks'] = array(
    '#type' => 'details',
    '#title' => t('Blocks'),
    '#description' => '<strong>' . t('Custom Blocks Settings') . '</strong>',
    '#group' => 'druppiomonopage',
  );

  // Get list of all active blocks.
  $ids = druppio_monopage_get_list_of_active_blocks();

  // Disable 'Create Social Block' button if Social block is already created.
  if (isset($ids['druppio_monopage_social']))
    $social_button_disabled = TRUE;
  else
    $social_button_disabled = FALSE;

  $form['druppiomonopageblocks']['markup1'] = array(
    '#type' => 'markup',
    '#markup' => '<br>',
  );

  // $form['druppiomonopageblocks']['druppiomonopageblocks_create_social'] = array(
  //   '#type' => 'submit',
  //   '#value' => t('Create Social Block'),
  //   '#submit' => array('druppio_monopage_create_block_social'),
  //   '#attributes' => array('disabled' => $social_button_disabled),
  // );

  // Disable 'Create Copyright Block' button if Copyright block is already created.
  if (isset($ids['druppio_monopage_copyright']))
    $copyright_button_disabled = TRUE;
  else
    $copyright_button_disabled = FALSE;

  $form['druppiomonopageblocks']['druppiomonopageblocks_create_copyright'] = array(
    '#type' => 'submit',
    '#value' => t('Create Copyright Block'),
    '#submit' => array('druppio_monopage_create_block_copyright'),
    '#attributes' => array('disabled' => $copyright_button_disabled),
  );

  // Disable 'Create Credits Block' button if Credits block is already created.
  if (isset($ids['druppio_monopage_credits']))
    $credits_button_disabled = TRUE;
  else
    $credits_button_disabled = FALSE;

  $form['druppiomonopageblocks']['druppiomonopageblocks_create_credits'] = array(
    '#type' => 'submit',
    '#value' => t('Create Credits Block'),
    '#submit' => array('druppio_monopage_create_block_credits'),
    '#attributes' => array('disabled' => $credits_button_disabled),
  );

  $form['druppiomonopageblocks']['druppiomonopageblocks_markup'] = array(
    '#type' => 'markup',
    '#markup' => t('Click on the button to automatically create Block. The block that you created will be placed in your footer, but you can <a href="/admin/structure/block#edit-blocks-region-footer-title">move</a> it or <a href="/admin/structure/block/block-content">edit</a> if you want to. Although you can create custom blocks from "Block layout/Custom block library" page. We added this option here for your convenience.'),
    '#prefix' => '<br><br>',
  );

  // 3. Social block
  $form['druppiomonopagesocial'] = array(
    '#type' => 'details',
    '#title' => t('Social block'),
    '#description' => '<strong>' . t('Create Social Block') . '</strong>',
    '#group' => 'druppiomonopage',
  );

  $form['druppiomonopagesocial']['druppio_monopage_facebook'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show Facebook'),
    '#default_value' => theme_get_setting('druppio_monopage_facebook'),
    '#group' => 'druppiomonopagesocial',
  );

  $form['druppiomonopagesocial']['druppio_monopage_facebook_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Facebook link'),
    '#default_value' => theme_get_setting('druppio_monopage_facebook_url'),
    '#group' => 'druppiomonopagesocial',
  );

  $form['druppiomonopagesocial']['druppio_monopage_twitter'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show Twitter'),
    '#default_value' => theme_get_setting('druppio_monopage_twitter'),
    '#group' => 'druppiomonopagesocial',
  );

  $form['druppiomonopagesocial']['druppio_monopage_twitter_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Twitter link'),
    '#default_value' => theme_get_setting('druppio_monopage_twitter_url'),
    '#group' => 'druppiomonopagesocial',
  );

  $form['druppiomonopagesocial']['druppio_monopage_instagram'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show Instagram'),
    '#default_value' => theme_get_setting('druppio_monopage_instagram'),
    '#group' => 'druppiomonopagesocial',
  );

  $form['druppiomonopagesocial']['druppio_monopage_instagram_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Instagram link'),
    '#default_value' => theme_get_setting('druppio_monopage_instagram_url'),
    '#group' => 'druppiomonopagesocial',
  );

  $form['druppiomonopagesocial']['druppio_monopage_linkedin'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show LinkedIn'),
    '#default_value' => theme_get_setting('druppio_monopage_linkedin'),
    '#group' => 'druppiomonopagesocial',
  );

  $form['druppiomonopagesocial']['druppio_monopage_linkedin_url'] = array(
    '#type' => 'textfield',
    '#title' => t('LinkedIn link'),
    '#default_value' => theme_get_setting('druppio_monopage_linkedin_url'),
    '#group' => 'druppiomonopagesocial',
  );

  $form['druppiomonopagesocial']['druppio_monopage_pinterest'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show Pinterest'),
    '#default_value' => theme_get_setting('druppio_monopage_pinterest'),
    '#group' => 'druppiomonopagesocial',
  );

  $form['druppiomonopagesocial']['druppio_monopage_pinterest_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Pinterest link'),
    '#default_value' => theme_get_setting('druppio_monopage_pinterest_url'),
    '#group' => 'druppiomonopagesocial',
  );

  // $form['druppiomonopagesocial']['druppio_monopage_create_social_block'] = array(
  //   '#type' => 'submit',
  //   '#value' => t('Create/Edit'),
  //   '#submit' => array('druppio_monopage_create_social_block'),
  // );

  // $form['druppiomonopagesocial']['druppio_monopage_delete_social_block'] = array(
  //   '#type' => 'submit',
  //   '#value' => t('Delete'),
  //   '#submit' => array('druppio_monopage_delete_social_block'),
  // );

  $form['#validate'][] = 'druppio_monopage_form_system_theme_settings_submit';

  $form['#submit'][] = 'druppio_monopage_create_social_block';

}

/**
 * Save custom CSS to file on form submit.
 */
function druppio_monopage_form_system_theme_settings_submit(&$form, \Drupal\Core\Form\FormStateInterface $form_state) {

  $css = $form_state->getValue('druppio_monopage_custom_css');
  file_put_contents('public://druppio-monopage-custom.css', $css);

}

function druppio_monopage_delete_social_block(&$form, \Drupal\Core\Form\FormStateInterface $form_state) {

  // Block::remove(array('id' => 'druppio_monopage_social_links'));

}

/**
 * Create social block.
 */
function druppio_monopage_create_social_block(&$form, \Drupal\Core\Form\FormStateInterface $form_state) {

  $html = '<ul>';

  if ($form_state->getValue('druppio_monopage_facebook'))
    $html .= '<a href="'.$form_state->getValue('druppio_monopage_facebook_url').'"><li class="fa fa-facebook-official fa-lg"></li></a>';

  if ($form_state->getValue('druppio_monopage_twitter'))
    $html .= '<a href="'.$form_state->getValue('druppio_monopage_twitter_url').'"><li class="fa fa-twitter fa-lg"></li></a>';

  if ($form_state->getValue('druppio_monopage_pinterest'))
    $html .= '<a href="'.$form_state->getValue('druppio_monopage_pinterest_url').'"><li class="fa fa-pinterest-p fa-lg"></li></a>';

  if ($form_state->getValue('druppio_monopage_linkedin'))
    $html .= '<a href="'.$form_state->getValue('druppio_monopage_linkedin_url').'"><li class="fa fa-linkedin fa-lg"></li></a>';

  if ($form_state->getValue('druppio_monopage_instagram'))
    $html .= '<a href="'.$form_state->getValue('druppio_monopage_instagram_url').'"><li class="fa fa-instagram fa-lg"></li></a>';

  $html .= '</ul>';

  $info = 'Social Links';
  $content = $html;
  $block_id = 'druppio_monopage_social_links';
  $region = 'footer';
  $show_title = FALSE;
  $type = '"SocialLinks"';

  $res = db_query("SELECT * FROM block_content_field_data WHERE info='Social Links'");
  $i = 0;
  foreach ($res as $item) {
    $i++;
  }

  if ($i > 0) {
    _edit_in_db($html, $type);
  }
  else {
    druppio_monopage_create_block($info, $content, $block_id, $region, $show_title, $type);
  }

}

function _edit_in_db($html, $type) {

  db_query("UPDATE block_content_field_data
                    LEFT JOIN block_content__body ON block_content_field_data.id=block_content__body.entity_id
                    SET body_value = '".$html."'
                    WHERE info = 'Social Links'");

  drupal_flush_all_caches();

  // drupal_set_message(t('Your @type block has been successfully updated.', array('@type' => $type)));

}

/**
 * Create social block.
 */
function druppio_monopage_create_block_social(&$form, \Drupal\Core\Form\FormStateInterface $form_state) {

  $info = 'Social Block';
  $content = '<ul class="social-links">
	              <li class="fa fa-facebook-official">&nbsp;</li>
	              <li class="fa fa-twitter-square">&nbsp;</li>
	              <li class="fa fa-linkedin-square">&nbsp;</li>
              </ul>';
  $block_id = 'druppio_monopage_social';
  $region = 'footer';
  $show_title = TRUE;
  $type = '"Social"';

  druppio_monopage_create_block($info, $content, $block_id, $region, $show_title, $type);

}

/**
 * Create copyright block.
 */
function druppio_monopage_create_block_copyright(&$form, \Drupal\Core\Form\FormStateInterface $form_state) {

  $info = 'Copyright Block';
  $content = 'Copyright © 2016 <a href="http://www.druppio.com/">Druppio</a>. All rights reserved.';
  $block_id = 'druppio_monopage_copyright';
  $region = 'footer';
  $show_title = TRUE;
  $type = '"Copyright"';

  druppio_monopage_create_block($info, $content, $block_id, $region, $show_title, $type);

}

/**
 * Create credits block.
 */
function druppio_monopage_create_block_credits(&$form, \Drupal\Core\Form\FormStateInterface $form_state) {

  $info = 'Credits Block';
  $content = '<a href="http://www.druppio.com/">Druppio</a>';
  $block_id = 'druppio_monopage_credits';
  $region = 'footer';
  $show_title = TRUE;
  $type = '"Credits"';

  druppio_monopage_create_block($info, $content, $block_id, $region, $show_title, $type);

}

/**
 * Create a custom block and assign it to some region.
 */
function druppio_monopage_create_block($info, $content, $block_id, $region, $show_title, $type) {

  $block_content = BlockContent::create(array(
    'type' => 'basic',
    'info' => $info,
    )
  );

  $block_content->body->value = $content;
  $block_content->body->format = 'full_html';
  $block_content->save();

  $block = Block::create(array(
    'id' => $block_id,
    'plugin' => 'block_content:' . $block_content->uuid(),
    'region' => $region,
    'provider' => 'block_content',
    // 'weight' => -100,
    'theme' => 'druppio_monopage',
    'visibility' => array(),
    'settings' => array(
      'label' => $info,
      'label_display' => $show_title,
      ),
    )
  );
  $block->save();

  drupal_flush_all_caches();

  drupal_set_message(t('Your @type block has been successfully created.', array('@type' => $type)));

}

/**
 * Get list of all active blocks.
 */
function druppio_monopage_get_list_of_active_blocks() {

  $ids = \Drupal::entityQuery('block')->execute();

  return $ids;

}
