<?php

namespace sergeymakinen\facades;

/** @noinspection PhpUnnecessaryFullyQualifiedNameInspection */
/**
 * Security facade.
 *
 * @method static boolean compareString(string $expected, string $actual) Performs string comparison using timing attack resistant approach.
 * @method static boolean|string decryptByKey(string $data, string $inputKey, string $info = null) Verifies and decrypts data encrypted with [[encryptByPassword()]].
 * @method static boolean|string decryptByPassword(string $data, string $password) Verifies and decrypts data encrypted with [[encryptByPassword()]].
 * @method static string encryptByKey(string $data, string $inputKey, string $info = null) Encrypts data using a cryptographic key.
 * @method static string encryptByPassword(string $data, string $password) Encrypts data using a password.
 * @method static string generatePasswordHash(string $password, integer $cost = null) Generates a secure hash from a password and a random salt.
 * @method static string generateRandomKey(integer $length = 32) Generates specified number of random bytes.
 * @method static string generateRandomString(integer $length = 32) Generates a random string of specified length.
 * @method static array getAllowedCiphers() Returns $allowedCiphers. The value is an array of two integers, the first is the cipher's block size in bytes and the second is
     * the key size in bytes.
 * @method static string getAuthKeyInfo() Returns $authKeyInfo - HKDF info value for derivation of message authentication key.
 * @method static string getCipher() Returns $cipher - The cipher to use for encryption and decryption.
 * @method static integer getDerivationIterations() Returns $derivationIterations - derivation iterations count.
 * @method static string getKdfHash() Returns $kdfHash - Hash algorithm for key derivation.
 * @method static string getMacHash() Returns $macHash - Hash algorithm for message authentication.
 * @method static integer getPasswordHashCost() Returns $passwordHashCost - Default cost used for password hashing.
 * @method static string getPasswordHashStrategy() Returns $passwordHashStrategy - strategy, which should be used to generate password hash.
 * @method static string hashData(string $data, string $key, boolean $rawHash = false) Prefixes data with a keyed hash value so that it can later be detected if it is tampered.
 * @method static string hkdf(string $algo, string $inputKey, string $salt = null, string $info = null, integer $length = 0) Derives a key from the given input key using the standard HKDF algorithm.
 * @method static string pbkdf2(string $algo, string $password, string $salt, integer $iterations, integer $length = 0) Derives a key from the given password using the standard PBKDF2 algorithm.
 * @method static setAllowedCiphers(array $value) Sets $allowedCiphers. The value is an array of two integers, the first is the cipher's block size in bytes and the second is
     * the key size in bytes.
 * @method static setAuthKeyInfo(string $value) Sets $authKeyInfo - HKDF info value for derivation of message authentication key.
 * @method static setCipher(string $value) Sets $cipher - The cipher to use for encryption and decryption.
 * @method static setDerivationIterations(integer $value) Sets $derivationIterations - derivation iterations count.
 * @method static setKdfHash(string $value) Sets $kdfHash - Hash algorithm for key derivation.
 * @method static setMacHash(string $value) Sets $macHash - Hash algorithm for message authentication.
 * @method static setPasswordHashCost(integer $value) Sets $passwordHashCost - Default cost used for password hashing.
 * @method static setPasswordHashStrategy(string $value) Sets $passwordHashStrategy - strategy, which should be used to generate password hash.
 * @method static string validateData(string $data, string $key, boolean $rawHash = false) Validates if the given data is tampered.
 * @method static boolean validatePassword(string $password, string $hash) Verifies a password against a hash.
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
