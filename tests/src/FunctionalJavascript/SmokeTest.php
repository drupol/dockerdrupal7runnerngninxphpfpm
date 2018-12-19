<?php

declare(strict_types = 1);

namespace Drupal\Tests\drupal_template\FunctionalJavascript;

use Drupal\FunctionalJavascriptTests\WebDriverTestBase;

/**
 * Base class functional JavaScript tests.
 */
class SmokeTest extends WebDriverTestBase {

  /**
   * Modules to enable.
   *
   * @var array
   */
  public static $modules = [
    'system',
    'node',
    'field_ui',
  ];

  /**
   * Tests the Drupal login.
   */
  public function testDrupalLogin(): void {
    $session = $this->getSession();
    $page = $session->getPage();
    $assert_session = $this->assertSession();

    // Log in as an administrator.
    $user = $this->drupalCreateUser([], NULL, TRUE);
    $this->drupalLogin($user);
  }

}
