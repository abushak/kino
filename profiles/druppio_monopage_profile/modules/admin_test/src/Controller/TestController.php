<?php

namespace Drupal\admin_test\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\node\Entity\Node;
use Drupal\block\Entity\Block;
use Drupal\block_content\Entity\BlockContent;

/**
 * An example controller.
 */
class TestController extends ControllerBase {

  public function adminTest() {

    // $druppio_path = drupal_get_path('profile', 'druppio');
    // $data = file_get_contents($druppio_path . '/images/photo-01.jpg');
    // var_dump($druppio_path . '/images/photo-01.jpg');
    // $file = file_save_data($data, "public://photo-01.jpg", FILE_EXISTS_REPLACE);
    // $node = Node::create(array(
    //   'type' => 'article',
    //   'title' => microtime(true),
    //   'uid' => '1',
    //   'status' => 1,
    //   'field_image' => [
    //     'target_id' => $file->id(),
    //     'alt' => 'Druppio themes',
    //     'title' => 'Druppio themes'
    //   ],
    // ));
    // $node->body->value = '<p>Curabitur aliquet quam id dui posuere blandit. Cras ultricies ligula sed magna dictum porta. Sed porttitor lectus nibh. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.</p><p>Curabitur aliquet quam id dui posuere blandit. Cras ultricies ligula sed magna dictum porta. Sed porttitor lectus nibh. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur aliquet quam id dui posuere blandit. Cras ultricies ligula sed magna dictum porta. Sed porttitor lectus nibh. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur aliquet quam id dui posuere blandit. Cras ultricies ligula sed magna dictum porta. Sed porttitor lectus nibh. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur aliquet quam id dui posuere blandit. Cras ultricies ligula sed magna dictum porta. Sed porttitor lectus nibh. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.</p><p>Curabitur aliquet quam id dui posuere blandit. Cras ultricies ligula sed magna dictum porta. Sed porttitor lectus nibh. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.</p>';
    // $node->body->format = 'full_html';
    // $node->save();

    // $block_content = BlockContent::create(array(
    //   'type' => 'basic',
    //   'info' => 'Get in touch contact details',
    //   )
    // );
    //
    // $block_content->body->value = '<div><i class="fa fa-home" aria-hidden="true"></i>Studio Present inc.</div>
    // <div><i class="fa fa-flag" aria-hidden="true"></i>Trg Slobode 2, Subotica, Serbia</div>
    // <div><i class="fa fa-phone" aria-hidden="true"></i>+381/24-552-105</div>
    // <div><i class="fa fa-envelope-o" aria-hidden="true"></i>info@druppio.com</div>';
    // $block_content->body->format = 'full_html';
    // $block_content->save();
    //
    // $block = Block::create(array(
    //   'id' => 'getintouchcontactdetails',
    //   'plugin' => 'block_content:' . $block_content->uuid(),
    //   'region' => 'footer',
    //   'provider' => 'block_content',
    //   // 'weight' => -100,
    //   'theme' => 'druppio_monopage',
    //   'visibility' => array(),
    //   'settings' => array(
    //     'label' => 'Get in touch contact details',
    //     'label_display' => TRUE,
    //     ),
    //   )
    // );
    // $block->save();

    $node = Node::create(array(
      'type' => 'article',
      'title' => 'Share your experience',
      'uid' => '1',
      'status' => 1,
      'promoted' => 1,
      // 'path' => '/blog/share-your-experience',
    ));
    $body = '<p>Nulla porttitor accumsan tincidunt. Nulla quis lorem ut libero malesuada feugiat. Nulla quis lorem ut libero malesuada feugiat. Nulla porttitor accumsan tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.</p><p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Donec rutrum congue leo eget malesuada. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Vivamus suscipit tortor eget felis porttitor volutpat. Curabitur aliquet quam id dui posuere blandit. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Pellentesque in ipsum id orci porta dapibus. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Quisque velit nisi, pretium ut lacinia in, elementum id enim.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Nulla porttitor accumsan tincidunt. Donec sollicitudin molestie malesuada. Curabitur aliquet quam id dui posuere blandit.</p><p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Proin eget tortor risus. Sed porttitor lectus nibh. Curabitur aliquet quam id dui posuere blandit. Donec sollicitudin molestie malesuada. Curabitur aliquet quam id dui posuere blandit. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Pellentesque in ipsum id orci porta dapibus.</p>';
    $summary = 'Nulla porttitor accumsan tincidunt. Nulla quis lorem ut libero malesuada feugiat. Nulla quis lorem ut libero malesuada feugiat. Nulla porttitor accumsan tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;';
    $node->body->format = 'full_html';

    $node->body->setValue([
      'value' => $body,
      'summary' => $summary,
      'format' => 'full_html',
    ]);
    $node->save();

    return array(
      '#markup' => t('Node created.'),
    );

  }

}
