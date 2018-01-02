<?php

namespace Drupal\d_p_subscribe_file\Forms;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Session\AccountProxy;
use Drupal\Core\Url;
use Drupal\d_p_subscribe_file\Entity\SubscribeFileEntity;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Class SubscribeFileForm
 * @package Drupal\d_p_subscribe_file\Forms
 */
class SubscribeFileForm extends FormBase {

  /**
   * @var \Drupal\Core\Session\AccountInterface|\Drupal\Core\Session\AnonymousUserSession
   */
  protected $accountProxy;

  public function __construct(AccountProxy $accountProxy) {
    $this->accountProxy = $accountProxy->getAccount();
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('current_user')
    );
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'd_p_subscribe_file_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state, $paragraph = NULL) {
    $form['name'] = [
      '#type' => 'textfield',
      '#title_display' => 'invisible',
      '#title' => $this->t('Name'),
      '#required' => TRUE,
      '#attributes' => ['placeholder' => t('Enter your name')],
    ];

    $form['mail'] = [
      '#type' => 'email',
      '#title_display' => 'invisible',
      '#title' => $this->t('E-mail'),
      '#required' => TRUE,
      '#attributes' => ['placeholder' => t('Enter you email to get download link')],
    ];

    $form['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Get Download link'),
    ];
    $file_id = $paragraph->get('field_file_download');
    $aa = $file_id->getValue();
    $form_state->setTemporaryValue('file_id', $aa[0]['target_id']);
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {

    // Save entity
    $file_id = $form_state->getTemporary('file_id');
    $link_hash = md5(rand() . time());
    $file_hash = md5(rand() . time());
    $contact = SubscribeFileEntity::create([
      'name' => $form_state->getValue('name'),
      'mail' => $form_state->getValue('mail'),
      'link_hash' => $link_hash,
      'file_hash' => $file_hash,
      'fid' => $file_id['file_id'],
    ]);
    $contact->save();


    // Send mail with link
    $url = Url::fromRoute('d_p_subscribe_file.downloadfile.checkLink', ['link_hash' => $link_hash]);
    if ($this->accountProxy->hasPermission('Administer site configuration')) {
      drupal_set_message($url->setAbsolute(TRUE)->toString());
    }

    $mailManager = \Drupal::service('plugin.manager.mail');
    $module = 'd_p_subscribe_file';
    $key = 'subscribe_form';
    $to = $form_state->getValue('mail');
    $params['link'] = t('<a href=":prv-file">Get Droopler now!</a>', [
      ':prv-file' => $url->setAbsolute(TRUE)
        ->toString()
    ]);
    $params['name'] = $form_state->getValue('name');
    $params['mail'] = $form_state->getValue('mail');
    $params['body'] = [
      '#theme' => 'subscribe_file_mail',
      '#values' => $params,
    ];

    $langcode = \Drupal::currentUser()->getPreferredLangcode();
    $result = $mailManager->mail($module, $key, $to, $langcode, $params, NULL, TRUE);
    if ($result) {
      drupal_set_message($this->t('We send download link, check Your mail'));
    }

  }
}
