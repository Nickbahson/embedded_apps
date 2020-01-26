<?php

namespace Drupal\embedded_apps\Tests;

use Drupal\simpletest\WebTestBase;

/**
 * Provides automated tests for the embedded_apps module.
 */
class CurrencyApiControllerTest extends WebTestBase {


  /**
   * {@inheritdoc}
   */
  public static function getInfo() {
    return [
      'name' => "embedded_apps CurrencyApiController's controller functionality",
      'description' => 'Test Unit for module embedded_apps and controller CurrencyApiController.',
      'group' => 'Other',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function setUp() {
    parent::setUp();
  }

  /**
   * Tests embedded_apps functionality.
   */
  public function testCurrencyApiController() {
    // Check that the basic functions of module embedded_apps.
    $this->assertEquals(TRUE, TRUE, 'Test Unit Generated via Drupal Console.');
  }

}
