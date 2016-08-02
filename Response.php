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
 * @method static \yii\web\Response redirect(string|array $url, integer $statusCode = 302, boolean $checkAjax = true) Redirects the browser to the specified URL.
 * @method static \yii\web\Response refresh(string $anchor = '') Refreshes the current page.
 * @method static send() Sends the response to client.
 * @method static \yii\web\Response sendContentAsFile(string $content, string $attachmentName, array $options = []) Sends the specified content as a file to the browser.
 * @method static \yii\web\Response sendFile(string $filePath, string $attachmentName = null, array $options = []) Sends a file to the browser.
 * @method static \yii\web\Response sendStreamAsFile(resource $handle, string $attachmentName, array $options = []) Sends the specified stream as a file to the browser.
 * @method static \yii\web\Response setDownloadHeaders(string $attachmentName, string $mimeType = null, boolean $inline = false, integer $contentLength = null) Sets a default set of HTTP headers for file downloading purpose.
 * @method static setStatusCode(integer $value, string $text = null) Sets the response status code.
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
