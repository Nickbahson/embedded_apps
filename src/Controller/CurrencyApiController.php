<?php

namespace Drupal\embedded_apps\Controller;

use Drupal\Component\Serialization\Json;
use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\JsonResponse;
use AlphaVantage;

/**
 * Class CurrencyApiController.
 */
class CurrencyApiController extends ControllerBase {

  /**
   * Getvalues.
   *
   * @return string
   *   Return Hello string.
   */
  public function getValues() {

    $data = [];


    $options = new AlphaVantage\Options();
    //$options->setApiKey($this->appConfigsDb->alphaVantageKey());
    $options->setApiKey('tdcdgfdgdxgdhghg');// TODO Get a real key
    $client = new AlphaVantage\Client($options);
    //var_dump($client->foreignExchange()->currencyExchangeRate('BTC', 'CNY'));

    $data = [
      'BTC-USD' => $client->foreignExchange()->currencyExchangeRate('BTC', 'USD'),
      'GBP-USD' => $client->foreignExchange()->currencyExchangeRate('GBP', 'USD'),
      'USD-JPY' => $client->foreignExchange()->currencyExchangeRate('USD', 'JPY'),
      //'EUR-USD' => $client->foreignExchange()->currencyExchangeRate('EUR', 'USD'),
      //'USD-CHF' => $client->foreignExchange()->currencyExchangeRate('USD', 'CHF'),
      'AUD-USD' => $client->foreignExchange()->currencyExchangeRate('AUD', 'USD'),
      //'EUR-GBP' => $client->foreignExchange()->currencyExchangeRate('EUR', 'GBP'),
      'EUR-JPY' => $client->foreignExchange()->currencyExchangeRate('EUR', 'JPY'),
    ];

    dump($data);

    $data = Json::encode($data);

    return new JsonResponse($data);
  }

}
