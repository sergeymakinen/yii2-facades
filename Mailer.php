<?php

namespace sergeymakinen\facades;

/** @noinspection PhpUnnecessaryFullyQualifiedNameInspection */
/**
 * Mailer facade.
 *
 * Facades Yii::$app->get('mailer') component.
 *
 * @method static afterSend(\yii\mail\MessageInterface $message, bool $isSuccessful) This method is invoked right after mail was send.
 * @method static \yii\base\Behavior attachBehavior(string $name, string|array|\yii\base\Behavior $behavior) Attaches a behavior to this component.
 * @method static attachBehaviors(array $behaviors) Attaches a list of behaviors to the component.
 * @method static bool beforeSend(\yii\mail\MessageInterface $message) This method is invoked right before mail send.
 * @method static array behaviors() Returns a list of behaviors that this component should behave as.
 * @method static \yii\mail\MessageInterface compose(string|array|null $view = null, array $params = []) Creates a new message instance and optionally composes its body content via view rendering.
 * @method static null|\yii\base\Behavior detachBehavior(string $name) Detaches a behavior from the component.
 * @method static detachBehaviors() Detaches all behaviors from the component.
 * @method static ensureBehaviors() Makes sure that the behaviors declared in [[behaviors()]] are attached to this component.
 * @method static string generateMessageFileName()
 * @method static null|\yii\base\Behavior getBehavior(string $name) Returns the named behavior object.
 * @method static \yii\base\Behavior[] getBehaviors() Returns all behaviors attached to this component.
 * @method static array|\Swift_Mailer getSwiftMailer()
 * @method static array|\Swift_Transport getTransport()
 * @method static \yii\web\View getView()
 * @method static string getViewPath()
 * @method static bool getEnableSwiftMailerLogging() Returns $enableSwiftMailerLogging - whether to enable writing of the SwiftMailer internal logs using Yii log mechanism.
 * @method static callable getFileTransportCallback() Returns $fileTransportCallback - a PHP callback that will be called by [[send()]] when [[useFileTransport]] is true.
 * @method static string getFileTransportPath() Returns $fileTransportPath - the directory where the email messages are saved when [[useFileTransport]] is true.
 * @method static string|bool getHtmlLayout() Returns $htmlLayout - HTML layout view name.
 * @method static string getMessageClass() Returns $messageClass - message default class name.
 * @method static array getMessageConfig() Returns $messageConfig - the configuration that should be applied to any newly created email message instance by [[createMessage()]] or [[compose()]].
 * @method static string|bool getTextLayout() Returns $textLayout - text layout view name.
 * @method static bool getUseFileTransport() Returns $useFileTransport - whether to save email messages as files under [[fileTransportPath]] instead of sending them to the actual recipients.
 * @method static bool hasEventHandlers(string $name) Returns a value indicating whether there is any handler attached to the named event.
 * @method static bool off(string $name, callable $handler = null) Detaches an existing event handler from this component.
 * @method static on(string $name, callable $handler, mixed $data = null, bool $append = true) Attaches an event handler to an event.
 * @method static string render(string $view, array $params = [], string|bool $layout = false) Renders the specified view with optional parameters and layout.
 * @method static bool send(\yii\mail\MessageInterface $message) Sends the given email message.
 * @method static int sendMultiple(array $messages) Sends multiple messages at once.
 * @method static setTransport(array|\Swift_Transport $transport)
 * @method static setView(array|\yii\web\View $view)
 * @method static setViewPath(string $path)
 * @method static setEnableSwiftMailerLogging(bool $value) Sets $enableSwiftMailerLogging - whether to enable writing of the SwiftMailer internal logs using Yii log mechanism.
 * @method static setFileTransportCallback(callable $value) Sets $fileTransportCallback - a PHP callback that will be called by [[send()]] when [[useFileTransport]] is true.
 * @method static setFileTransportPath(string $value) Sets $fileTransportPath - the directory where the email messages are saved when [[useFileTransport]] is true.
 * @method static setHtmlLayout(string|bool $value) Sets $htmlLayout - HTML layout view name.
 * @method static setMessageClass(string $value) Sets $messageClass - message default class name.
 * @method static setMessageConfig(array $value) Sets $messageConfig - the configuration that should be applied to any newly created email message instance by [[createMessage()]] or [[compose()]].
 * @method static setTextLayout(string|bool $value) Sets $textLayout - text layout view name.
 * @method static setUseFileTransport(bool $value) Sets $useFileTransport - whether to save email messages as files under [[fileTransportPath]] instead of sending them to the actual recipients.
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
