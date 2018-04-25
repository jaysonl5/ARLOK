<?php

namespace Drupal\arl_custom\Routing;

use Drupal\Core\Routing\RouteSubscriberBase;
use Drupal\file\Entity\File;
use Drupal\node\Entity\Node;
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

class ArlCustomRoutes extends RouteSubscriberBase {

  /**
   * {@inheritdoc}
   */
  protected function alterRoutes(RouteCollection $collection) {
    // Deny access to '/user/register'.
    if ($route = $collection->get('user.register')) {
      $route->setRequirement('_access', 'FALSE');
    }
    // Deny access to '/user/password'.
    if ($route = $collection->get('user.pass')) {
      $route->setRequirement('_access', 'FALSE');
    }

    foreach ($collection->all() as $route) {
      if (strpos($route->getPath(), '/manage') === 0 && !$route->hasOption('_admin_route')) {
        $route->setOption('_admin_route', TRUE);
      }
    }
  }

  /**
   * {@inheritdoc}
   */
  public function routes() {
    $routes = array();

    $config = \Drupal::config('arl_custom.settings');
    $nodeId = $config->get('arl_cust_files_nid');

    if (!isset($nodeId)) return $routes;

    /* @var Node $node */
    $node = Node::load($nodeId);

    /* @var \Drupal\file\Plugin\Field\FieldType\FileFieldItemList $files */
    $files = $node->get('field_files')->getValue();

    foreach ($files as $file) {
      /* @var File $fileObject */
      $fileObject = File::load($file['target_id']);
      $name = $fileObject->getFilename();

      $routes['arl_custom.file.' . $file['target_id']] = new Route(
      // Path to attach this route to:
        '/' . $name,
        // Route defaults:
        array(
          '_controller' => '\Drupal\arl_custom\Controller\MainController::files',
          '_title' => 'Hello'
        ),
        // Route requirements:
        array(
          '_permission'  => 'access content',
        )
      );
    }

    return $routes;
  }
}
