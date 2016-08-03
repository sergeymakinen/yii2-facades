<?php

namespace sergeymakinen\facades;

/** @noinspection PhpUnnecessaryFullyQualifiedNameInspection */
/**
 * Request facade.
 *
 * @method static array|mixed get(string $name = null, mixed $defaultValue = null) Returns GET parameter with a given name. If name isn't specified, returns an array of all GET parameters.
 * @method static string getAbsoluteUrl() Returns the currently requested absolute URL.
 * @method static array getAcceptableContentTypes() Returns the content types acceptable by the end user.
 * @method static array getAcceptableLanguages() Returns the languages acceptable by the end user.
 * @method static string|null getAuthPassword()
 * @method static string|null getAuthUser()
 * @method static string getBaseUrl() Returns the relative URL for the application.
 * @method static mixed getBodyParam(string $name, mixed $defaultValue = null) Returns the named request body parameter value.
 * @method static array getBodyParams() Returns the request parameters given in the request body.
 * @method static string getContentType() Returns request content-type.
 * @method static \yii\web\CookieCollection getCookies() Returns the cookie collection.
 * @method static string getCsrfToken(boolean $regenerate = false) Returns the token used to perform CSRF validation.
 * @method static string getCsrfTokenFromHeader()
 * @method static array getETags() Gets the Etags.
 * @method static \yii\web\HeaderCollection getHeaders() Returns the header collection.
 * @method static string getHostInfo() Returns the schema and host part of the current request URL.
 * @method static boolean getIsAjax() Returns whether this is an AJAX (XMLHttpRequest) request.
 * @method static boolean getIsConsoleRequest() Returns a value indicating whether the current request is made via command line.
 * @method static boolean getIsDelete() Returns whether this is a DELETE request.
 * @method static boolean getIsFlash() Returns whether this is an Adobe Flash or Flex request.
 * @method static boolean getIsGet() Returns whether this is a GET request.
 * @method static boolean getIsHead() Returns whether this is a HEAD request.
 * @method static boolean getIsOptions() Returns whether this is an OPTIONS request.
 * @method static boolean getIsPatch() Returns whether this is a PATCH request.
 * @method static boolean getIsPjax() Returns whether this is a PJAX request.
 * @method static boolean getIsPost() Returns whether this is a POST request.
 * @method static boolean getIsPut() Returns whether this is a PUT request.
 * @method static boolean getIsSecureConnection() Return if the request is sent via secure channel (https).
 * @method static string getMethod() Returns the method of the current request (e.g. GET, POST, HEAD, PUT, PATCH, DELETE).
 * @method static array getParams() Returns the command line arguments.
 * @method static string getPathInfo() Returns the path info of the currently requested URL.
 * @method static integer getPort() Returns the port to use for insecure requests.
 * @method static string getPreferredLanguage(array $languages = []) Returns the user-preferred language that should be used by this application.
 * @method static mixed getQueryParam(string $name, mixed $defaultValue = null) Returns the named GET parameter value.
 * @method static array getQueryParams() Returns the request parameters given in the [[queryString]].
 * @method static string getQueryString() Returns part of the request URL that is after the question mark.
 * @method static string getRawBody() Returns the raw HTTP request body.
 * @method static string|null getReferrer() Returns the URL referrer.
 * @method static string getScriptFile() Returns entry script file path.
 * @method static string getScriptUrl() Returns the relative URL of the entry script.
 * @method static integer getSecurePort() Returns the port to use for secure requests.
 * @method static string getServerName() Returns the server name.
 * @method static integer|null getServerPort() Returns the server port number.
 * @method static string getUrl() Returns the currently requested relative URL.
 * @method static string|null getUserAgent() Returns the user agent.
 * @method static string|null getUserHost() Returns the user host name.
 * @method static string|null getUserIP() Returns the user IP address.
 * @method static string getCookieValidationKey() Returns $cookieValidationKey - a secret key used for cookie validation.
 * @method static array getCsrfCookie() Returns $csrfCookie - the configuration for creating the CSRF [[Cookie|cookie]].
 * @method static string getCsrfParam() Returns $csrfParam - the name of the token used to prevent CSRF.
 * @method static boolean getEnableCookieValidation() Returns $enableCookieValidation - whether cookies should be validated to ensure they are not tampered.
 * @method static boolean getEnableCsrfCookie() Returns $enableCsrfCookie - whether to use cookie to persist CSRF token.
 * @method static boolean getEnableCsrfValidation() Returns $enableCsrfValidation - whether to enable CSRF (Cross-Site Request Forgery) validation.
 * @method static string getMethodParam() Returns $methodParam - the name of the POST parameter that is used to indicate if a request is a PUT, PATCH or DELETE request tunneled through POST.
 * @method static array getParsers() Returns $parsers - the parsers for converting the raw HTTP request body into [[bodyParams]].
 * @method static array parseAcceptHeader(string $header) Parses the given `Accept` (or `Accept-Language`) header.
 * @method static array|mixed post(string $name = null, mixed $defaultValue = null) Returns POST parameter with a given name. If name isn't specified, returns an array of all POST parameters.
 * @method static array resolve() Resolves the current request into a route and the associated parameters.
 * @method static setAcceptableContentTypes(array $value) Sets the acceptable content types.
 * @method static setAcceptableLanguages(array $value) be ordered by the preference level.
 * @method static setBaseUrl(string $value) Sets the relative URL for the application.
 * @method static setBodyParams(array $values) Sets the request body parameters.
 * @method static setHostInfo(string $value) Sets the schema and host part of the application URL.
 * @method static setIsConsoleRequest(boolean $value) Sets the value indicating whether the current request is made via command line.
 * @method static setParams(array $params) Sets the command line arguments.
 * @method static setPathInfo(string $value) Sets the path info of the current request.
 * @method static setPort(integer $value) Sets the port to use for insecure requests.
 * @method static setQueryParams(array $values) Sets the request [[queryString]] parameters.
 * @method static setRawBody(string $rawBody) Sets the raw HTTP request body, this method is mainly used by test scripts to simulate raw HTTP requests.
 * @method static setScriptFile(string $value) Sets the entry script file path.
 * @method static setScriptUrl(string $value) Sets the relative URL for the application entry script.
 * @method static setSecurePort(integer $value) Sets the port to use for secure requests.
 * @method static setUrl(string $value) Sets the currently requested relative URL.
 * @method static setCookieValidationKey(string $value) Sets $cookieValidationKey - a secret key used for cookie validation.
 * @method static setCsrfCookie(array $value) Sets $csrfCookie - the configuration for creating the CSRF [[Cookie|cookie]].
 * @method static setCsrfParam(string $value) Sets $csrfParam - the name of the token used to prevent CSRF.
 * @method static setEnableCookieValidation(boolean $value) Sets $enableCookieValidation - whether cookies should be validated to ensure they are not tampered.
 * @method static setEnableCsrfCookie(boolean $value) Sets $enableCsrfCookie - whether to use cookie to persist CSRF token.
 * @method static setEnableCsrfValidation(boolean $value) Sets $enableCsrfValidation - whether to enable CSRF (Cross-Site Request Forgery) validation.
 * @method static setMethodParam(string $value) Sets $methodParam - the name of the POST parameter that is used to indicate if a request is a PUT, PATCH or DELETE request tunneled through POST.
 * @method static setParsers(array $value) Sets $parsers - the parsers for converting the raw HTTP request body into [[bodyParams]].
 * @method static boolean validateCsrfToken(string $token = null) Performs the CSRF validation.
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
