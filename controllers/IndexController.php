<?php
namespace fhnw\modules\games\snake\controllers;

class IndexController  extends \humhub\components\Controller{
  /** @return string */
  public function actionIndex(): string
  {
    return $this->render('index', []);
  }

}
