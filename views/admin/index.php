<?php

/**
 * @var \humhub\modules\ui\view\components\View $this
 */

use fhnw\modules\games\snake\assets\SnakeAssets;
use fhnw\modules\games\snake\SnakeModule;

SnakeAssets::register($this);

$module = SnakeModule::getInstance();
$game = $module->getGame();

$this->registerCss('snake');

$this->registerJsConfig('snake', []);
?>

<div class="container">
  <!-- -->
</div>
