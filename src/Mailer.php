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
 * Yii::$app->get('mailer') facade.
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
 * @method static \yii\mail\MessageInterface compose(string|array|null $view = null, array $params = []) Creates a new message instance and optionally composes its body content via view rendering.
 * @see \yii\mail\BaseMailer::compose
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
 * @method static string generateMessageFileName()
 * @see \yii\mail\BaseMailer::generateMessageFileName
 *
 * @method static null|\yii\base\Behavior getBehavior(string $name) Returns the named behavior object.
 * @see \yii\base\Component::getBehavior
 *
 * @method static \yii\base\Behavior[] getBehaviors() Returns all behaviors attached to this component.
 * @see \yii\base\Component::getBehaviors
 *
 * @method static array|\Swift_Mailer getSwiftMailer()
 * @see \yii\swiftmailer\Mailer::getSwiftMailer
 *
 * @method static array|\Swift_Transport getTransport()
 * @see \yii\swiftmailer\Mailer::getTransport
 *
 * @method static \yii\web\View getView()
 * @see \yii\mail\BaseMailer::getView
 *
 * @method static string getViewPath()
 * @see \yii\mail\BaseMailer::getViewPath
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
 * @method static string render(string $view, array $params = [], string|bool $layout = false) Renders the specified view with optional parameters and layout.
 * @see \yii\mail\BaseMailer::render
 *
 * @method static bool send(\yii\mail\MessageInterface $message) Sends the given email message.
 * @see \yii\mail\BaseMailer::send
 *
 * @method static int sendMultiple(array $messages) Sends multiple messages at once.
 * @see \yii\mail\BaseMailer::sendMultiple
 *
 * @method static void setTransport(array|\Swift_Transport $transport)
 * @see \yii\swiftmailer\Mailer::setTransport
 *
 * @method static void setView(array|\yii\web\View $view)
 * @see \yii\mail\BaseMailer::setView
 *
 * @method static void setViewPath(string $path)
 * @see \yii\mail\BaseMailer::setViewPath
 *
 * @method static void trigger(string $name, \yii\base\Event $event = null) Triggers an event.
 * @see \yii\base\Component::trigger
 *
 * Property accessors
 *
 * @method static bool getEnableSwiftMailerLogging() Returns whether to enable writing of the SwiftMailer internal logs using Yii log mechanism.
 * @see \yii\swiftmailer\Mailer::enableSwiftMailerLogging
 *
 * @method static callable getFileTransportCallback() Returns a PHP callback that will be called by [[send()]] when [[useFileTransport]] is true.
 * @see \yii\mail\BaseMailer::fileTransportCallback
 *
 * @method static string getFileTransportPath() Returns the directory where the email messages are saved when [[useFileTransport]] is true.
 * @see \yii\mail\BaseMailer::fileTransportPath
 *
 * @method static string|bool getHtmlLayout() Returns HTML layout view name.
 * @see \yii\mail\BaseMailer::htmlLayout
 *
 * @method static string getMessageClass() Returns message default class name.
 * @see \yii\swiftmailer\Mailer::messageClass
 *
 * @method static array getMessageConfig() Returns the configuration that should be applied to any newly created email message instance by [[createMessage()]] or [[compose()]].
 * @see \yii\mail\BaseMailer::messageConfig
 *
 * @method static string|bool getTextLayout() Returns text layout view name.
 * @see \yii\mail\BaseMailer::textLayout
 *
 * @method static bool getUseFileTransport() Returns whether to save email messages as files under [[fileTransportPath]] instead of sending them to the actual recipients.
 * @see \yii\mail\BaseMailer::useFileTransport
 *
 * @method static void setEnableSwiftMailerLogging(bool $value) Sets whether to enable writing of the SwiftMailer internal logs using Yii log mechanism.
 * @see \yii\swiftmailer\Mailer::enableSwiftMailerLogging
 *
 * @method static void setFileTransportCallback(callable $value) Sets a PHP callback that will be called by [[send()]] when [[useFileTransport]] is true.
 * @see \yii\mail\BaseMailer::fileTransportCallback
 *
 * @method static void setFileTransportPath(string $value) Sets the directory where the email messages are saved when [[useFileTransport]] is true.
 * @see \yii\mail\BaseMailer::fileTransportPath
 *
 * @method static void setHtmlLayout(string|bool $value) Sets HTML layout view name.
 * @see \yii\mail\BaseMailer::htmlLayout
 *
 * @method static void setMessageClass(string $value) Sets message default class name.
 * @see \yii\swiftmailer\Mailer::messageClass
 *
 * @method static void setMessageConfig(array $value) Sets the configuration that should be applied to any newly created email message instance by [[createMessage()]] or [[compose()]].
 * @see \yii\mail\BaseMailer::messageConfig
 *
 * @method static void setTextLayout(string|bool $value) Sets text layout view name.
 * @see \yii\mail\BaseMailer::textLayout
 *
 * @method static void setUseFileTransport(bool $value) Sets whether to save email messages as files under [[fileTransportPath]] instead of sending them to the actual recipients.
 * @see \yii\mail\BaseMailer::useFileTransport
 */
class Mailer extends Facade
{
    /**
     * @inheritDoc
     */
    public static function getFacadeComponentId()
    {
        return 'mailer';
    }
}
