<?php

namespace sergeymakinen\facades;

/** @noinspection PhpUnnecessaryFullyQualifiedNameInspection */
/**
 * Response facade.
 *
 * @method static clear() Clears the headers, cookies, content, status code of the response.
 * @method static clearOutputBuffers() Removes all existing output buffers.
 * @method static \yii\web\CookieCollection getCookies() Returns the cookie collection.
 * @method static \yii\web\HeaderCollection getHeaders() Returns the header collection.
 * @method static boolean getIsClientError()
 * @method static boolean getIsEmpty()
 * @method static boolean getIsForbidden()
 * @method static boolean getIsInformational()
 * @method static boolean getIsInvalid()
 * @method static boolean getIsNotFound()
 * @method static boolean getIsOk()
 * @method static boolean getIsRedirection()
 * @method static boolean getIsServerError()
 * @method static boolean getIsSuccessful()
 * @method static integer getStatusCode()
 * @method static string getAcceptMimeType() Returns $acceptMimeType - the MIME type (e.g. `application/json`) from the request ACCEPT header chosen for this response.
 * @method static array getAcceptParams() Returns $acceptParams - the parameters (e.g. `['q' => 1, 'version' => '1.0']`) associated with the [[acceptMimeType|chosen MIME type]].
 * @method static string getCharset() Returns $charset - the charset of the text response.
 * @method static string getContent() Returns $content - the response content.
 * @method static mixed getData() Returns $data - the original response data.
 * @method static integer getExitStatus() Returns $exitStatus - the exit status.
 * @method static string getFormat() Returns $format - the response format.
 * @method static array getFormatters() Returns $formatters - the formatters for converting data into the response content of the specified [[format]].
 * @method static array getHttpStatuses() Returns $httpStatuses.
 * @method static boolean getIsSent() Returns $isSent - whether the response has been sent.
 * @method static string getStatusText() Returns $statusText - the HTTP status description that comes together with the status code.
 * @method static resource|array getStream() Returns $stream - the stream to be sent.
 * @method static string getVersion() Returns $version - the version of the HTTP protocol to use.
 * @method static \yii\web\Response redirect(string|array $url, integer $statusCode = 302, boolean $checkAjax = true) Redirects the browser to the specified URL.
 * @method static \yii\web\Response refresh(string $anchor = '') Refreshes the current page.
 * @method static send() Sends the response to client.
 * @method static \yii\web\Response sendContentAsFile(string $content, string $attachmentName, array $options = []) Sends the specified content as a file to the browser.
 * @method static \yii\web\Response sendFile(string $filePath, string $attachmentName = null, array $options = []) Sends a file to the browser.
 * @method static \yii\web\Response sendStreamAsFile(resource $handle, string $attachmentName, array $options = []) Sends the specified stream as a file to the browser.
 * @method static \yii\web\Response setDownloadHeaders(string $attachmentName, string $mimeType = null, boolean $inline = false, integer $contentLength = null) Sets a default set of HTTP headers for file downloading purpose.
 * @method static setStatusCode(integer $value, string $text = null) Sets the response status code.
 * @method static setAcceptMimeType(string $value) Sets $acceptMimeType - the MIME type (e.g. `application/json`) from the request ACCEPT header chosen for this response.
 * @method static setAcceptParams(array $value) Sets $acceptParams - the parameters (e.g. `['q' => 1, 'version' => '1.0']`) associated with the [[acceptMimeType|chosen MIME type]].
 * @method static setCharset(string $value) Sets $charset - the charset of the text response.
 * @method static setContent(string $value) Sets $content - the response content.
 * @method static setData(mixed $value) Sets $data - the original response data.
 * @method static setExitStatus(integer $value) Sets $exitStatus - the exit status.
 * @method static setFormat(string $value) Sets $format - the response format.
 * @method static setFormatters(array $value) Sets $formatters - the formatters for converting data into the response content of the specified [[format]].
 * @method static setHttpStatuses(array $value) Sets $httpStatuses.
 * @method static setIsSent(boolean $value) Sets $isSent - whether the response has been sent.
 * @method static setStatusText(string $value) Sets $statusText - the HTTP status description that comes together with the status code.
 * @method static setStream(resource|array $value) Sets $stream - the stream to be sent.
 * @method static setVersion(string $value) Sets $version - the version of the HTTP protocol to use.
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
