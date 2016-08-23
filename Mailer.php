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
 * Mailer facade.
 *
 * Facades Yii::$app->get('mailer') component.
 *
 * @see \yii\swiftmailer\Mailer
 * @method static \yii\base\Behavior attachBehavior(string $name, string|array|\yii\base\Behavior $behavior) Attaches a behavior to this component.
 * @method static attachBehaviors(array $behaviors) Attaches a list of behaviors to the component.
 * @method static array behaviors() Returns a list of behaviors that this component should behave as.
 * @method static \yii\mail\MessageInterface compose(string|array|null $view = null, array $params = []) Creates a new message instance and optionally composes its body content via view rendering.
 * @method static null|\yii\base\Behavior detachBehavior(string $name) Detaches a behavior from the component.
 * @method static detachBehaviors() Detaches all behaviors from the component.
 * @method static ensureBehaviors() Makes sure that the behaviors declared in [[behaviors()]] are attached to this component.
 * @method static string generateMessageFileName()
 * @method static null|\yii\base\Behavior getBehavior(string $name) Returns the named behavior object.
 * @method static \yii\base\Behavior[] getBehaviors() Returns all behaviors attached to this component.
 * @method static bool getEnableSwiftMailerLogging() Returns whether to enable writing of the SwiftMailer internal logs using Yii log mechanism.
 * @method static callable getFileTransportCallback() Returns a PHP callback that will be called by [[send()]] when [[useFileTransport]] is true.
 * @method static string getFileTransportPath() Returns the directory where the email messages are saved when [[useFileTransport]] is true.
 * @method static string|bool getHtmlLayout() Returns HTML layout view name.
 * @method static string getMessageClass() Returns message default class name.
 * @method static array getMessageConfig() Returns the configuration that should be applied to any newly created email message instance by [[createMessage()]] or [[compose()]].
 * @method static array|\Swift_Mailer getSwiftMailer()
 * @method static string|bool getTextLayout() Returns text layout view name.
 * @method static array|\Swift_Transport getTransport()
 * @method static bool getUseFileTransport() Returns whether to save email messages as files under [[fileTransportPath]] instead of sending them to the actual recipients.
 * @method static \yii\web\View getView()
 * @method static string getViewPath()
 * @method static bool hasEventHandlers(string $name) Returns a value indicating whether there is any handler attached to the named event.
 * @method static bool off(string $name, callable $handler = null) Detaches an existing event handler from this component.
 * @method static on(string $name, callable $handler, mixed $data = null, bool $append = true) Attaches an event handler to an event.
 * @method static string render(string $view, array $params = [], string|bool $layout = false) Renders the specified view with optional parameters and layout.
 * @method static bool send(\yii\mail\MessageInterface $message) Sends the given email message.
 * @method static int sendMultiple(array $messages) Sends multiple messages at once.
 * @method static setEnableSwiftMailerLogging(bool $value) Sets whether to enable writing of the SwiftMailer internal logs using Yii log mechanism.
 * @method static setFileTransportCallback(callable $value) Sets a PHP callback that will be called by [[send()]] when [[useFileTransport]] is true.
 * @method static setFileTransportPath(string $value) Sets the directory where the email messages are saved when [[useFileTransport]] is true.
 * @method static setHtmlLayout(string|bool $value) Sets HTML layout view name.
 * @method static setMessageClass(string $value) Sets message default class name.
 * @method static setMessageConfig(array $value) Sets the configuration that should be applied to any newly created email message instance by [[createMessage()]] or [[compose()]].
 * @method static setTextLayout(string|bool $value) Sets text layout view name.
 * @method static setTransport(array|\Swift_Transport $transport)
 * @method static setUseFileTransport(bool $value) Sets whether to save email messages as files under [[fileTransportPath]] instead of sending them to the actual recipients.
 * @method static setView(array|\yii\web\View $view)
 * @method static setViewPath(string $path)
 * @method static trigger(string $name, \yii\base\Event $event = null) Triggers an event.
 */
class Mailer extends Facade
{
    /**
     * @inheritdoc
     */
    public static function getFacadeComponentId()
    {
        return 'mailer';
    }
}
