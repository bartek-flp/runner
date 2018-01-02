<?php

namespace Drupal\d_p_subscribe_file\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Link;
use Drupal\Core\Url;
use Drupal\file\Entity\File;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class DownloadFile extends ControllerBase {

  /**
   * Check link to download file.
   *
   * @param string $link_hash
   *   Link Hash.
   *
   * @return array
   *   Render download page.
   */
  public function checkLink($link_hash) {
    $entity = $this->getSubscribeFileEntity('link_hash', $link_hash );
    $this->checkLinkActive($entity);
    $file_hash = $entity->get('file_hash')->get(0)->getValue();
    $download_link = Link::createFromRoute($this->t('Get Droopler now!'), 'd_p_subscribe_file.downloadfile.getFile', ['file_hash' => $file_hash['value']]);
    return array(
      '#theme' => 'download_page',
      '#link' => $download_link,
      '#title' => t('Enjoy Droopler!'),
      '#body' => t('More info how use it on ... droopler.pl/doc ?!'),
      '#body' => t('More info how use it on <a href=":doc">https://droopler.pl/doc</a>.', [':doc' => 'https://droopler.pl/doc']),
    );
  }

  /**
   * Send file to browsers.
   *
   * @param $file_hash
   *   File link hash.
   *
   * @return \Symfony\Component\HttpFoundation\BinaryFileResponse
   *   Return file.
   */
  public function getFile($file_hash) {
    $entity = $this->getSubscribeFileEntity('file_hash', $file_hash );
    $this->checkLinkActive($entity);
    $file = File::load($entity->get('fid')->getValue()[0]['value']);
    $uri = $file->getFileUri();
    $response = new BinaryFileResponse($uri);
    $response->setContentDisposition(ResponseHeaderBag::DISPOSITION_ATTACHMENT);
    return $response;
  }

  /**
   * Checking link was created before 24h.
   * @param $entity
   */
  private function checkLinkActive($entity) {
    $created = $entity->get('created')->get(0)->getValue();
    if (time() > $created['value'] + 86400) {
      $this->goHomeWithMessage(t('Link is not active, please add your email again'));
    }
  }

  /**
   * Get SubscribeFileEntity
   * @param $field_name
   * @param $field_value
   * @return \Drupal\Core\Entity\EntityInterface|mixed
   */
  private function getSubscribeFileEntity($field_name, $field_value) {
    $subscribe_file_entity = \Drupal::entityTypeManager()
      ->getStorage('SubscribeFileEntity')
      ->loadByProperties([$field_name => $field_value]);
    if (empty($subscribe_file_entity)) {
      throw new NotFoundHttpException();
    }
    return reset($subscribe_file_entity);
  }

  /**
   * Redirect to home page and show drupal message
   * @param $message
   */
  private function goHomeWithMessage($message) {
    drupal_set_message($message);
    $url = Url::fromRoute('<front>');
    $response = new RedirectResponse($url->toString());
    $response->send();
  }

}
