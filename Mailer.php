<?php

namespace sergeymakinen\facades;

/** @noinspection PhpUnnecessaryFullyQualifiedNameInspection */
/**
 * Mailer facade.
 *
 * @method static afterSend($message, $isSuccessful) This method is invoked right after mail was send.
 * @method static boolean beforeSend($message) This method is invoked right before mail send.
 * @method static \yii\mail\MessageInterface compose(string|array|null $view = null, array $params = []) Creates a new message instance and optionally composes its body content via view rendering.
 * @method static string generateMessageFileName()
 * @method static array|\Swift_Mailer getSwiftMailer()
 * @method static array|\Swift_Transport getTransport()
 * @method static \yii\web\View getView()
 * @method static string getViewPath() Defaults to '.
 * @method static boolean getEnableSwiftMailerLogging() Returns $enableSwiftMailerLogging - whether to enable writing of the SwiftMailer internal logs using Yii log mechanism.
 * @method static callable getFileTransportCallback() Returns $fileTransportCallback - a PHP callback that will be called by [[send()]] when [[useFileTransport]] is true.
 * @method static string getFileTransportPath() Returns $fileTransportPath - the directory where the email messages are saved when [[useFileTransport]] is true.
 * @method static string|boolean getHtmlLayout() Returns $htmlLayout - HTML layout view name.
 * @method static string getMessageClass() Returns $messageClass - message default class name.
 * @method static array getMessageConfig() Returns $messageConfig - the configuration that should be applied to any newly created email message instance by [[createMessage()]] or [[compose()]].
 * @method static string|boolean getTextLayout() Returns $textLayout - text layout view name.
 * @method static boolean getUseFileTransport() Returns $useFileTransport - whether to save email messages as files under [[fileTransportPath]] instead of sending them to the actual recipients.
 * @method static string render(string $view, array $params = [], string|boolean $layout = false) Renders the specified view with optional parameters and layout.
 * @method static boolean send(\yii\mail\MessageInterface $message) Sends the given email message.
 * @method static integer sendMultiple(array $messages) Sends multiple messages at once.
 * @method static setTransport($transport)
 * @method static setView(array|\yii\web\View $view) render message bodies.
 * @method static setViewPath(string $path) This can be specified as an absolute path or a path alias.
 * @method static setEnableSwiftMailerLogging(boolean $value) Sets $enableSwiftMailerLogging - whether to enable writing of the SwiftMailer internal logs using Yii log mechanism.
 * @method static setFileTransportCallback(callable $value) Sets $fileTransportCallback - a PHP callback that will be called by [[send()]] when [[useFileTransport]] is true.
 * @method static setFileTransportPath(string $value) Sets $fileTransportPath - the directory where the email messages are saved when [[useFileTransport]] is true.
 * @method static setHtmlLayout(string|boolean $value) Sets $htmlLayout - HTML layout view name.
 * @method static setMessageClass(string $value) Sets $messageClass - message default class name.
 * @method static setMessageConfig(array $value) Sets $messageConfig - the configuration that should be applied to any newly created email message instance by [[createMessage()]] or [[compose()]].
 * @method static setTextLayout(string|boolean $value) Sets $textLayout - text layout view name.
 * @method static setUseFileTransport(boolean $value) Sets $useFileTransport - whether to save email messages as files under [[fileTransportPath]] instead of sending them to the actual recipients.
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
