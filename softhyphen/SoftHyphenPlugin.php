<?php

namespace Craft;

class SoftHyphenPlugin extends BasePlugin
{
  function getName()
  {
    return Craft::t('Soft Hyphen');
  }

  function getVersion()
  {
    return '1.0';
  }

  function getDeveloper()
  {
    return 'Kvitebjørn Designbyrå AS';
  }

  function getDeveloperUrl()
  {
    return 'https://kvitebjorn.com';
  }

  function modifyCpNav(&$nav) {
    $nav['softhyphen'] = array('label' => 'Soft hyphen', 'url' => '#softhyphen');
  }

  public function init()
  {
    parent::init();
    if (craft()->request->isCpRequest()) {
      craft()->templates->includeJsFile(UrlHelper::getResourceUrl('softhyphen/copy.js'));
    }
  }


}
