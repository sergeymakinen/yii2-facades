<?php

namespace sergeymakinen\facades;

/** @noinspection PhpUnnecessaryFullyQualifiedNameInspection */
/**
 * I18n facade.
 *
 * Facades Yii::$app->get('i18n') component.
 *
 * @method static \yii\base\Behavior attachBehavior(string $name, string|array|\yii\base\Behavior $behavior) Attaches a behavior to this component.
 * @method static attachBehaviors(array $behaviors) Attaches a list of behaviors to the component.
 * @method static array behaviors() Returns a list of behaviors that this component should behave as.
 * @method static null|\yii\base\Behavior detachBehavior(string $name) Detaches a behavior from the component.
 * @method static detachBehaviors() Detaches all behaviors from the component.
 * @method static ensureBehaviors() Makes sure that the behaviors declared in [[behaviors()]] are attached to this component.
 * @method static string format(string $message, array $params, string $language) Formats a message using [[MessageFormatter]].
 * @method static null|\yii\base\Behavior getBehavior(string $name) Returns the named behavior object.
 * @method static \yii\base\Behavior[] getBehaviors() Returns all behaviors attached to this component.
 * @method static \yii\i18n\MessageFormatter getMessageFormatter() Returns the message formatter instance.
 * @method static \yii\i18n\MessageSource getMessageSource(string $category) Returns the message source for the given category.
 * @method static array getTranslations() Returns $translations - list of [[MessageSource]] configurations or objects.
 * @method static bool hasEventHandlers(string $name) Returns a value indicating whether there is any handler attached to the named event.
 * @method static bool off(string $name, callable $handler = null) Detaches an existing event handler from this component.
 * @method static on(string $name, callable $handler, mixed $data = null, bool $append = true) Attaches an event handler to an event.
 * @method static setMessageFormatter(string|array|\yii\i18n\MessageFormatter $value)
 * @method static setTranslations(array $value) Sets $translations - list of [[MessageSource]] configurations or objects.
 * @method static string translate(string $category, string $message, array $params, string $language) Translates a message to the specified language.
 * @method static trigger(string $name, \yii\base\Event $event = null) Triggers an event.
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
