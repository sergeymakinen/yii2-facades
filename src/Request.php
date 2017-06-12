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
 * Yii::$app->get('request') facade.
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
 * @method static null|\yii\base\Behavior detachBehavior(string $name) Detaches a behavior from the component.
 * @see \yii\base\Component::detachBehavior
 *
 * @method static void detachBehaviors() Detaches all behaviors from the component.
 * @see \yii\base\Component::detachBehaviors
 *
 * @method static void ensureBehaviors() Makes sure that the behaviors declared in [[behaviors()]] are attached to this component.
 * @see \yii\base\Component::ensureBehaviors
 *
 * @method static array|mixed get(string $name = null, mixed $defaultValue = null) Returns GET parameter with a given name.
 * @see \yii\web\Request::get
 *
 * @method static string getAbsoluteUrl() Returns the currently requested absolute URL.
 * @see \yii\web\Request::getAbsoluteUrl
 *
 * @method static array getAcceptableContentTypes() Returns the content types acceptable by the end user.
 * @see \yii\web\Request::getAcceptableContentTypes
 *
 * @method static array getAcceptableLanguages() Returns the languages acceptable by the end user.
 * @see \yii\web\Request::getAcceptableLanguages
 *
 * @method static string|null getAuthPassword()
 * @see \yii\web\Request::getAuthPassword
 *
 * @method static string|null getAuthUser()
 * @see \yii\web\Request::getAuthUser
 *
 * @method static string getBaseUrl() Returns the relative URL for the application.
 * @see \yii\web\Request::getBaseUrl
 *
 * @method static null|\yii\base\Behavior getBehavior(string $name) Returns the named behavior object.
 * @see \yii\base\Component::getBehavior
 *
 * @method static \yii\base\Behavior[] getBehaviors() Returns all behaviors attached to this component.
 * @see \yii\base\Component::getBehaviors
 *
 * @method static mixed getBodyParam(string $name, mixed $defaultValue = null) Returns the named request body parameter value.
 * @see \yii\web\Request::getBodyParam
 *
 * @method static array getBodyParams() Returns the request parameters given in the request body.
 * @see \yii\web\Request::getBodyParams
 *
 * @method static string getContentType() Returns request content-type The Content-Type header field indicates the MIME type of the data contained in [[getRawBody()]] or, in the case of the HEAD method, the media type that would have been sent had the request been a GET.
 * @see \yii\web\Request::getContentType
 *
 * @method static \yii\web\CookieCollection getCookies() Returns the cookie collection.
 * @see \yii\web\Request::getCookies
 *
 * @method static string getCsrfToken(bool $regenerate = false) Returns the token used to perform CSRF validation.
 * @see \yii\web\Request::getCsrfToken
 *
 * @method static string getCsrfTokenFromHeader()
 * @see \yii\web\Request::getCsrfTokenFromHeader
 *
 * @method static array getETags() Gets the Etags.
 * @see \yii\web\Request::getETags
 *
 * @method static \yii\web\HeaderCollection getHeaders() Returns the header collection.
 * @see \yii\web\Request::getHeaders
 *
 * @method static string|null getHostInfo() Returns the schema and host part of the current request URL.
 * @see \yii\web\Request::getHostInfo
 *
 * @method static string|null getHostName() Returns the host part of the current request URL.
 * @see \yii\web\Request::getHostName
 *
 * @method static bool getIsAjax() Returns whether this is an AJAX (XMLHttpRequest) request.
 * @see \yii\web\Request::getIsAjax
 *
 * @method static bool getIsConsoleRequest() Returns a value indicating whether the current request is made via command line.
 * @see \yii\base\Request::getIsConsoleRequest
 *
 * @method static bool getIsDelete() Returns whether this is a DELETE request.
 * @see \yii\web\Request::getIsDelete
 *
 * @method static bool getIsFlash() Returns whether this is an Adobe Flash or Flex request.
 * @see \yii\web\Request::getIsFlash
 *
 * @method static bool getIsGet() Returns whether this is a GET request.
 * @see \yii\web\Request::getIsGet
 *
 * @method static bool getIsHead() Returns whether this is a HEAD request.
 * @see \yii\web\Request::getIsHead
 *
 * @method static bool getIsOptions() Returns whether this is an OPTIONS request.
 * @see \yii\web\Request::getIsOptions
 *
 * @method static bool getIsPatch() Returns whether this is a PATCH request.
 * @see \yii\web\Request::getIsPatch
 *
 * @method static bool getIsPjax() Returns whether this is a PJAX request.
 * @see \yii\web\Request::getIsPjax
 *
 * @method static bool getIsPost() Returns whether this is a POST request.
 * @see \yii\web\Request::getIsPost
 *
 * @method static bool getIsPut() Returns whether this is a PUT request.
 * @see \yii\web\Request::getIsPut
 *
 * @method static bool getIsSecureConnection() Return if the request is sent via secure channel (https).
 * @see \yii\web\Request::getIsSecureConnection
 *
 * @method static string getMethod() Returns the method of the current request (e.g. GET, POST, HEAD, PUT, PATCH, DELETE).
 * @see \yii\web\Request::getMethod
 *
 * @method static array getParams() Returns the command line arguments.
 * @see \yii\console\Request::getParams
 *
 * @method static string getPathInfo() Returns the path info of the currently requested URL.
 * @see \yii\web\Request::getPathInfo
 *
 * @method static int getPort() Returns the port to use for insecure requests.
 * @see \yii\web\Request::getPort
 *
 * @method static string getPreferredLanguage(array $languages = []) Returns the user-preferred language that should be used by this application.
 * @see \yii\web\Request::getPreferredLanguage
 *
 * @method static mixed getQueryParam(string $name, mixed $defaultValue = null) Returns the named GET parameter value.
 * @see \yii\web\Request::getQueryParam
 *
 * @method static array getQueryParams() Returns the request parameters given in the [[queryString]].
 * @see \yii\web\Request::getQueryParams
 *
 * @method static string getQueryString() Returns part of the request URL that is after the question mark.
 * @see \yii\web\Request::getQueryString
 *
 * @method static string getRawBody() Returns the raw HTTP request body.
 * @see \yii\web\Request::getRawBody
 *
 * @method static string|null getReferrer() Returns the URL referrer.
 * @see \yii\web\Request::getReferrer
 *
 * @method static string getScriptFile() Returns the entry script file path.
 * @see \yii\web\Request::getScriptFile
 *
 * @method static string getScriptUrl() Returns the relative URL of the entry script.
 * @see \yii\web\Request::getScriptUrl
 *
 * @method static int getSecurePort() Returns the port to use for secure requests.
 * @see \yii\web\Request::getSecurePort
 *
 * @method static string getServerName() Returns the server name.
 * @see \yii\web\Request::getServerName
 *
 * @method static int|null getServerPort() Returns the server port number.
 * @see \yii\web\Request::getServerPort
 *
 * @method static string getUrl() Returns the currently requested relative URL.
 * @see \yii\web\Request::getUrl
 *
 * @method static string|null getUserAgent() Returns the user agent.
 * @see \yii\web\Request::getUserAgent
 *
 * @method static string|null getUserHost() Returns the user host name.
 * @see \yii\web\Request::getUserHost
 *
 * @method static string|null getUserIP() Returns the user IP address.
 * @see \yii\web\Request::getUserIP
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
 * @method static array parseAcceptHeader(string $header) Parses the given `Accept` (or `Accept-Language`) header.
 * @see \yii\web\Request::parseAcceptHeader
 *
 * @method static array|mixed post(string $name = null, mixed $defaultValue = null) Returns POST parameter with a given name.
 * @see \yii\web\Request::post
 *
 * @method static array resolve() Resolves the current request into a route and the associated parameters.
 * @see \yii\web\Request::resolve
 *
 * @method static void setAcceptableContentTypes(array $value) Sets the acceptable content types.
 * @see \yii\web\Request::setAcceptableContentTypes
 *
 * @method static void setAcceptableLanguages(array $value)
 * @see \yii\web\Request::setAcceptableLanguages
 *
 * @method static void setBaseUrl(string $value) Sets the relative URL for the application.
 * @see \yii\web\Request::setBaseUrl
 *
 * @method static void setBodyParams(array $values) Sets the request body parameters.
 * @see \yii\web\Request::setBodyParams
 *
 * @method static void setHostInfo(string|null $value) Sets the schema and host part of the application URL.
 * @see \yii\web\Request::setHostInfo
 *
 * @method static void setIsConsoleRequest(bool $value) Sets the value indicating whether the current request is made via command line.
 * @see \yii\base\Request::setIsConsoleRequest
 *
 * @method static void setParams(array $params) Sets the command line arguments.
 * @see \yii\console\Request::setParams
 *
 * @method static void setPathInfo(string $value) Sets the path info of the current request.
 * @see \yii\web\Request::setPathInfo
 *
 * @method static void setPort(int $value) Sets the port to use for insecure requests.
 * @see \yii\web\Request::setPort
 *
 * @method static void setQueryParams(array $values) Sets the request [[queryString]] parameters.
 * @see \yii\web\Request::setQueryParams
 *
 * @method static void setRawBody(string $rawBody) Sets the raw HTTP request body, this method is mainly used by test scripts to simulate raw HTTP requests.
 * @see \yii\web\Request::setRawBody
 *
 * @method static void setScriptFile(string $value) Sets the entry script file path.
 * @see \yii\web\Request::setScriptFile
 *
 * @method static void setScriptUrl(string $value) Sets the relative URL for the application entry script.
 * @see \yii\web\Request::setScriptUrl
 *
 * @method static void setSecurePort(int $value) Sets the port to use for secure requests.
 * @see \yii\web\Request::setSecurePort
 *
 * @method static void setUrl(string $value) Sets the currently requested relative URL.
 * @see \yii\web\Request::setUrl
 *
 * @method static void trigger(string $name, \yii\base\Event $event = null) Triggers an event.
 * @see \yii\base\Component::trigger
 *
 * @method static bool validateCsrfToken(string $clientSuppliedToken = null) Performs the CSRF validation.
 * @see \yii\web\Request::validateCsrfToken
 *
 * Property accessors
 *
 * @method static string getCookieValidationKey() Returns a secret key used for cookie validation.
 * @see \yii\web\Request::cookieValidationKey
 *
 * @method static array getCsrfCookie() Returns the configuration for creating the CSRF [[Cookie|cookie]].
 * @see \yii\web\Request::csrfCookie
 *
 * @method static string getCsrfParam() Returns the name of the token used to prevent CSRF.
 * @see \yii\web\Request::csrfParam
 *
 * @method static bool getEnableCookieValidation() Returns whether cookies should be validated to ensure they are not tampered.
 * @see \yii\web\Request::enableCookieValidation
 *
 * @method static bool getEnableCsrfCookie() Returns whether to use cookie to persist CSRF token.
 * @see \yii\web\Request::enableCsrfCookie
 *
 * @method static bool getEnableCsrfValidation() Returns whether to enable CSRF (Cross-Site Request Forgery) validation.
 * @see \yii\web\Request::enableCsrfValidation
 *
 * @method static string getMethodParam() Returns the name of the POST parameter that is used to indicate if a request is a PUT, PATCH or DELETE request tunneled through POST.
 * @see \yii\web\Request::methodParam
 *
 * @method static array getParsers() Returns the parsers for converting the raw HTTP request body into [[bodyParams]].
 * @see \yii\web\Request::parsers
 *
 * @method static void setCookieValidationKey(string $value) Sets a secret key used for cookie validation.
 * @see \yii\web\Request::cookieValidationKey
 *
 * @method static void setCsrfCookie(array $value) Sets the configuration for creating the CSRF [[Cookie|cookie]].
 * @see \yii\web\Request::csrfCookie
 *
 * @method static void setCsrfParam(string $value) Sets the name of the token used to prevent CSRF.
 * @see \yii\web\Request::csrfParam
 *
 * @method static void setEnableCookieValidation(bool $value) Sets whether cookies should be validated to ensure they are not tampered.
 * @see \yii\web\Request::enableCookieValidation
 *
 * @method static void setEnableCsrfCookie(bool $value) Sets whether to use cookie to persist CSRF token.
 * @see \yii\web\Request::enableCsrfCookie
 *
 * @method static void setEnableCsrfValidation(bool $value) Sets whether to enable CSRF (Cross-Site Request Forgery) validation.
 * @see \yii\web\Request::enableCsrfValidation
 *
 * @method static void setMethodParam(string $value) Sets the name of the POST parameter that is used to indicate if a request is a PUT, PATCH or DELETE request tunneled through POST.
 * @see \yii\web\Request::methodParam
 *
 * @method static void setParsers(array $value) Sets the parsers for converting the raw HTTP request body into [[bodyParams]].
 * @see \yii\web\Request::parsers
 */
class Request extends Facade
{
    /**
     * @inheritDoc
     */
    public static function getFacadeComponentId()
    {
        return 'request';
    }
}
