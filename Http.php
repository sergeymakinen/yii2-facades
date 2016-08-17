<?php

namespace sergeymakinen\facades;

/** @noinspection PhpUnnecessaryFullyQualifiedNameInspection */
/**
 * Http facade.
 *
 * Facades Yii::$app->get('httpClient') component.
 *
 * @method static afterSend(\yii\httpclient\Request $request, \yii\httpclient\Response $response) This method is invoked right after request is sent.
 * @method static \yii\base\Behavior attachBehavior(string $name, string|array|\yii\base\Behavior $behavior) Attaches a behavior to this component.
 * @method static attachBehaviors(array $behaviors) Attaches a list of behaviors to the component.
 * @method static \yii\httpclient\Response[] batchSend(\yii\httpclient\Request[] $requests) Performs multiple HTTP requests in parallel.
 * @method static beforeSend(\yii\httpclient\Request $request) This method is invoked right before request is sent.
 * @method static array behaviors() Returns a list of behaviors that this component should behave as.
 * @method static \yii\httpclient\Request createRequest()
 * @method static string createRequestLogToken(string $method, string $url, array $headers, string $content) Composes the log/profiling message token for the given HTTP request parameters.
 * @method static \yii\httpclient\Response createResponse(string $content = null, array $headers = []) Creates a response instance.
 * @method static \yii\httpclient\Request delete(string $url, array|string $data = null, array $headers = [], array $options = []) Creates 'DELETE' request.
 * @method static null|\yii\base\Behavior detachBehavior(string $name) Detaches a behavior from the component.
 * @method static detachBehaviors() Detaches all behaviors from the component.
 * @method static ensureBehaviors() Makes sure that the behaviors declared in [[behaviors()]] are attached to this component.
 * @method static \yii\httpclient\Request get(string $url, array|string $data = null, array $headers = [], array $options = []) Creates 'GET' request.
 * @method static null|\yii\base\Behavior getBehavior(string $name) Returns the named behavior object.
 * @method static \yii\base\Behavior[] getBehaviors() Returns all behaviors attached to this component.
 * @method static \yii\httpclient\FormatterInterface getFormatter(string $format) Returns HTTP message formatter instance for the specified format.
 * @method static \yii\httpclient\ParserInterface getParser(string $format) Returns HTTP message parser instance for the specified format.
 * @method static \yii\httpclient\Transport getTransport()
 * @method static string getBaseUrl() Returns $baseUrl - base request URL.
 * @method static int getContentLoggingMaxSize() Returns $contentLoggingMaxSize - maximum symbols count of the request content, which should be taken to compose a log and profile messages.
 * @method static array getFormatters() Returns $formatters - the formatters for converting data into the content of the specified [[format]].
 * @method static array getParsers() Returns $parsers - the parsers for converting content of the specified [[format]] into the data.
 * @method static array getRequestConfig() Returns $requestConfig - request object configuration.
 * @method static array getResponseConfig() Returns $responseConfig - response config configuration.
 * @method static bool hasEventHandlers(string $name) Returns a value indicating whether there is any handler attached to the named event.
 * @method static \yii\httpclient\Request head(string $url, array $headers = [], array $options = []) Creates 'HEAD' request.
 * @method static bool off(string $name, callable $handler = null) Detaches an existing event handler from this component.
 * @method static on(string $name, callable $handler, mixed $data = null, bool $append = true) Attaches an event handler to an event.
 * @method static \yii\httpclient\Request options(string $url, array $options = []) Creates 'OPTIONS' request.
 * @method static \yii\httpclient\Request patch(string $url, array|string $data = null, array $headers = [], array $options = []) Creates 'PATCH' request.
 * @method static \yii\httpclient\Request post(string $url, array|string $data = null, array $headers = [], array $options = []) Creates 'POST' request.
 * @method static \yii\httpclient\Request put(string $url, array|string $data = null, array $headers = [], array $options = []) Creates 'PUT' request.
 * @method static \yii\httpclient\Response send(\yii\httpclient\Request $request) Performs given request.
 * @method static setTransport(\yii\httpclient\Transport|array|string $transport) Sets the HTTP message transport.
 * @method static setBaseUrl(string $value) Sets $baseUrl - base request URL.
 * @method static setContentLoggingMaxSize(int $value) Sets $contentLoggingMaxSize - maximum symbols count of the request content, which should be taken to compose a log and profile messages.
 * @method static setFormatters(array $value) Sets $formatters - the formatters for converting data into the content of the specified [[format]].
 * @method static setParsers(array $value) Sets $parsers - the parsers for converting content of the specified [[format]] into the data.
 * @method static setRequestConfig(array $value) Sets $requestConfig - request object configuration.
 * @method static setResponseConfig(array $value) Sets $responseConfig - response config configuration.
 * @method static trigger(string $name, \yii\base\Event $event = null) Triggers an event.
 */
class Http extends Facade
{
    /**
     * @inheritdoc
     */
    public static function getFacadeComponentId()
    {
        return 'httpClient';
    }
}
