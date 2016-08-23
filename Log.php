<?php
/**
 * Facades for Yii 2
 *
 * @see       https://github.com/sergeymakinen/yii2-facades
 * @copyright Copyright (c) 2016 Sergey Makinen (https://makinen.ru)
 * @license   https://github.com/sergeymakinen/yii2-facades/blob/master/LICENSE The MIT License
 */

namespace sergeymakinen\facades;

/** @noinspection PhpUnnecessaryFullyQualifiedNameInspection */
/**
 * Log facade.
 *
 * Facades Yii::$app->get('log') component.
 *
 * @see \yii\log\Dispatcher
 * @method static \yii\base\Behavior attachBehavior(string $name, string|array|\yii\base\Behavior $behavior) Attaches a behavior to this component.
 * @method static attachBehaviors(array $behaviors) Attaches a list of behaviors to the component.
 * @method static array behaviors() Returns a list of behaviors that this component should behave as.
 * @method static null|\yii\base\Behavior detachBehavior(string $name) Detaches a behavior from the component.
 * @method static detachBehaviors() Detaches all behaviors from the component.
 * @method static dispatch(array $messages, bool $final) Dispatches the logged messages to [[targets]].
 * @method static ensureBehaviors() Makes sure that the behaviors declared in [[behaviors()]] are attached to this component.
 * @method static null|\yii\base\Behavior getBehavior(string $name) Returns the named behavior object.
 * @method static \yii\base\Behavior[] getBehaviors() Returns all behaviors attached to this component.
 * @method static int getFlushInterval()
 * @method static \yii\log\Logger getLogger() Gets the connected logger.
 * @method static array|\yii\log\Target[] getTargets() Returns the log targets.
 * @method static int getTraceLevel()
 * @method static bool hasEventHandlers(string $name) Returns a value indicating whether there is any handler attached to the named event.
 * @method static bool off(string $name, callable $handler = null) Detaches an existing event handler from this component.
 * @method static on(string $name, callable $handler, mixed $data = null, bool $append = true) Attaches an event handler to an event.
 * @method static setFlushInterval(int $value)
 * @method static setLogger(\yii\log\Logger|string|array $value) Sets the connected logger.
 * @method static setTargets(array|\yii\log\Target[] $value) Sets the log targets.
 * @method static setTraceLevel(int $value)
 * @method static trigger(string $name, \yii\base\Event $event = null) Triggers an event.
 */
class Log extends Facade
{
    /**
     * @inheritdoc
     */
    public static function getFacadeComponentId()
    {
        return 'log';
    }
}
