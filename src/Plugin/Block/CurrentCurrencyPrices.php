<?php

namespace Drupal\embedded_apps\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use AlphaVantage;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\app_configs\Services\AppConfigsDb;

/**
 * Provides a 'CurrentCurrencyPrices' block.
 *
 * @Block(
 *  id = "current_currency_prices",
 *  admin_label = @Translation("Current currency prices"),
 * )
 */
class CurrentCurrencyPrices extends BlockBase implements ContainerFactoryPluginInterface {

  /**
   * @var AppConfigsDb
   */
  private $appConfigsDb;

  public function __construct(array $configuration, $plugin_id, $plugin_definition, AppConfigsDb $appConfigsDb)
  {
    parent::__construct($configuration, $plugin_id, $plugin_definition);
    $this->appConfigsDb = $appConfigsDb;
  }

  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition)
  {
    // TODO: Implement create() method.
    return new static(
      $configuration,
      $plugin_id,
      $plugin_definition,
      $container->get('app_configs.config_data')
    );
  }

  /**
   * {@inheritdoc}
   */
  public function build() {
    dump($this->appConfigsDb->getSlackWebUrl());
    $build = [];
    $build['#theme'] = 'current_currency_prices';
    $build['current_currency_prices']['#markup'] = 'Implement CurrentCurrencyPrices.';

    return $build;
  }

}
