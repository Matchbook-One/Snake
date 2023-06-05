<?php
namespace fhnw\modules\games\snake\assets;
use fhnw\modules\gamecenter\assets\GameCenterAssets;
use yii\web\View;

/**
* The class SnakeAssets
*/
class SnakeAssets  extends \fhnw\modules\gamecenter\components\GameAssets{

  /** @var array $css */
  public $css = [
    'css/snake.css'
  ];

  /** @var array $depends */
  public $depends = [
    GameCenterAssets::class
    // any additional dependencies
  ];

  /** @var array $js */
  public $js = [
    'js/snake.js'
  ];

  /** @var array $publishOptions */
  public $publishOptions = [
    'forceCopy' => true // TODO: remove for production
  ];

  /** @var string $sourcePath */
  public $sourcePath = '@snake/resources';
}
