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
 * Security facade.
 *
 * Facades Yii::$app->get('security') component.
 *
 * @see \yii\base\Security
 * @method static \yii\base\Behavior attachBehavior(string $name, string|array|\yii\base\Behavior $behavior) Attaches a behavior to this component.
 * @method static attachBehaviors(array $behaviors) Attaches a list of behaviors to the component.
 * @method static array behaviors() Returns a list of behaviors that this component should behave as.
 * @method static bool compareString($expected, string $actual) Performs string comparison using timing attack resistant approach.
 * @method static bool|string decryptByKey(string $data, string $inputKey, string $info = null) Verifies and decrypts data encrypted with [[encryptByPassword()]].
 * @method static bool|string decryptByPassword(string $data, string $password) Verifies and decrypts data encrypted with [[encryptByPassword()]].
 * @method static null|\yii\base\Behavior detachBehavior(string $name) Detaches a behavior from the component.
 * @method static detachBehaviors() Detaches all behaviors from the component.
 * @method static string encryptByKey(string $data, string $inputKey, string $info = null) Encrypts data using a cryptographic key.
 * @method static string encryptByPassword(string $data, string $password) Encrypts data using a password.
 * @method static ensureBehaviors() Makes sure that the behaviors declared in [[behaviors()]] are attached to this component.
 * @method static string generatePasswordHash(string $password, int $cost = null) Generates a secure hash from a password and a random salt.
 * @method static string generateRandomKey(int $length = 32) Generates specified number of random bytes.
 * @method static string generateRandomString(int $length = 32) Generates a random string of specified length.
 * @method static array[] getAllowedCiphers() Returns Look-up table of block sizes and key sizes for each supported OpenSSL cipher.
 * @method static string getAuthKeyInfo() Returns HKDF info value for derivation of message authentication key.
 * @method static null|\yii\base\Behavior getBehavior(string $name) Returns the named behavior object.
 * @method static \yii\base\Behavior[] getBehaviors() Returns all behaviors attached to this component.
 * @method static string getCipher() Returns The cipher to use for encryption and decryption.
 * @method static int getDerivationIterations() Returns derivation iterations count.
 * @method static string getKdfHash() Returns Hash algorithm for key derivation.
 * @method static string getMacHash() Returns Hash algorithm for message authentication.
 * @method static int getPasswordHashCost() Returns Default cost used for password hashing.
 * @method static string getPasswordHashStrategy() Returns strategy, which should be used to generate password hash.
 * @method static bool hasEventHandlers(string $name) Returns a value indicating whether there is any handler attached to the named event.
 * @method static string hashData(string $data, string $key, bool $rawHash = false) Prefixes data with a keyed hash value so that it can later be detected if it is tampered.
 * @method static string hkdf(string $algo, string $inputKey, string $salt = null, string $info = null, int $length = 0) Derives a key from the given input key using the standard HKDF algorithm.
 * @method static bool off(string $name, callable $handler = null) Detaches an existing event handler from this component.
 * @method static on(string $name, callable $handler, mixed $data = null, bool $append = true) Attaches an event handler to an event.
 * @method static string pbkdf2(string $algo, string $password, string $salt, int $iterations, int $length = 0) Derives a key from the given password using the standard PBKDF2 algorithm.
 * @method static setAllowedCiphers(array[] $value) Sets Look-up table of block sizes and key sizes for each supported OpenSSL cipher.
 * @method static setAuthKeyInfo(string $value) Sets HKDF info value for derivation of message authentication key.
 * @method static setCipher(string $value) Sets The cipher to use for encryption and decryption.
 * @method static setDerivationIterations(int $value) Sets derivation iterations count.
 * @method static setKdfHash(string $value) Sets Hash algorithm for key derivation.
 * @method static setMacHash(string $value) Sets Hash algorithm for message authentication.
 * @method static setPasswordHashCost(int $value) Sets Default cost used for password hashing.
 * @method static setPasswordHashStrategy(string $value) Sets strategy, which should be used to generate password hash.
 * @method static trigger(string $name, \yii\base\Event $event = null) Triggers an event.
 * @method static string validateData(string $data, string $key, bool $rawHash = false) Validates if the given data is tampered.
 * @method static bool validatePassword(string $password, string $hash) Verifies a password against a hash.
 */
class Security extends Facade
{
    /**
     * @inheritdoc
     */
    public static function getFacadeComponentId()
    {
        return 'security';
    }
}
