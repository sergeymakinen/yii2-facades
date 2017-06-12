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
 * Yii::$app->get('user') facade.
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
 * @method static bool can(string $permissionName, array $params = [], bool $allowCaching = true) Checks if the user can perform the operation as specified by the given permission.
 * @see \yii\web\User::can
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
 * @method static string|int getId() Returns a value that uniquely represents the user.
 * @see \yii\web\User::getId
 *
 * @method static \yii\web\IdentityInterface|null getIdentity(bool $autoRenew = true) Returns the identity object associated with the currently logged-in user.
 * @see \yii\web\User::getIdentity
 *
 * @method static bool getIsGuest() Returns a value indicating whether the user is a guest (not authenticated).
 * @see \yii\web\User::getIsGuest
 *
 * @method static string getReturnUrl(string|array $defaultUrl = null) Returns the URL that the browser should be redirected to after successful login.
 * @see \yii\web\User::getReturnUrl
 *
 * @method static bool hasEventHandlers(string $name) Returns a value indicating whether there is any handler attached to the named event.
 * @see \yii\base\Component::hasEventHandlers
 *
 * @method static bool login(\yii\web\IdentityInterface $identity, int $duration = 0) Logs in a user.
 * @see \yii\web\User::login
 *
 * @method static \yii\web\IdentityInterface|null loginByAccessToken(string $token, mixed $type = null) Logs in a user by the given access token.
 * @see \yii\web\User::loginByAccessToken
 *
 * @method static \yii\web\Response loginRequired(bool $checkAjax = true, bool $checkAcceptHeader = true) Redirects the user browser to the login page.
 * @see \yii\web\User::loginRequired
 *
 * @method static bool logout(bool $destroySession = true) Logs out the current user.
 * @see \yii\web\User::logout
 *
 * @method static bool off(string $name, callable $handler = null) Detaches an existing event handler from this component.
 * @see \yii\base\Component::off
 *
 * @method static void on(string $name, callable $handler, mixed $data = null, bool $append = true) Attaches an event handler to an event.
 * @see \yii\base\Component::on
 *
 * @method static void setIdentity(\yii\web\IdentityInterface|null $identity) Sets the user identity object.
 * @see \yii\web\User::setIdentity
 *
 * @method static void setReturnUrl(string|array $url) Remembers the URL in the session so that it can be retrieved back later by [[getReturnUrl()]].
 * @see \yii\web\User::setReturnUrl
 *
 * @method static void switchIdentity(\yii\web\IdentityInterface|null $identity, int $duration = 0) Switches to a new identity for the current user.
 * @see \yii\web\User::switchIdentity
 *
 * @method static void trigger(string $name, \yii\base\Event $event = null) Triggers an event.
 * @see \yii\base\Component::trigger
 *
 * Property accessors
 *
 * @method static int getAbsoluteAuthTimeout() Returns the number of seconds in which the user will be logged out automatically regardless of activity.
 * @see \yii\web\User::absoluteAuthTimeout
 *
 * @method static string getAbsoluteAuthTimeoutParam() Returns the session variable name used to store the value of absolute expiration timestamp of the authenticated state.
 * @see \yii\web\User::absoluteAuthTimeoutParam
 *
 * @method static array getAcceptableRedirectTypes() Returns MIME types for which this component should redirect to the [[loginUrl]].
 * @see \yii\web\User::acceptableRedirectTypes
 *
 * @method static \yii\rbac\CheckAccessInterface getAccessChecker() Returns The access checker to use for checking access.
 * @see \yii\web\User::accessChecker
 *
 * @method static int getAuthTimeout() Returns the number of seconds in which the user will be logged out automatically if he remains inactive.
 * @see \yii\web\User::authTimeout
 *
 * @method static string getAuthTimeoutParam() Returns the session variable name used to store the value of expiration timestamp of the authenticated state.
 * @see \yii\web\User::authTimeoutParam
 *
 * @method static bool getAutoRenewCookie() Returns whether to automatically renew the identity cookie each time a page is requested.
 * @see \yii\web\User::autoRenewCookie
 *
 * @method static bool getEnableAutoLogin() Returns whether to enable cookie-based login.
 * @see \yii\web\User::enableAutoLogin
 *
 * @method static bool getEnableSession() Returns whether to use session to persist authentication status across multiple requests.
 * @see \yii\web\User::enableSession
 *
 * @method static string getIdParam() Returns the session variable name used to store the value of [[id]].
 * @see \yii\web\User::idParam
 *
 * @method static string getIdentityClass() Returns the class name of the [[identity]] object.
 * @see \yii\web\User::identityClass
 *
 * @method static array getIdentityCookie() Returns the configuration of the identity cookie.
 * @see \yii\web\User::identityCookie
 *
 * @method static string|array getLoginUrl() Returns the URL for login when [[loginRequired()]] is called.
 * @see \yii\web\User::loginUrl
 *
 * @method static string getReturnUrlParam() Returns the session variable name used to store the value of [[returnUrl]].
 * @see \yii\web\User::returnUrlParam
 *
 * @method static void setAbsoluteAuthTimeout(int $value) Sets the number of seconds in which the user will be logged out automatically regardless of activity.
 * @see \yii\web\User::absoluteAuthTimeout
 *
 * @method static void setAbsoluteAuthTimeoutParam(string $value) Sets the session variable name used to store the value of absolute expiration timestamp of the authenticated state.
 * @see \yii\web\User::absoluteAuthTimeoutParam
 *
 * @method static void setAcceptableRedirectTypes(array $value) Sets MIME types for which this component should redirect to the [[loginUrl]].
 * @see \yii\web\User::acceptableRedirectTypes
 *
 * @method static void setAccessChecker(\yii\rbac\CheckAccessInterface $value) Sets The access checker to use for checking access.
 * @see \yii\web\User::accessChecker
 *
 * @method static void setAuthTimeout(int $value) Sets the number of seconds in which the user will be logged out automatically if he remains inactive.
 * @see \yii\web\User::authTimeout
 *
 * @method static void setAuthTimeoutParam(string $value) Sets the session variable name used to store the value of expiration timestamp of the authenticated state.
 * @see \yii\web\User::authTimeoutParam
 *
 * @method static void setAutoRenewCookie(bool $value) Sets whether to automatically renew the identity cookie each time a page is requested.
 * @see \yii\web\User::autoRenewCookie
 *
 * @method static void setEnableAutoLogin(bool $value) Sets whether to enable cookie-based login.
 * @see \yii\web\User::enableAutoLogin
 *
 * @method static void setEnableSession(bool $value) Sets whether to use session to persist authentication status across multiple requests.
 * @see \yii\web\User::enableSession
 *
 * @method static void setIdParam(string $value) Sets the session variable name used to store the value of [[id]].
 * @see \yii\web\User::idParam
 *
 * @method static void setIdentityClass(string $value) Sets the class name of the [[identity]] object.
 * @see \yii\web\User::identityClass
 *
 * @method static void setIdentityCookie(array $value) Sets the configuration of the identity cookie.
 * @see \yii\web\User::identityCookie
 *
 * @method static void setLoginUrl(string|array $value) Sets the URL for login when [[loginRequired()]] is called.
 * @see \yii\web\User::loginUrl
 *
 * @method static void setReturnUrlParam(string $value) Sets the session variable name used to store the value of [[returnUrl]].
 * @see \yii\web\User::returnUrlParam
 */
class User extends Facade
{
    /**
     * @inheritDoc
     */
    public static function getFacadeComponentId()
    {
        return 'user';
    }
}
