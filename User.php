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
 * @method static boolean login(\yii\web\IdentityInterface $identity, integer $duration = 0) Logs in a user.
 * @method static \yii\web\IdentityInterface|null loginByAccessToken(string $token, mixed $type = null) Logs in a user by the given access token.
 * @method static \yii\web\Response loginRequired(boolean $checkAjax = true, boolean $checkAcceptHeader = true) Redirects the user browser to the login page.
 * @method static boolean logout(boolean $destroySession = true) Logs out the current user.
 * @method static setIdentity(\yii\web\IdentityInterface|null $identity) Sets the user identity object.
 * @method static setReturnUrl(string|array $url) Remembers the URL in the session so that it can be retrieved back later by [[getReturnUrl()]].
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
