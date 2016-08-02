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
 * @method static string getViewPath() Defaults to '
 * @method static string render(string $view, array $params = [], string|boolean $layout = false) Renders the specified view with optional parameters and layout.
 * @method static boolean send(\yii\mail\MessageInterface $message) Sends the given email message.
 * @method static integer sendMultiple(array $messages) Sends multiple messages at once.
 * @method static setTransport($transport)
 * @method static setView(array|\yii\web\View $view) render message bodies.
 * @method static setViewPath(string $path) This can be specified as an absolute path or a path alias.
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
