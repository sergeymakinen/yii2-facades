<?php

namespace sergeymakinen\facades;

/** @noinspection PhpUnnecessaryFullyQualifiedNameInspection */
/**
 * Response facade.
 *
 * Facades Yii::$app->get('response') component.
 *
 * @method static \yii\base\Behavior attachBehavior(string $name, string|array|\yii\base\Behavior $behavior) Attaches a behavior to this component.
 * @method static attachBehaviors(array $behaviors) Attaches a list of behaviors to the component.
 * @method static array behaviors() Returns a list of behaviors that this component should behave as.
 * @method static clear() Clears the headers, cookies, content, status code of the response.
 * @method static clearOutputBuffers() Removes all existing output buffers.
 * @method static null|\yii\base\Behavior detachBehavior(string $name) Detaches a behavior from the component.
 * @method static detachBehaviors() Detaches all behaviors from the component.
 * @method static ensureBehaviors() Makes sure that the behaviors declared in [[behaviors()]] are attached to this component.
 * @method static null|\yii\base\Behavior getBehavior(string $name) Returns the named behavior object.
 * @method static \yii\base\Behavior[] getBehaviors() Returns all behaviors attached to this component.
 * @method static \yii\web\CookieCollection getCookies() Returns the cookie collection.
 * @method static \yii\web\HeaderCollection getHeaders() Returns the header collection.
 * @method static bool getIsClientError()
 * @method static bool getIsEmpty()
 * @method static bool getIsForbidden()
 * @method static bool getIsInformational()
 * @method static bool getIsInvalid()
 * @method static bool getIsNotFound()
 * @method static bool getIsOk()
 * @method static bool getIsRedirection()
 * @method static bool getIsServerError()
 * @method static bool getIsSuccessful()
 * @method static int getStatusCode()
 * @method static string getAcceptMimeType() Returns $acceptMimeType - the MIME type (e.g. `application/json`) from the request ACCEPT header chosen for this response.
 * @method static array getAcceptParams() Returns $acceptParams - the parameters (e.g. `['q' => 1, 'version' => '1.0']`) associated with the [[acceptMimeType|chosen MIME type]].
 * @method static string getCharset() Returns $charset - the charset of the text response.
 * @method static string getContent() Returns $content - the response content.
 * @method static mixed getData() Returns $data - the original response data.
 * @method static int getExitStatus() Returns $exitStatus - the exit status.
 * @method static string getFormat() Returns $format - the response format.
 * @method static array getFormatters() Returns $formatters - the formatters for converting data into the response content of the specified [[format]].
 * @method static array getHttpStatuses() Returns $httpStatuses - list of HTTP status codes and the corresponding texts.
 * @method static bool getIsSent() Returns $isSent - whether the response has been sent.
 * @method static string getStatusText() Returns $statusText - the HTTP status description that comes together with the status code.
 * @method static resource|array getStream() Returns $stream - the stream to be sent.
 * @method static string getVersion() Returns $version - the version of the HTTP protocol to use.
 * @method static bool hasEventHandlers(string $name) Returns a value indicating whether there is any handler attached to the named event.
 * @method static bool off(string $name, callable $handler = null) Detaches an existing event handler from this component.
 * @method static on(string $name, callable $handler, mixed $data = null, bool $append = true) Attaches an event handler to an event.
 * @method static \yii\web\Response redirect(string|array $url, int $statusCode = 302, bool $checkAjax = true) Redirects the browser to the specified URL.
 * @method static \yii\web\Response refresh(string $anchor = '') Refreshes the current page.
 * @method static send() Sends the response to client.
 * @method static \yii\web\Response sendContentAsFile(string $content, string $attachmentName, array $options = []) Sends the specified content as a file to the browser.
 * @method static \yii\web\Response sendFile(string $filePath, string $attachmentName = null, array $options = []) Sends a file to the browser.
 * @method static \yii\web\Response sendStreamAsFile(resource $handle, string $attachmentName, array $options = []) Sends the specified stream as a file to the browser.
 * @method static \yii\web\Response setDownloadHeaders(string $attachmentName, string $mimeType = null, bool $inline = false, int $contentLength = null) Sets a default set of HTTP headers for file downloading purpose.
 * @method static setStatusCode(int $value, string $text = null) Sets the response status code.
 * @method static setAcceptMimeType(string $value) Sets $acceptMimeType - the MIME type (e.g. `application/json`) from the request ACCEPT header chosen for this response.
 * @method static setAcceptParams(array $value) Sets $acceptParams - the parameters (e.g. `['q' => 1, 'version' => '1.0']`) associated with the [[acceptMimeType|chosen MIME type]].
 * @method static setCharset(string $value) Sets $charset - the charset of the text response.
 * @method static setContent(string $value) Sets $content - the response content.
 * @method static setData(mixed $value) Sets $data - the original response data.
 * @method static setExitStatus(int $value) Sets $exitStatus - the exit status.
 * @method static setFormat(string $value) Sets $format - the response format.
 * @method static setFormatters(array $value) Sets $formatters - the formatters for converting data into the response content of the specified [[format]].
 * @method static setHttpStatuses(array $value) Sets $httpStatuses - list of HTTP status codes and the corresponding texts.
 * @method static setIsSent(bool $value) Sets $isSent - whether the response has been sent.
 * @method static setStatusText(string $value) Sets $statusText - the HTTP status description that comes together with the status code.
 * @method static setStream(resource|array $value) Sets $stream - the stream to be sent.
 * @method static setVersion(string $value) Sets $version - the version of the HTTP protocol to use.
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
}
