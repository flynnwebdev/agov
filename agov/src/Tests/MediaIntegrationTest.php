<?php

namespace Drupal\agov\Tests;

/**
 * Test the media configuration is working correctly.
 *
 * @group agov
 */
class MediaIntegrationTest extends AgovTestBase {

  /**
   * Test the media integration is working.
   */
  public function testMediaIntegration() {
    $this->drupalGet('entity-embed/dialog/text_and_media/embed');
  }

}
