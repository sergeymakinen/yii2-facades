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
 * Yii::$app->get('security') facade.
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
 * @method static bool compareString($expected, string $actual) Performs string comparison using timing attack resistant approach.
 * @see \yii\base\Security::compareString
 *
 * @method static bool|string decryptByKey(string $data, string $inputKey, string $info = null) Verifies and decrypts data encrypted with [[encryptByKey()]].
 * @see \yii\base\Security::decryptByKey
 *
 * @method static bool|string decryptByPassword(string $data, string $password) Verifies and decrypts data encrypted with [[encryptByPassword()]].
 * @see \yii\base\Security::decryptByPassword
 *
 * @method static null|\yii\base\Behavior detachBehavior(string $name) Detaches a behavior from the component.
 * @see \yii\base\Component::detachBehavior
 *
 * @method static void detachBehaviors() Detaches all behaviors from the component.
 * @see \yii\base\Component::detachBehaviors
 *
 * @method static string encryptByKey(string $data, string $inputKey, string $info = null) Encrypts data using a cryptographic key.
 * @see \yii\base\Security::encryptByKey
 *
 * @method static string encryptByPassword(string $data, string $password) Encrypts data using a password.
 * @see \yii\base\Security::encryptByPassword
 *
 * @method static void ensureBehaviors() Makes sure that the behaviors declared in [[behaviors()]] are attached to this component.
 * @see \yii\base\Component::ensureBehaviors
 *
 * @method static string generatePasswordHash(string $password, int $cost = null) Generates a secure hash from a password and a random salt.
 * @see \yii\base\Security::generatePasswordHash
 *
 * @method static string generateRandomKey(int $length = 32) Generates specified number of random bytes.
 * @see \yii\base\Security::generateRandomKey
 *
 * @method static string generateRandomString(int $length = 32) Generates a random string of specified length.
 * @see \yii\base\Security::generateRandomString
 *
 * @method static null|\yii\base\Behavior getBehavior(string $name) Returns the named behavior object.
 * @see \yii\base\Component::getBehavior
 *
 * @method static \yii\base\Behavior[] getBehaviors() Returns all behaviors attached to this component.
 * @see \yii\base\Component::getBehaviors
 *
 * @method static bool hasEventHandlers(string $name) Returns a value indicating whether there is any handler attached to the named event.
 * @see \yii\base\Component::hasEventHandlers
 *
 * @method static string hashData(string $data, string $key, bool $rawHash = false) Prefixes data with a keyed hash value so that it can later be detected if it is tampered.
 * @see \yii\base\Security::hashData
 *
 * @method static string hkdf(string $algo, string $inputKey, string $salt = null, string $info = null, int $length = 0) Derives a key from the given input key using the standard HKDF algorithm.
 * @see \yii\base\Security::hkdf
 *
 * @method static string maskToken(string $token) Masks a token to make it uncompressible.
 * @see \yii\base\Security::maskToken
 *
 * @method static bool off(string $name, callable $handler = null) Detaches an existing event handler from this component.
 * @see \yii\base\Component::off
 *
 * @method static void on(string $name, callable $handler, mixed $data = null, bool $append = true) Attaches an event handler to an event.
 * @see \yii\base\Component::on
 *
 * @method static string pbkdf2(string $algo, string $password, string $salt, int $iterations, int $length = 0) Derives a key from the given password using the standard PBKDF2 algorithm.
 * @see \yii\base\Security::pbkdf2
 *
 * @method static void trigger(string $name, \yii\base\Event $event = null) Triggers an event.
 * @see \yii\base\Component::trigger
 *
 * @method static string unmaskToken(string $maskedToken) Unmasks a token previously masked by `maskToken`.
 * @see \yii\base\Security::unmaskToken
 *
 * @method static string|bool validateData(string $data, string $key, bool $rawHash = false) Validates if the given data is tampered.
 * @see \yii\base\Security::validateData
 *
 * @method static bool validatePassword(string $password, string $hash) Verifies a password against a hash.
 * @see \yii\base\Security::validatePassword
 *
 * Property accessors
 *
 * @method static array[] getAllowedCiphers() Returns Look-up table of block sizes and key sizes for each supported OpenSSL cipher.
 * @see \yii\base\Security::allowedCiphers
 *
 * @method static string getAuthKeyInfo() Returns HKDF info value for derivation of message authentication key.
 * @see \yii\base\Security::authKeyInfo
 *
 * @method static string getCipher() Returns The cipher to use for encryption and decryption.
 * @see \yii\base\Security::cipher
 *
 * @method static int getDerivationIterations() Returns derivation iterations count.
 * @see \yii\base\Security::derivationIterations
 *
 * @method static string getKdfHash() Returns Hash algorithm for key derivation.
 * @see \yii\base\Security::kdfHash
 *
 * @method static string getMacHash() Returns Hash algorithm for message authentication.
 * @see \yii\base\Security::macHash
 *
 * @method static int getPasswordHashCost() Returns Default cost used for password hashing.
 * @see \yii\base\Security::passwordHashCost
 *
 * @method static string getPasswordHashStrategy() Returns strategy, which should be used to generate password hash.
 * @see \yii\base\Security::passwordHashStrategy
 *
 * @method static void setAllowedCiphers(array[] $value) Sets Look-up table of block sizes and key sizes for each supported OpenSSL cipher.
 * @see \yii\base\Security::allowedCiphers
 *
 * @method static void setAuthKeyInfo(string $value) Sets HKDF info value for derivation of message authentication key.
 * @see \yii\base\Security::authKeyInfo
 *
 * @method static void setCipher(string $value) Sets The cipher to use for encryption and decryption.
 * @see \yii\base\Security::cipher
 *
 * @method static void setDerivationIterations(int $value) Sets derivation iterations count.
 * @see \yii\base\Security::derivationIterations
 *
 * @method static void setKdfHash(string $value) Sets Hash algorithm for key derivation.
 * @see \yii\base\Security::kdfHash
 *
 * @method static void setMacHash(string $value) Sets Hash algorithm for message authentication.
 * @see \yii\base\Security::macHash
 *
 * @method static void setPasswordHashCost(int $value) Sets Default cost used for password hashing.
 * @see \yii\base\Security::passwordHashCost
 *
 * @method static void setPasswordHashStrategy(string $value) Sets strategy, which should be used to generate password hash.
 * @see \yii\base\Security::passwordHashStrategy
 */
class Security extends Facade
{
    /**
     * @inheritDoc
     */
    public static function getFacadeComponentId()
    {
        return 'security';
    }
}
