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
 * Response facade.
 *
 * Facades Yii::$app->get('response') component.
 *
 * @see \yii\console\Response
 * @see \yii\web\Response
 * @method static \yii\base\Behavior attachBehavior(string $name, string|array|\yii\base\Behavior $behavior) Attaches a behavior to this component.
 * @method static attachBehaviors(array $behaviors) Attaches a list of behaviors to the component.
 * @method static array behaviors() Returns a list of behaviors that this component should behave as.
 * @method static clear() Clears the headers, cookies, content, status code of the response.
 * @method static clearOutputBuffers() Removes all existing output buffers.
 * @method static null|\yii\base\Behavior detachBehavior(string $name) Detaches a behavior from the component.
 * @method static detachBehaviors() Detaches all behaviors from the component.
 * @method static ensureBehaviors() Makes sure that the behaviors declared in [[behaviors()]] are attached to this component.
 * @method static string getAcceptMimeType() Returns the MIME type (e.g. `application/json`) from the request ACCEPT header chosen for this response.
 * @method static array getAcceptParams() Returns the parameters (e.g. `['q' => 1, 'version' => '1.0']`) associated with the [[acceptMimeType|chosen MIME type]].
 * @method static null|\yii\base\Behavior getBehavior(string $name) Returns the named behavior object.
 * @method static \yii\base\Behavior[] getBehaviors() Returns all behaviors attached to this component.
 * @method static string getCharset() Returns the charset of the text response.
 * @method static string getContent() Returns the response content.
 * @method static \yii\web\CookieCollection getCookies() Returns the cookie collection.
 * @method static mixed getData() Returns the original response data.
 * @method static int getExitStatus() Returns the exit status.
 * @method static string getFormat() Returns the response format.
 * @method static array getFormatters() Returns the formatters for converting data into the response content of the specified [[format]].
 * @method static \yii\web\HeaderCollection getHeaders() Returns the header collection.
 * @method static array getHttpStatuses() Returns list of HTTP status codes and the corresponding texts.
 * @method static bool getIsClientError()
 * @method static bool getIsEmpty()
 * @method static bool getIsForbidden()
 * @method static bool getIsInformational()
 * @method static bool getIsInvalid()
 * @method static bool getIsNotFound()
 * @method static bool getIsOk()
 * @method static bool getIsRedirection()
 * @method static bool getIsSent() Returns whether the response has been sent.
 * @method static bool getIsServerError()
 * @method static bool getIsSuccessful()
 * @method static int getStatusCode()
 * @method static string getStatusText() Returns the HTTP status description that comes together with the status code.
 * @method static resource|array getStream() Returns the stream to be sent.
 * @method static string getVersion() Returns the version of the HTTP protocol to use.
 * @method static bool hasEventHandlers(string $name) Returns a value indicating whether there is any handler attached to the named event.
 * @method static bool off(string $name, callable $handler = null) Detaches an existing event handler from this component.
 * @method static on(string $name, callable $handler, mixed $data = null, bool $append = true) Attaches an event handler to an event.
 * @method static \yii\web\Response redirect(string|array $url, int $statusCode = 302, bool $checkAjax = true) Redirects the browser to the specified URL.
 * @method static \yii\web\Response refresh(string $anchor = '') Refreshes the current page.
 * @method static send() Sends the response to the client.
 * @method static \yii\web\Response sendContentAsFile(string $content, string $attachmentName, array $options = []) Sends the specified content as a file to the browser.
 * @method static \yii\web\Response sendFile(string $filePath, string $attachmentName = null, array $options = []) Sends a file to the browser.
 * @method static \yii\web\Response sendStreamAsFile(resource $handle, string $attachmentName, array $options = []) Sends the specified stream as a file to the browser.
 * @method static setAcceptMimeType(string $value) Sets the MIME type (e.g. `application/json`) from the request ACCEPT header chosen for this response.
 * @method static setAcceptParams(array $value) Sets the parameters (e.g. `['q' => 1, 'version' => '1.0']`) associated with the [[acceptMimeType|chosen MIME type]].
 * @method static setCharset(string $value) Sets the charset of the text response.
 * @method static setContent(string $value) Sets the response content.
 * @method static setData(mixed $value) Sets the original response data.
 * @method static \yii\web\Response setDownloadHeaders(string $attachmentName, string $mimeType = null, bool $inline = false, int $contentLength = null) Sets a default set of HTTP headers for file downloading purpose.
 * @method static setExitStatus(int $value) Sets the exit status.
 * @method static setFormat(string $value) Sets the response format.
 * @method static setFormatters(array $value) Sets the formatters for converting data into the response content of the specified [[format]].
 * @method static setHttpStatuses(array $value) Sets list of HTTP status codes and the corresponding texts.
 * @method static setIsSent(bool $value) Sets whether the response has been sent.
 * @method static setStatusCode(int $value, string $text = null) Sets the response status code.
 * @method static setStatusText(string $value) Sets the HTTP status description that comes together with the status code.
 * @method static setStream(resource|array $value) Sets the stream to be sent.
 * @method static setVersion(string $value) Sets the version of the HTTP protocol to use.
 * @method static trigger(string $name, \yii\base\Event $event = null) Triggers an event.
 * @method static \yii\web\Response xSendFile(string $filePath, string $attachmentName = null, array $options = []) Sends existing file to a browser as a download using x-sendfile.
 */
class Response extends Facade
{
    /**
     * @inheritdoc
     */
    public static function getFacadeComponentId()
    {
        return 'response';
    }

    /**
     * Sends an empty response.
     *
     * @param int $statusCode the status code
     * @param array $headers headers to be sent along with the response.
     *
     * @return \yii\web\Response the response object itself.
     */
    public static function bare($statusCode = 204, array $headers = [])
    {
        $response = static::sendFormat(\yii\web\Response::FORMAT_RAW, null, $headers);
        $response->setStatusCode($statusCode);
        return $response;
    }

    /**
     * Sends the specified data as HTML.
     *
     * @param mixed $data data to be sent.
     * @param array $headers headers to be sent along with the response.
     *
     * @return \yii\web\Response the response object itself.
     */
    public static function html($data, array $headers = [])
    {
        return static::sendFormat(\yii\web\Response::FORMAT_HTML, $data, $headers);
    }

    /**
     * Sends the specified data as JSON.
     *
     * @param mixed $data data to be sent.
     * @param array $headers headers to be sent along with the response.
     *
     * @return \yii\web\Response the response object itself.
     */
    public static function json($data, array $headers = [])
    {
        return static::sendFormat(\yii\web\Response::FORMAT_JSON, $data, $headers);
    }

    /**
     * Sends the specified data as JSONP.
     *
     * @param mixed $data data to be sent.
     * @param string $callback the JSONP callback name.
     * @param array $headers headers to be sent along with the response.
     *
     * @return \yii\web\Response the response object itself.
     */
    public static function jsonp($data, $callback = 'callback', array $headers = [])
    {
        return static::sendFormat(\yii\web\Response::FORMAT_JSONP, [
            'callback' => $callback,
            'data' => $data
        ], $headers);
    }

    /**
     * Sends the specified data as is.
     *
     * @param mixed $data data to be sent.
     * @param array $headers headers to be sent along with the response.
     *
     * @return \yii\web\Response the response object itself.
     */
    public static function raw($data, array $headers = [])
    {
        return static::sendFormat(\yii\web\Response::FORMAT_RAW, $data, $headers);
    }

    /**
     * Sends the specified data as XML.
     *
     * @param mixed $data data to be sent.
     * @param array $headers headers to be sent along with the response.
     *
     * @return \yii\web\Response the response object itself.
     */
    public static function xml($data, array $headers = [])
    {
        return static::sendFormat(\yii\web\Response::FORMAT_XML, $data, $headers);
    }

    /**
     * Sends the specified data as the specified format.
     *
     * @param string $format the format to be set.
     * @param mixed $data data to be sent.
     * @param array $headers headers to be sent along with the response.
     *
     * @return \yii\web\Response the response object itself.
     */
    protected static function sendFormat($format, $data, array $headers)
    {
        /**
         * @var \yii\web\Response $response
         */
        $response = static::getFacadeComponent();
        $response->format = $format;
        $response->data = $data;
        foreach ($headers as $name => $value) {
            if (strtolower($name) === 'location') {
                /** @noinspection PhpUnnecessaryFullyQualifiedNameInspection */
                $value = \yii\helpers\Url::to($value);
                if (strpos($value, '/') === 0 && strpos($value, '//') !== 0) {
                    $value = Request::getHostInfo() . $value;
                }
            }
            $response->getHeaders()->set($name, $value);
        }
        return $response;
    }
}
