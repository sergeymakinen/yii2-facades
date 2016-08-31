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
 * Cache facade.
 *
 * Facades Yii::$app->get('cache') component.
 *
 * @see \yii\caching\Cache
 * @method static bool add(mixed $key, mixed $value, int $duration = 0, \yii\caching\Dependency $dependency = null) Stores a value identified by a key into cache if the cache does not contain this key.
 * @method static \yii\base\Behavior attachBehavior(string $name, string|array|\yii\base\Behavior $behavior) Attaches a behavior to this component.
 * @method static attachBehaviors(array $behaviors) Attaches a list of behaviors to the component.
 * @method static array behaviors() Returns a list of behaviors that this component should behave as.
 * @method static string buildKey(mixed $key) Builds a normalized cache key from a given key.
 * @method static bool delete(mixed $key) Deletes a value with the specified key from cache.
 * @method static null|\yii\base\Behavior detachBehavior(string $name) Detaches a behavior from the component.
 * @method static detachBehaviors() Detaches all behaviors from the component.
 * @method static ensureBehaviors() Makes sure that the behaviors declared in [[behaviors()]] are attached to this component.
 * @method static bool exists(mixed $key) Checks whether a specified key exists in the cache.
 * @method static bool flush() Deletes all values from cache.
 * @method static null|\yii\base\Behavior getBehavior(string $name) Returns the named behavior object.
 * @method static \yii\base\Behavior[] getBehaviors() Returns all behaviors attached to this component.
 * @method static string getKeyPrefix() Returns a string prefixed to every cache key so that it is unique globally in the whole cache storage.
 * @method static array|bool getSerializer() Returns the functions used to serialize and unserialize cached data.
 * @method static bool hasEventHandlers(string $name) Returns a value indicating whether there is any handler attached to the named event.
 * @method static bool madd(array $items, int $duration = 0, \yii\caching\Dependency $dependency = null) Stores multiple items in cache.
 * @method static array mget(string[] $keys) Retrieves multiple values from cache with the specified keys.
 * @method static bool mset(array $items, int $duration = 0, \yii\caching\Dependency $dependency = null) Stores multiple items in cache.
 * @method static bool multiAdd(array $items, int $duration = 0, \yii\caching\Dependency $dependency = null) Stores multiple items in cache.
 * @method static array multiGet(string[] $keys) Retrieves multiple values from cache with the specified keys.
 * @method static bool multiSet(array $items, int $duration = 0, \yii\caching\Dependency $dependency = null) Stores multiple items in cache.
 * @method static bool off(string $name, callable $handler = null) Detaches an existing event handler from this component.
 * @method static on(string $name, callable $handler, mixed $data = null, bool $append = true) Attaches an event handler to an event.
 * @method static bool set(mixed $key, mixed $value, int $duration = 0, \yii\caching\Dependency $dependency = null) Stores a value identified by a key into cache.
 * @method static setKeyPrefix(string $value) Sets a string prefixed to every cache key so that it is unique globally in the whole cache storage.
 * @method static setSerializer(array|bool $value) Sets the functions used to serialize and unserialize cached data.
 * @method static trigger(string $name, \yii\base\Event $event = null) Triggers an event.
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

    /**
     * Retrieves a value from cache (or stores it if it's not cached) with a specified key.
     * If the cache already contains such a key, it will be returned, else the default value
     * will be stored in the cache and returned.
     *
     * @param mixed $key a key identifying the cached value. This can be a simple string or
     * a complex data structure consisting of factors representing the key.
     * @param callable|mixed $default the value to be cached and retrieved if some value is not already in the cache. This can also be
     * any callable function that will recieve the key and should return a value.
     * @param int $duration the number of seconds in which the cached value will expire. 0 means never expire.
     * @param \yii\caching\Dependency $dependency dependency of the cached item. If the dependency changes,
     * the corresponding value in the cache will be invalidated when it is fetched via [[get()]].
     * This parameter is ignored if [[serializer]] is false.
     *
     * @return bool whether the value is successfully stored into cache.
     */
    public static function cache($key, $default, $duration = 0, $dependency = null)
    {
        /**
         * @var \yii\caching\Cache $cache
         */
        $cache = static::getFacadeComponent();
        $value = $cache->get($key);
        if ($value === false) {
            if ($default instanceof \Closure) {
                $value = call_user_func($default, $key);
            } else {
                $value = $default;
            }
            $cache->set($key, $value, $duration, $dependency);
        }
        return $value;
    }

    /**
     * Retrieves a value from cache with a specified key.
     *
     * @param mixed $key a key identifying the cached value. This can be a simple string or
     * a complex data structure consisting of factors representing the key.
     * @param callable|mixed $default a default value. This can also be any callable function that
     * will recieve the key and should return a value.
     *
     * @return mixed the value stored in cache or the default value if the value is not in the cache, expired,
     * or the dependency associated with the cached data has changed.
     */
    public static function get($key, $default = false)
    {
        $value = static::getFacadeComponent()->get($key);
        if ($value === false) {
            if ($default instanceof \Closure) {
                $value = call_user_func($default, $key);
            } else {
                $value = $default;
            }
        }
        return $value;
    }

    /**
     * Retrieves a value from cache (or stores it if it's not cached) with a specified key.
     *
     * @see cache
     * @param mixed $key a key identifying the cached value.
     * @param callable|mixed $default the value to be cached and retrieved if some value is not already in the cache.
     * @param int $duration the number of seconds in which the cached value will expire.
     * @param \yii\caching\Dependency $dependency dependency of the cached item.
     *
     * @return bool whether the value is successfully stored into cache.
     */
    public static function getOrSet($key, $default, $duration = 0, $dependency = null)
    {
        return static::cache($key, $default, $duration, $dependency);
    }
}
