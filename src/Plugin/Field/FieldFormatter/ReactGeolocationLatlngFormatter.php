<?php

namespace Drupal\reactgeofieldformat\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\FormatterBase;

/**
 * Plugin implementation of the 'geolocation_latlng' formatter.
 *
 * @FieldFormatter(
 *   id = "react_geolocation_latlng",
 *   module = "geolocation",
 *   label = @Translation("React Geolocation Lat/Lng"),
 *   field_types = {
 *     "geolocation"
 *   }
 * )
 */
class ReactGeolocationLatlngFormatter extends FormatterBase {

  /**
   * {@inheritdoc}
   */
  public function viewElements(FieldItemListInterface $items, $langcode) {
    $element = array();

    foreach ($items as $delta => $item) {
      $element[$delta] = array(
        '#theme' => 'react_geolocation_latlng_formatter',
        '#lat' => $item->lat,
        '#lng' => $item->lng,
      );
    }

    return $element;
  }

}
