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
 * Request facade.
 *
 * Facades Yii::$app->get('request') component.
 *
 * @see \yii\console\Request
 * @see \yii\web\Request
 * @method static \yii\base\Behavior attachBehavior(string $name, string|array|\yii\base\Behavior $behavior) Attaches a behavior to this component.
 * @method static attachBehaviors(array $behaviors) Attaches a list of behaviors to the component.
 * @method static array behaviors() Returns a list of behaviors that this component should behave as.
 * @method static null|\yii\base\Behavior detachBehavior(string $name) Detaches a behavior from the component.
 * @method static detachBehaviors() Detaches all behaviors from the component.
 * @method static ensureBehaviors() Makes sure that the behaviors declared in [[behaviors()]] are attached to this component.
 * @method static array|mixed get(string $name = null, mixed $defaultValue = null) Returns GET parameter with a given name.
 * @method static string getAbsoluteUrl() Returns the currently requested absolute URL.
 * @method static array getAcceptableContentTypes() Returns the content types acceptable by the end user.
 * @method static array getAcceptableLanguages() Returns the languages acceptable by the end user.
 * @method static string|null getAuthPassword()
 * @method static string|null getAuthUser()
 * @method static string getBaseUrl() Returns the relative URL for the application.
 * @method static null|\yii\base\Behavior getBehavior(string $name) Returns the named behavior object.
 * @method static \yii\base\Behavior[] getBehaviors() Returns all behaviors attached to this component.
 * @method static mixed getBodyParam(string $name, mixed $defaultValue = null) Returns the named request body parameter value.
 * @method static array getBodyParams() Returns the request parameters given in the request body.
 * @method static string getContentType() Returns request content-type.
 * @method static string getCookieValidationKey() Returns a secret key used for cookie validation.
 * @method static \yii\web\CookieCollection getCookies() Returns the cookie collection.
 * @method static array getCsrfCookie() Returns the configuration for creating the CSRF [[Cookie|cookie]].
 * @method static string getCsrfParam() Returns the name of the token used to prevent CSRF.
 * @method static string getCsrfToken(bool $regenerate = false) Returns the token used to perform CSRF validation.
 * @method static string getCsrfTokenFromHeader()
 * @method static array getETags() Gets the Etags.
 * @method static bool getEnableCookieValidation() Returns whether cookies should be validated to ensure they are not tampered.
 * @method static bool getEnableCsrfCookie() Returns whether to use cookie to persist CSRF token.
 * @method static bool getEnableCsrfValidation() Returns whether to enable CSRF (Cross-Site Request Forgery) validation.
 * @method static \yii\web\HeaderCollection getHeaders() Returns the header collection.
 * @method static string getHostInfo() Returns the schema and host part of the current request URL.
 * @method static bool getIsAjax() Returns whether this is an AJAX (XMLHttpRequest) request.
 * @method static bool getIsConsoleRequest() Returns a value indicating whether the current request is made via command line.
 * @method static bool getIsDelete() Returns whether this is a DELETE request.
 * @method static bool getIsFlash() Returns whether this is an Adobe Flash or Flex request.
 * @method static bool getIsGet() Returns whether this is a GET request.
 * @method static bool getIsHead() Returns whether this is a HEAD request.
 * @method static bool getIsOptions() Returns whether this is an OPTIONS request.
 * @method static bool getIsPatch() Returns whether this is a PATCH request.
 * @method static bool getIsPjax() Returns whether this is a PJAX request.
 * @method static bool getIsPost() Returns whether this is a POST request.
 * @method static bool getIsPut() Returns whether this is a PUT request.
 * @method static bool getIsSecureConnection() Return if the request is sent via secure channel (https).
 * @method static string getMethod() Returns the method of the current request (e.g. GET, POST, HEAD, PUT, PATCH, DELETE).
 * @method static string getMethodParam() Returns the name of the POST parameter that is used to indicate if a request is a PUT, PATCH or DELETE request tunneled through POST.
 * @method static array getParams() Returns the command line arguments.
 * @method static array getParsers() Returns the parsers for converting the raw HTTP request body into [[bodyParams]].
 * @method static string getPathInfo() Returns the path info of the currently requested URL.
 * @method static int getPort() Returns the port to use for insecure requests.
 * @method static string getPreferredLanguage(array $languages = []) Returns the user-preferred language that should be used by this application.
 * @method static mixed getQueryParam(string $name, mixed $defaultValue = null) Returns the named GET parameter value.
 * @method static array getQueryParams() Returns the request parameters given in the [[queryString]].
 * @method static string getQueryString() Returns part of the request URL that is after the question mark.
 * @method static string getRawBody() Returns the raw HTTP request body.
 * @method static string|null getReferrer() Returns the URL referrer.
 * @method static string getScriptFile() Returns the entry script file path.
 * @method static string getScriptUrl() Returns the relative URL of the entry script.
 * @method static int getSecurePort() Returns the port to use for secure requests.
 * @method static string getServerName() Returns the server name.
 * @method static int|null getServerPort() Returns the server port number.
 * @method static string getUrl() Returns the currently requested relative URL.
 * @method static string|null getUserAgent() Returns the user agent.
 * @method static string|null getUserHost() Returns the user host name.
 * @method static string|null getUserIP() Returns the user IP address.
 * @method static bool hasEventHandlers(string $name) Returns a value indicating whether there is any handler attached to the named event.
 * @method static bool off(string $name, callable $handler = null) Detaches an existing event handler from this component.
 * @method static on(string $name, callable $handler, mixed $data = null, bool $append = true) Attaches an event handler to an event.
 * @method static array parseAcceptHeader(string $header) Parses the given `Accept` (or `Accept-Language`) header.
 * @method static array|mixed post(string $name = null, mixed $defaultValue = null) Returns POST parameter with a given name.
 * @method static array resolve() Resolves the current request into a route and the associated parameters.
 * @method static setAcceptableContentTypes(array $value) Sets the acceptable content types.
 * @method static setAcceptableLanguages(array $value)
 * @method static setBaseUrl(string $value) Sets the relative URL for the application.
 * @method static setBodyParams(array $values) Sets the request body parameters.
 * @method static setCookieValidationKey(string $value) Sets a secret key used for cookie validation.
 * @method static setCsrfCookie(array $value) Sets the configuration for creating the CSRF [[Cookie|cookie]].
 * @method static setCsrfParam(string $value) Sets the name of the token used to prevent CSRF.
 * @method static setEnableCookieValidation(bool $value) Sets whether cookies should be validated to ensure they are not tampered.
 * @method static setEnableCsrfCookie(bool $value) Sets whether to use cookie to persist CSRF token.
 * @method static setEnableCsrfValidation(bool $value) Sets whether to enable CSRF (Cross-Site Request Forgery) validation.
 * @method static setHostInfo(string $value) Sets the schema and host part of the application URL.
 * @method static setIsConsoleRequest(bool $value) Sets the value indicating whether the current request is made via command line.
 * @method static setMethodParam(string $value) Sets the name of the POST parameter that is used to indicate if a request is a PUT, PATCH or DELETE request tunneled through POST.
 * @method static setParams(array $params) Sets the command line arguments.
 * @method static setParsers(array $value) Sets the parsers for converting the raw HTTP request body into [[bodyParams]].
 * @method static setPathInfo(string $value) Sets the path info of the current request.
 * @method static setPort(int $value) Sets the port to use for insecure requests.
 * @method static setQueryParams(array $values) Sets the request [[queryString]] parameters.
 * @method static setRawBody(string $rawBody) Sets the raw HTTP request body, this method is mainly used by test scripts to simulate raw HTTP requests.
 * @method static setScriptFile(string $value) Sets the entry script file path.
 * @method static setScriptUrl(string $value) Sets the relative URL for the application entry script.
 * @method static setSecurePort(int $value) Sets the port to use for secure requests.
 * @method static setUrl(string $value) Sets the currently requested relative URL.
 * @method static trigger(string $name, \yii\base\Event $event = null) Triggers an event.
 * @method static bool validateCsrfToken(string $token = null) Performs the CSRF validation.
 */
class Request extends Facade
{
    /**
     * @inheritdoc
     */
    public static function getFacadeComponentId()
    {
        return 'request';
    }
}
