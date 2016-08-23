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
 * User facade.
 *
 * Facades Yii::$app->get('user') component.
 *
 * @see \yii\web\User
 * @method static \yii\base\Behavior attachBehavior(string $name, string|array|\yii\base\Behavior $behavior) Attaches a behavior to this component.
 * @method static attachBehaviors(array $behaviors) Attaches a list of behaviors to the component.
 * @method static array behaviors() Returns a list of behaviors that this component should behave as.
 * @method static bool can(string $permissionName, array $params = [], bool $allowCaching = true) Checks if the user can perform the operation as specified by the given permission.
 * @method static null|\yii\base\Behavior detachBehavior(string $name) Detaches a behavior from the component.
 * @method static detachBehaviors() Detaches all behaviors from the component.
 * @method static ensureBehaviors() Makes sure that the behaviors declared in [[behaviors()]] are attached to this component.
 * @method static int getAbsoluteAuthTimeout() Returns the number of seconds in which the user will be logged out automatically regardless of activity.
 * @method static string getAbsoluteAuthTimeoutParam() Returns the session variable name used to store the value of absolute expiration timestamp of the authenticated state.
 * @method static array getAcceptableRedirectTypes() Returns MIME types for which this component should redirect to the [[loginUrl]].
 * @method static \yii\rbac\CheckAccessInterface getAccessChecker() Returns The acess checker to use for checking access.
 * @method static int getAuthTimeout() Returns the number of seconds in which the user will be logged out automatically if he remains inactive.
 * @method static string getAuthTimeoutParam() Returns the session variable name used to store the value of expiration timestamp of the authenticated state.
 * @method static bool getAutoRenewCookie() Returns whether to automatically renew the identity cookie each time a page is requested.
 * @method static null|\yii\base\Behavior getBehavior(string $name) Returns the named behavior object.
 * @method static \yii\base\Behavior[] getBehaviors() Returns all behaviors attached to this component.
 * @method static bool getEnableAutoLogin() Returns whether to enable cookie-based login.
 * @method static bool getEnableSession() Returns whether to use session to persist authentication status across multiple requests.
 * @method static string|int getId() Returns a value that uniquely represents the user.
 * @method static string getIdParam() Returns the session variable name used to store the value of [[id]].
 * @method static \yii\web\IdentityInterface|null getIdentity(bool $autoRenew = true) Returns the identity object associated with the currently logged-in user.
 * @method static string getIdentityClass() Returns the class name of the [[identity]] object.
 * @method static array getIdentityCookie() Returns the configuration of the identity cookie.
 * @method static bool getIsGuest() Returns a value indicating whether the user is a guest (not authenticated).
 * @method static string|array getLoginUrl() Returns the URL for login when [[loginRequired()]] is called.
 * @method static string getReturnUrl(string|array $defaultUrl = null) Returns the URL that the browser should be redirected to after successful login.
 * @method static string getReturnUrlParam() Returns the session variable name used to store the value of [[returnUrl]].
 * @method static bool hasEventHandlers(string $name) Returns a value indicating whether there is any handler attached to the named event.
 * @method static bool login(\yii\web\IdentityInterface $identity, int $duration = 0) Logs in a user.
 * @method static \yii\web\IdentityInterface|null loginByAccessToken(string $token, mixed $type = null) Logs in a user by the given access token.
 * @method static \yii\web\Response loginRequired(bool $checkAjax = true, bool $checkAcceptHeader = true) Redirects the user browser to the login page.
 * @method static bool logout(bool $destroySession = true) Logs out the current user.
 * @method static bool off(string $name, callable $handler = null) Detaches an existing event handler from this component.
 * @method static on(string $name, callable $handler, mixed $data = null, bool $append = true) Attaches an event handler to an event.
 * @method static setAbsoluteAuthTimeout(int $value) Sets the number of seconds in which the user will be logged out automatically regardless of activity.
 * @method static setAbsoluteAuthTimeoutParam(string $value) Sets the session variable name used to store the value of absolute expiration timestamp of the authenticated state.
 * @method static setAcceptableRedirectTypes(array $value) Sets MIME types for which this component should redirect to the [[loginUrl]].
 * @method static setAccessChecker(\yii\rbac\CheckAccessInterface $value) Sets The acess checker to use for checking access.
 * @method static setAuthTimeout(int $value) Sets the number of seconds in which the user will be logged out automatically if he remains inactive.
 * @method static setAuthTimeoutParam(string $value) Sets the session variable name used to store the value of expiration timestamp of the authenticated state.
 * @method static setAutoRenewCookie(bool $value) Sets whether to automatically renew the identity cookie each time a page is requested.
 * @method static setEnableAutoLogin(bool $value) Sets whether to enable cookie-based login.
 * @method static setEnableSession(bool $value) Sets whether to use session to persist authentication status across multiple requests.
 * @method static setIdParam(string $value) Sets the session variable name used to store the value of [[id]].
 * @method static setIdentity(\yii\web\IdentityInterface|null $identity) Sets the user identity object.
 * @method static setIdentityClass(string $value) Sets the class name of the [[identity]] object.
 * @method static setIdentityCookie(array $value) Sets the configuration of the identity cookie.
 * @method static setLoginUrl(string|array $value) Sets the URL for login when [[loginRequired()]] is called.
 * @method static setReturnUrl(string|array $url) Remembers the URL in the session so that it can be retrieved back later by [[getReturnUrl()]].
 * @method static setReturnUrlParam(string $value) Sets the session variable name used to store the value of [[returnUrl]].
 * @method static switchIdentity(\yii\web\IdentityInterface|null $identity, int $duration = 0) Switches to a new identity for the current user.
 * @method static trigger(string $name, \yii\base\Event $event = null) Triggers an event.
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
