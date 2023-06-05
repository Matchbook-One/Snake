<?php

namespace fhnw\modules\games\snake;

use fhnw\modules\gamecenter\components\GameModule;
use fhnw\modules\gamecenter\components\LeaderboardType;
use humhub\modules\content\components\ContentContainerActiveRecord;
use humhub\modules\user\models\User;
use Yii;
use yii\helpers\Url;
use yii\i18n\PhpMessageSource;

/**
 * @property-read string $configUrl
 */
class SnakeModule extends GameModule{

  /** @return void */
  public function init(): void
  {
    parent::init();
    $this->registerTranslations();
  }

  /**
   * Translates a message to the specified language.
   *
   * @param string   $category the message category.
   * @param string   $message the message to be translated.
   * @param string[] $params the parameters that will be used to replace the corresponding placeholders in the message.
   * @param ?string  $language the language code (e.g. `en-US`, `en`).
   *
   * @return string the translated message.
   */
  public static function t(string $category, string $message, array $params = [], string $language = null): string
  {
    return Yii::t("snake/$category", $message, $params, $language);
  }

  /**
   * @inheritdoc
   * @return array<{name: string, title: string, description: string, secret?: bool, show_progress?: bool}>
   */
  public function getAchievementConfig(): array
  {
    throw new \Exception('not implemented');
      /* return [[
        'name' => 'first-game',
        'title' => 'Win your first game',
        'description' => 'Win your first game'
      ]]*/
  }

  /**
   * @inheritdoc
   * @return string the url
   */
  public function getConfigUrl(): string
  {
    return Url::to(['/snake/admin']);
  }

  /**
   * @inheritdoc
   * @return string
   * @noinspection PhpMissingParentCallCommonInspection
   */
  public function getName(): string
  {
    return SnakeModule::t('base', 'name');
  }

  /**
   * @inheritdoc
   * @return array<{title: string, description: string, tags: string[]}>
   */
  #[ArrayShape(['title' => 'string', 'description' => 'string', 'tags' => 'string[]'])]
  public function getGameConfig()
  {
    return [
      'title'       => 'Snake',
      'description' => 'The Game Snake',
      'tags'        =>[]
    ];
  }

  /**
   * @return void
   */
  private function registerTranslations(): void
  {
    Yii::$app->i18n->translations['snake*'] = [
      'class'          => PhpMessageSource::class,
      'sourceLanguage' => 'en-US',
      'basePath'       => '@snake/messages'
    ];
  }

  /**
   * @return LeaderboardType[]
   */
  public function getGameUrl(): string
  {
    return Url::to(['/snake/index']);
  }

  /**
   * @return string
   */
  public function getLeaderboardConfig(): array
  {
    return [];
  }
}
