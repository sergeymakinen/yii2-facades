<?php

namespace sergeymakinen\facades;

/** @noinspection PhpUnnecessaryFullyQualifiedNameInspection */
/**
 * Cache facade.
 *
 * @method static boolean add(mixed $key, mixed $value, integer $duration = 0, \yii\caching\Dependency $dependency = null) Stores a value identified by a key into cache if the cache does not contain this key.
 * @method static string buildKey(mixed $key) Builds a normalized cache key from a given key.
 * @method static boolean delete(mixed $key) Deletes a value with the specified key from cache
 * @method static boolean exists(mixed $key) Checks whether a specified key exists in the cache.
 * @method static boolean flush() Deletes all values from cache.
 * @method static mixed get(mixed $key) Retrieves a value from cache with a specified key.
 * @method static boolean madd(array $items, integer $duration = 0, \yii\caching\Dependency $dependency = null) Stores multiple items in cache. Each item contains a value identified by a key.
 * @method static array mget($keys) Retrieves multiple values from cache with the specified keys.
 * @method static boolean mset(array $items, integer $duration = 0, \yii\caching\Dependency $dependency = null) Stores multiple items in cache. Each item contains a value identified by a key.
 * @method static boolean multiAdd(array $items, integer $duration = 0, \yii\caching\Dependency $dependency = null) Stores multiple items in cache. Each item contains a value identified by a key.
 * @method static array multiGet($keys) Retrieves multiple values from cache with the specified keys.
 * @method static boolean multiSet(array $items, integer $duration = 0, \yii\caching\Dependency $dependency = null) Stores multiple items in cache. Each item contains a value identified by a key.
 * @method static boolean offsetExists(string $key) Returns whether there is a cache entry with a specified key.
 * @method static mixed offsetGet(string $key) Retrieves the value from cache with a specified key.
 * @method static offsetSet(string $key, mixed $value) Stores the value identified by a key into cache.
 * @method static offsetUnset(string $key) Deletes the value with the specified key from cache
 * @method static boolean set(mixed $key, mixed $value, integer $duration = 0, \yii\caching\Dependency $dependency = null) Stores a value identified by a key into cache.
 */
class Cache extends Facade
{
    /**
     * @inheritdoc
     */
    public static function getFacadeComponentId()
    {
        return 'cache';
    }
}
