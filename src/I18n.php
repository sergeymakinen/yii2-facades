<?php
/**
 * Facades for Yii 2
 *
 * Generated on Yii 2.0.12
 *
 * @see       https://github.com/sergeymakinen/yii2-facades
 * @copyright Copyright (c) 2016-2017 Sergey Makinen (https://makinen.ru)
 * @license   https://github.com/sergeymakinen/yii2-facades/blob/master/LICENSE The MIT License
 */

namespace sergeymakinen\facades;

/** @noinspection PhpUnnecessaryFullyQualifiedNameInspection */
/**
 * Yii::$app->get('i18n') facade.
 *
 * Methods
 *
 * @method static \yii\base\Behavior attachBehavior(string $name, string|array|\yii\base\Behavior $behavior) Attaches a behavior to this component.
 * @see \yii\base\Component::attachBehavior
 *
 * @method static void attachBehaviors(array $behaviors) Attaches a list of behaviors to the component.
 * @see \yii\base\Component::attachBehaviors
 *
 * @method static array behaviors() Returns a list of behaviors that this component should behave as.
 * @see \yii\base\Component::behaviors
 *
 * @method static null|\yii\base\Behavior detachBehavior(string $name) Detaches a behavior from the component.
 * @see \yii\base\Component::detachBehavior
 *
 * @method static void detachBehaviors() Detaches all behaviors from the component.
 * @see \yii\base\Component::detachBehaviors
 *
 * @method static void ensureBehaviors() Makes sure that the behaviors declared in [[behaviors()]] are attached to this component.
 * @see \yii\base\Component::ensureBehaviors
 *
 * @method static string format(string $message, array $params, string $language) Formats a message using [[MessageFormatter]].
 * @see \yii\i18n\I18N::format
 *
 * @method static null|\yii\base\Behavior getBehavior(string $name) Returns the named behavior object.
 * @see \yii\base\Component::getBehavior
 *
 * @method static \yii\base\Behavior[] getBehaviors() Returns all behaviors attached to this component.
 * @see \yii\base\Component::getBehaviors
 *
 * @method static \yii\i18n\MessageFormatter getMessageFormatter() Returns the message formatter instance.
 * @see \yii\i18n\I18N::getMessageFormatter
 *
 * @method static \yii\i18n\MessageSource getMessageSource(string $category) Returns the message source for the given category.
 * @see \yii\i18n\I18N::getMessageSource
 *
 * @method static bool hasEventHandlers(string $name) Returns a value indicating whether there is any handler attached to the named event.
 * @see \yii\base\Component::hasEventHandlers
 *
 * @method static bool off(string $name, callable $handler = null) Detaches an existing event handler from this component.
 * @see \yii\base\Component::off
 *
 * @method static void on(string $name, callable $handler, mixed $data = null, bool $append = true) Attaches an event handler to an event.
 * @see \yii\base\Component::on
 *
 * @method static void setMessageFormatter(string|array|\yii\i18n\MessageFormatter $value)
 * @see \yii\i18n\I18N::setMessageFormatter
 *
 * @method static string translate(string $category, string $message, array $params, string $language) Translates a message to the specified language.
 * @see \yii\i18n\I18N::translate
 *
 * @method static void trigger(string $name, \yii\base\Event $event = null) Triggers an event.
 * @see \yii\base\Component::trigger
 *
 * Property accessors
 *
 * @method static array getTranslations() Returns list of [[MessageSource]] configurations or objects.
 * @see \yii\i18n\I18N::translations
 *
 * @method static void setTranslations(array $value) Sets list of [[MessageSource]] configurations or objects.
 * @see \yii\i18n\I18N::translations
 */
class I18n extends Facade
{
    /**
     * @inheritDoc
     */
    public static function getFacadeComponentId()
    {
        return 'i18n';
    }
}
