<?php

/**
 * @package Snake
 */
namespace fhnw\modules\games\snake;

use Yii;
use yii\base\Event;
use yii\helpers\Url;

class Events
{
  /**
  * Defines what to do if admin menu is initialized.
  *
  * @param Event $event
  *
  * @return void
  */
  public static function onAdminMenuInit(Event $event): void
  {
    $config = [
      'label'     => 'Snake',
      'url'       => Url::to(['/snake/admin']),
      'group'     => 'manage',
      'icon'      => '<i class="fa fa-gamepad"></i>',
      'sortOrder' => 99999,
      'isActive'  => (Yii::$app->controller->module &&
                      Yii::$app->controller->module->id === 'snake' &&
                      Yii::$app->controller->id === 'admin')
    ];
    $event->sender->addItem($config);
  }
}
