<?php

namespace sergeymakinen\facades;

/** @noinspection PhpUnnecessaryFullyQualifiedNameInspection */
/**
 * User facade.
 *
 * @method static boolean can(string $permissionName, array $params = [], boolean $allowCaching = true) Checks if the user can perform the operation as specified by the given permission.
 * @method static string|integer getId() Returns a value that uniquely represents the user.
 * @method static \yii\web\IdentityInterface|null getIdentity(boolean $autoRenew = true) Returns the identity object associated with the currently logged-in user.
 * @method static boolean getIsGuest() Returns a value indicating whether the user is a guest (not authenticated).
 * @method static string getReturnUrl(string|array $defaultUrl = null) Returns the URL that the browser should be redirected to after successful login.
 * @method static integer getAbsoluteAuthTimeout() Returns $absoluteAuthTimeout - the number of seconds in which the user will be logged out automatically regardless of activity.
 * @method static string getAbsoluteAuthTimeoutParam() Returns $absoluteAuthTimeoutParam - the session variable name used to store the value of absolute expiration timestamp of the authenticated state.
 * @method static array getAcceptableRedirectTypes() Returns $acceptableRedirectTypes - MIME types for which this component should redirect to the [[loginUrl]].
 * @method static \yii\rbac\CheckAccessInterface getAccessChecker() Returns $accessChecker - The acess checker to use for checking access.
 * @method static integer getAuthTimeout() Returns $authTimeout - the number of seconds in which the user will be logged out automatically if he remains inactive.
 * @method static string getAuthTimeoutParam() Returns $authTimeoutParam - the session variable name used to store the value of expiration timestamp of the authenticated state.
 * @method static boolean getAutoRenewCookie() Returns $autoRenewCookie - whether to automatically renew the identity cookie each time a page is requested.
 * @method static boolean getEnableAutoLogin() Returns $enableAutoLogin - whether to enable cookie-based login.
 * @method static boolean getEnableSession() Returns $enableSession - whether to use session to persist authentication status across multiple requests.
 * @method static string getIdParam() Returns $idParam - the session variable name used to store the value of [[id]].
 * @method static string getIdentityClass() Returns $identityClass - the class name of the [[identity]] object.
 * @method static array getIdentityCookie() Returns $identityCookie - the configuration of the identity cookie.
 * @method static string|array getLoginUrl() Returns $loginUrl - the URL for login when [[loginRequired()]] is called.
 * @method static string getReturnUrlParam() Returns $returnUrlParam - the session variable name used to store the value of [[returnUrl]].
 * @method static boolean login(\yii\web\IdentityInterface $identity, integer $duration = 0) Logs in a user.
 * @method static \yii\web\IdentityInterface|null loginByAccessToken(string $token, mixed $type = null) Logs in a user by the given access token.
 * @method static \yii\web\Response loginRequired(boolean $checkAjax = true, boolean $checkAcceptHeader = true) Redirects the user browser to the login page.
 * @method static boolean logout(boolean $destroySession = true) Logs out the current user.
 * @method static setIdentity(\yii\web\IdentityInterface|null $identity) Sets the user identity object.
 * @method static setReturnUrl(string|array $url) Remembers the URL in the session so that it can be retrieved back later by [[getReturnUrl()]].
 * @method static setAbsoluteAuthTimeout(integer $value) Sets $absoluteAuthTimeout - the number of seconds in which the user will be logged out automatically regardless of activity.
 * @method static setAbsoluteAuthTimeoutParam(string $value) Sets $absoluteAuthTimeoutParam - the session variable name used to store the value of absolute expiration timestamp of the authenticated state.
 * @method static setAcceptableRedirectTypes(array $value) Sets $acceptableRedirectTypes - MIME types for which this component should redirect to the [[loginUrl]].
 * @method static setAccessChecker(\yii\rbac\CheckAccessInterface $value) Sets $accessChecker - The acess checker to use for checking access.
 * @method static setAuthTimeout(integer $value) Sets $authTimeout - the number of seconds in which the user will be logged out automatically if he remains inactive.
 * @method static setAuthTimeoutParam(string $value) Sets $authTimeoutParam - the session variable name used to store the value of expiration timestamp of the authenticated state.
 * @method static setAutoRenewCookie(boolean $value) Sets $autoRenewCookie - whether to automatically renew the identity cookie each time a page is requested.
 * @method static setEnableAutoLogin(boolean $value) Sets $enableAutoLogin - whether to enable cookie-based login.
 * @method static setEnableSession(boolean $value) Sets $enableSession - whether to use session to persist authentication status across multiple requests.
 * @method static setIdParam(string $value) Sets $idParam - the session variable name used to store the value of [[id]].
 * @method static setIdentityClass(string $value) Sets $identityClass - the class name of the [[identity]] object.
 * @method static setIdentityCookie(array $value) Sets $identityCookie - the configuration of the identity cookie.
 * @method static setLoginUrl(string|array $value) Sets $loginUrl - the URL for login when [[loginRequired()]] is called.
 * @method static setReturnUrlParam(string $value) Sets $returnUrlParam - the session variable name used to store the value of [[returnUrl]].
 * @method static switchIdentity(\yii\web\IdentityInterface|null $identity, integer $duration = 0) Switches to a new identity for the current user.
 */
class User extends Facade
{
    /**
     * @inheritdoc
     */
    public static function getFacadeComponentId()
    {
        return 'user';
    }
}
