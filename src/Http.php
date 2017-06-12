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
 * Yii::$app->get('httpClient') facade.
 *
 * Methods
 *
 * @method static \yii\base\Behavior attachBehavior(string $name, string|array|\yii\base\Behavior $behavior) Attaches a behavior to this component.
 * @see \yii\base\Component::attachBehavior
 *
 * @method static void attachBehaviors(array $behaviors) Attaches a list of behaviors to the component.
 * @see \yii\base\Component::attachBehaviors
 *
 * @method static \yii\httpclient\Response[] batchSend(\yii\httpclient\Request[] $requests) Performs multiple HTTP requests in parallel.
 * @see \yii\httpclient\Client::batchSend
 *
 * @method static array behaviors() Returns a list of behaviors that this component should behave as.
 * @see \yii\base\Component::behaviors
 *
 * @method static \yii\httpclient\Request createRequest()
 * @see \yii\httpclient\Client::createRequest
 *
 * @method static string createRequestLogToken(string $method, string $url, array $headers, string $content) Composes the log/profiling message token for the given HTTP request parameters.
 * @see \yii\httpclient\Client::createRequestLogToken
 *
 * @method static \yii\httpclient\Response createResponse(string $content = null, array $headers = []) Creates a response instance.
 * @see \yii\httpclient\Client::createResponse
 *
 * @method static \yii\httpclient\Request delete(string $url, array|string $data = null, array $headers = [], array $options = []) Creates 'DELETE' request.
 * @see \yii\httpclient\Client::delete
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
 * @method static \yii\httpclient\Request get(string $url, array|string $data = null, array $headers = [], array $options = []) Creates 'GET' request.
 * @see \yii\httpclient\Client::get
 *
 * @method static null|\yii\base\Behavior getBehavior(string $name) Returns the named behavior object.
 * @see \yii\base\Component::getBehavior
 *
 * @method static \yii\base\Behavior[] getBehaviors() Returns all behaviors attached to this component.
 * @see \yii\base\Component::getBehaviors
 *
 * @method static \yii\httpclient\FormatterInterface getFormatter(string $format) Returns HTTP message formatter instance for the specified format.
 * @see \yii\httpclient\Client::getFormatter
 *
 * @method static \yii\httpclient\ParserInterface getParser(string $format) Returns HTTP message parser instance for the specified format.
 * @see \yii\httpclient\Client::getParser
 *
 * @method static \yii\httpclient\Transport getTransport()
 * @see \yii\httpclient\Client::getTransport
 *
 * @method static bool hasEventHandlers(string $name) Returns a value indicating whether there is any handler attached to the named event.
 * @see \yii\base\Component::hasEventHandlers
 *
 * @method static \yii\httpclient\Request head(string $url, array $headers = [], array $options = []) Creates 'HEAD' request.
 * @see \yii\httpclient\Client::head
 *
 * @method static bool off(string $name, callable $handler = null) Detaches an existing event handler from this component.
 * @see \yii\base\Component::off
 *
 * @method static void on(string $name, callable $handler, mixed $data = null, bool $append = true) Attaches an event handler to an event.
 * @see \yii\base\Component::on
 *
 * @method static \yii\httpclient\Request options(string $url, array $options = []) Creates 'OPTIONS' request.
 * @see \yii\httpclient\Client::options
 *
 * @method static \yii\httpclient\Request patch(string $url, array|string $data = null, array $headers = [], array $options = []) Creates 'PATCH' request.
 * @see \yii\httpclient\Client::patch
 *
 * @method static \yii\httpclient\Request post(string $url, array|string $data = null, array $headers = [], array $options = []) Creates 'POST' request.
 * @see \yii\httpclient\Client::post
 *
 * @method static \yii\httpclient\Request put(string $url, array|string $data = null, array $headers = [], array $options = []) Creates 'PUT' request.
 * @see \yii\httpclient\Client::put
 *
 * @method static \yii\httpclient\Response send(\yii\httpclient\Request $request) Performs given request.
 * @see \yii\httpclient\Client::send
 *
 * @method static void setTransport(\yii\httpclient\Transport|array|string $transport) Sets the HTTP message transport.
 * @see \yii\httpclient\Client::setTransport
 *
 * @method static void trigger(string $name, \yii\base\Event $event = null) Triggers an event.
 * @see \yii\base\Component::trigger
 *
 * Property accessors
 *
 * @method static string getBaseUrl() Returns base request URL.
 * @see \yii\httpclient\Client::baseUrl
 *
 * @method static int getContentLoggingMaxSize() Returns maximum symbols count of the request content, which should be taken to compose a log and profile messages.
 * @see \yii\httpclient\Client::contentLoggingMaxSize
 *
 * @method static array getFormatters() Returns the formatters for converting data into the content of the specified [[format]].
 * @see \yii\httpclient\Client::formatters
 *
 * @method static array getParsers() Returns the parsers for converting content of the specified [[format]] into the data.
 * @see \yii\httpclient\Client::parsers
 *
 * @method static array getRequestConfig() Returns request object configuration.
 * @see \yii\httpclient\Client::requestConfig
 *
 * @method static array getResponseConfig() Returns response config configuration.
 * @see \yii\httpclient\Client::responseConfig
 *
 * @method static void setBaseUrl(string $value) Sets base request URL.
 * @see \yii\httpclient\Client::baseUrl
 *
 * @method static void setContentLoggingMaxSize(int $value) Sets maximum symbols count of the request content, which should be taken to compose a log and profile messages.
 * @see \yii\httpclient\Client::contentLoggingMaxSize
 *
 * @method static void setFormatters(array $value) Sets the formatters for converting data into the content of the specified [[format]].
 * @see \yii\httpclient\Client::formatters
 *
 * @method static void setParsers(array $value) Sets the parsers for converting content of the specified [[format]] into the data.
 * @see \yii\httpclient\Client::parsers
 *
 * @method static void setRequestConfig(array $value) Sets request object configuration.
 * @see \yii\httpclient\Client::requestConfig
 *
 * @method static void setResponseConfig(array $value) Sets response config configuration.
 * @see \yii\httpclient\Client::responseConfig
 */
class Http extends Facade
{
    /**
     * @inheritDoc
     */
    public static function getFacadeComponentId()
    {
        return 'httpClient';
    }
}
