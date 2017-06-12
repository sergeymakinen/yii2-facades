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
 * Yii::$app->get('response') facade.
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
 * @method static void clear() Clears the headers, cookies, content, status code of the response.
 * @see \yii\web\Response::clear
 *
 * @method static void clearOutputBuffers() Removes all existing output buffers.
 * @see \yii\base\Response::clearOutputBuffers
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
 * @method static null|\yii\base\Behavior getBehavior(string $name) Returns the named behavior object.
 * @see \yii\base\Component::getBehavior
 *
 * @method static \yii\base\Behavior[] getBehaviors() Returns all behaviors attached to this component.
 * @see \yii\base\Component::getBehaviors
 *
 * @method static \yii\web\CookieCollection getCookies() Returns the cookie collection.
 * @see \yii\web\Response::getCookies
 *
 * @method static \yii\web\HeaderCollection getHeaders() Returns the header collection.
 * @see \yii\web\Response::getHeaders
 *
 * @method static bool getIsClientError()
 * @see \yii\web\Response::getIsClientError
 *
 * @method static bool getIsEmpty()
 * @see \yii\web\Response::getIsEmpty
 *
 * @method static bool getIsForbidden()
 * @see \yii\web\Response::getIsForbidden
 *
 * @method static bool getIsInformational()
 * @see \yii\web\Response::getIsInformational
 *
 * @method static bool getIsInvalid()
 * @see \yii\web\Response::getIsInvalid
 *
 * @method static bool getIsNotFound()
 * @see \yii\web\Response::getIsNotFound
 *
 * @method static bool getIsOk()
 * @see \yii\web\Response::getIsOk
 *
 * @method static bool getIsRedirection()
 * @see \yii\web\Response::getIsRedirection
 *
 * @method static bool getIsServerError()
 * @see \yii\web\Response::getIsServerError
 *
 * @method static bool getIsSuccessful()
 * @see \yii\web\Response::getIsSuccessful
 *
 * @method static int getStatusCode()
 * @see \yii\web\Response::getStatusCode
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
 * @method static \yii\web\Response redirect(string|array $url, int $statusCode = 302, bool $checkAjax = true) Redirects the browser to the specified URL.
 * @see \yii\web\Response::redirect
 *
 * @method static \yii\web\Response refresh(string $anchor = '') Refreshes the current page.
 * @see \yii\web\Response::refresh
 *
 * @method static void send() Sends the response to the client.
 * @see \yii\web\Response::send
 *
 * @method static \yii\web\Response sendContentAsFile(string $content, string $attachmentName, array $options = []) Sends the specified content as a file to the browser.
 * @see \yii\web\Response::sendContentAsFile
 *
 * @method static \yii\web\Response sendFile(string $filePath, string $attachmentName = null, array $options = []) Sends a file to the browser.
 * @see \yii\web\Response::sendFile
 *
 * @method static \yii\web\Response sendStreamAsFile(resource $handle, string $attachmentName, array $options = []) Sends the specified stream as a file to the browser.
 * @see \yii\web\Response::sendStreamAsFile
 *
 * @method static \yii\web\Response setDownloadHeaders(string $attachmentName, string $mimeType = null, bool $inline = false, int $contentLength = null) Sets a default set of HTTP headers for file downloading purpose.
 * @see \yii\web\Response::setDownloadHeaders
 *
 * @method static \yii\web\Response setStatusCode(int $value, string $text = null) Sets the response status code.
 * @see \yii\web\Response::setStatusCode
 *
 * @method static \yii\web\Response setStatusCodeByException(\Exception|\Error $e) Sets the response status code based on the exception.
 * @see \yii\web\Response::setStatusCodeByException
 *
 * @method static void trigger(string $name, \yii\base\Event $event = null) Triggers an event.
 * @see \yii\base\Component::trigger
 *
 * @method static \yii\web\Response xSendFile(string $filePath, string $attachmentName = null, array $options = []) Sends existing file to a browser as a download using x-sendfile.
 * @see \yii\web\Response::xSendFile
 *
 * Property accessors
 *
 * @method static string getAcceptMimeType() Returns the MIME type (e.g. `application/json`) from the request ACCEPT header chosen for this response.
 * @see \yii\web\Response::acceptMimeType
 *
 * @method static array getAcceptParams() Returns the parameters (e.g. `['q' => 1, 'version' => '1.0']`) associated with the [[acceptMimeType|chosen MIME type]].
 * @see \yii\web\Response::acceptParams
 *
 * @method static string getCharset() Returns the charset of the text response.
 * @see \yii\web\Response::charset
 *
 * @method static string getContent() Returns the response content.
 * @see \yii\web\Response::content
 *
 * @method static mixed getData() Returns the original response data.
 * @see \yii\web\Response::data
 *
 * @method static int getExitStatus() Returns the exit status.
 * @see \yii\base\Response::exitStatus
 *
 * @method static string getFormat() Returns the response format.
 * @see \yii\web\Response::format
 *
 * @method static array getFormatters() Returns the formatters for converting data into the response content of the specified [[format]].
 * @see \yii\web\Response::formatters
 *
 * @method static array getHttpStatuses() Returns list of HTTP status codes and the corresponding texts.
 * @see \yii\web\Response::httpStatuses
 *
 * @method static bool getIsSent() Returns whether the response has been sent.
 * @see \yii\web\Response::isSent
 *
 * @method static string getStatusText() Returns the HTTP status description that comes together with the status code.
 * @see \yii\web\Response::statusText
 *
 * @method static resource|array getStream() Returns the stream to be sent.
 * @see \yii\web\Response::stream
 *
 * @method static string getVersion() Returns the version of the HTTP protocol to use.
 * @see \yii\web\Response::version
 *
 * @method static void setAcceptMimeType(string $value) Sets the MIME type (e.g. `application/json`) from the request ACCEPT header chosen for this response.
 * @see \yii\web\Response::acceptMimeType
 *
 * @method static void setAcceptParams(array $value) Sets the parameters (e.g. `['q' => 1, 'version' => '1.0']`) associated with the [[acceptMimeType|chosen MIME type]].
 * @see \yii\web\Response::acceptParams
 *
 * @method static void setCharset(string $value) Sets the charset of the text response.
 * @see \yii\web\Response::charset
 *
 * @method static void setContent(string $value) Sets the response content.
 * @see \yii\web\Response::content
 *
 * @method static void setData(mixed $value) Sets the original response data.
 * @see \yii\web\Response::data
 *
 * @method static void setExitStatus(int $value) Sets the exit status.
 * @see \yii\base\Response::exitStatus
 *
 * @method static void setFormat(string $value) Sets the response format.
 * @see \yii\web\Response::format
 *
 * @method static void setFormatters(array $value) Sets the formatters for converting data into the response content of the specified [[format]].
 * @see \yii\web\Response::formatters
 *
 * @method static void setHttpStatuses(array $value) Sets list of HTTP status codes and the corresponding texts.
 * @see \yii\web\Response::httpStatuses
 *
 * @method static void setIsSent(bool $value) Sets whether the response has been sent.
 * @see \yii\web\Response::isSent
 *
 * @method static void setStatusText(string $value) Sets the HTTP status description that comes together with the status code.
 * @see \yii\web\Response::statusText
 *
 * @method static void setStream(resource|array $value) Sets the stream to be sent.
 * @see \yii\web\Response::stream
 *
 * @method static void setVersion(string $value) Sets the version of the HTTP protocol to use.
 * @see \yii\web\Response::version
 */
class Response extends Facade
{
    /**
     * @inheritDoc
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
            'data' => $data,
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
