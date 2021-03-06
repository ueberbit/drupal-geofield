<?php

/**
 * @file
 * Contains \Drupal\geofield\Plugin\GeofieldBackendBase.
 */
namespace Drupal\geofield\Plugin;

use Drupal\Component\Plugin\PluginBase;

/**
 * Defines a base class from which other modules providing geofield backends
 * may extend.
 *
 * A complete sample plugin definition should be defined as in this example:
 *
 * @code
 * @GeofieldBackend(
 *   id = "geofield_backend_default",
 *   admin_label = @Translation("Default Backend")
 * )
 * @endcode
 *
 * @see \Drupal\geofield\Annotation\GeofieldBackend
 * @see \Drupal\geofield\Plugin\GeofieldBackendPluginInterface
 * @see \Drupal\geofield\Plugin\GeofieldBackendManager
 * @see plugin_api
 */
abstract class GeofieldBackendBase extends PluginBase implements GeofieldBackendPluginInterface {

}