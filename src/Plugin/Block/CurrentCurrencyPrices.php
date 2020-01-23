<?php

namespace Drupal\embedded_apps\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'CurrentCurrencyPrices' block.
 *
 * @Block(
 *  id = "current_currency_prices",
 *  admin_label = @Translation("Current currency prices"),
 * )
 */
class CurrentCurrencyPrices extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['#theme'] = 'current_currency_prices';
     $build['current_currency_prices']['#markup'] = 'Implement CurrentCurrencyPrices.';

    return $build;
  }

}
