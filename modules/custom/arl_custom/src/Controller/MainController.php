<?php
/**
* @file
* Contains \Drupal\arl_custom\Controller\MainController.
*/
namespace Drupal\arl_custom\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\File\FileSystem;
use Drupal\file\Entity\File;
use Drupal\node\Entity\Node;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class MainController extends ControllerBase
{
  public function mainPage()
  {
    return [
      '#markup' => $this->t('Something goes here!'),
    ];
  }

  public function files(Request $request)
  {
    $config = \Drupal::config('arl_custom.settings');
    $nodeId = $config->get('arl_cust_files_nid');

    if (!isset($nodeId)) return new RedirectResponse('/');

    $uri = urldecode(str_replace('/', '', $request->getRequestUri()));

    /* @var Node $node */
    $node = Node::load($nodeId);

    /* @var \Drupal\file\Plugin\Field\FieldType\FileFieldItemList $files */
    $files = $node->get('field_files')->getValue();

    foreach ($files as $file) {
      /* @var File $fileObject */
      $fileObject = File::load($file['target_id']);
      $name = $fileObject->getFilename();

      if ($name === $uri) {
        $fileRealPath = \Drupal::service('file_system')->realpath($fileObject->getFileUri());
        $response = new BinaryFileResponse($fileRealPath);
        return $response;
      }
    }

    return new RedirectResponse('/');
  }
}