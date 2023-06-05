<?php
use fhnw\modules\games\snake\SnakeModule;
use fhnw\modules\games\snake\Events;
use humhub\modules\admin\widgets\AdminMenu;

return [
	'id' => 'snake',
	'class' => SnakeModule::class,
	'namespace' => 'fhnw\modules\games\snake',
  'events'    => [
    [
      'class'    => AdminMenu::class,
      'event'    => AdminMenu::EVENT_INIT,
      'callback' => [Events::class, 'onAdminMenuInit']
    ]
  ]
];
