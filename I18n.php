<?php

namespace sergeymakinen\facades;

/** @noinspection PhpUnnecessaryFullyQualifiedNameInspection */
/**
 * I18n facade.
 *
 * @method static string format(string $message, array $params, string $language) Formats a message using [[MessageFormatter]].
 * @method static \yii\i18n\MessageFormatter getMessageFormatter() Returns the message formatter instance.
 * @method static \yii\i18n\MessageSource getMessageSource(string $category) Returns the message source for the given category.
 * @method static array getTranslations() Returns $translations - list of [[MessageSource]] configurations or objects.
 * @method static setMessageFormatter(string|array|\yii\i18n\MessageFormatter $value) Can be given as array or string configuration that will be given to [[Yii::createObject]] to create an instance.
 * @method static setTranslations(array $value) Sets $translations - list of [[MessageSource]] configurations or objects.
 * @method static string translate(string $category, string $message, array $params, string $language) Translates a message to the specified language.
 */
class I18n extends Facade
{
    /**
     * @inheritdoc
     */
    public static function getFacadeComponentId()
    {
        return 'i18n';
    }
}
