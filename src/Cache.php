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
 * Yii::$app->get('cache') facade.
 *
 * Methods
 *
 * @method static bool add(mixed $key, mixed $value, int $duration = 0, \yii\caching\Dependency $dependency = null) Stores a value identified by a key into cache if the cache does not contain this key.
 * @see \yii\caching\Cache::add
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
 * @method static string buildKey(mixed $key) Builds a normalized cache key from a given key.
 * @see \yii\caching\Cache::buildKey
 *
 * @method static bool delete(mixed $key) Deletes a value with the specified key from cache.
 * @see \yii\caching\Cache::delete
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
 * @method static bool exists(mixed $key) Checks whether a specified key exists in the cache.
 * @see \yii\caching\Cache::exists
 *
 * @method static bool flush() Deletes all values from cache.
 * @see \yii\caching\Cache::flush
 *
 * @method static null|\yii\base\Behavior getBehavior(string $name) Returns the named behavior object.
 * @see \yii\base\Component::getBehavior
 *
 * @method static \yii\base\Behavior[] getBehaviors() Returns all behaviors attached to this component.
 * @see \yii\base\Component::getBehaviors
 *
 * @method static mixed getOrSet(mixed $key, callable|\Closure $callable, int $duration = null, \yii\caching\Dependency $dependency = null) Method combines both [[set()]] and [[get()]] methods to retrieve value identified by a $key, or to store the result of $callable execution if there is no cache available for the $key.
 * @see \yii\caching\Cache::getOrSet
 *
 * @method static bool hasEventHandlers(string $name) Returns a value indicating whether there is any handler attached to the named event.
 * @see \yii\base\Component::hasEventHandlers
 *
 * @method static array madd(array $items, int $duration = 0, \yii\caching\Dependency $dependency = null) Stores multiple items in cache.
 * @see \yii\caching\Cache::madd
 *
 * @method static array mget(string[] $keys) Retrieves multiple values from cache with the specified keys.
 * @see \yii\caching\Cache::mget
 *
 * @method static array mset(array $items, int $duration = 0, \yii\caching\Dependency $dependency = null) Stores multiple items in cache.
 * @see \yii\caching\Cache::mset
 *
 * @method static array multiAdd(array $items, int $duration = 0, \yii\caching\Dependency $dependency = null) Stores multiple items in cache.
 * @see \yii\caching\Cache::multiAdd
 *
 * @method static array multiGet(string[] $keys) Retrieves multiple values from cache with the specified keys.
 * @see \yii\caching\Cache::multiGet
 *
 * @method static array multiSet(array $items, int $duration = 0, \yii\caching\Dependency $dependency = null) Stores multiple items in cache.
 * @see \yii\caching\Cache::multiSet
 *
 * @method static bool off(string $name, callable $handler = null) Detaches an existing event handler from this component.
 * @see \yii\base\Component::off
 *
 * @method static void on(string $name, callable $handler, mixed $data = null, bool $append = true) Attaches an event handler to an event.
 * @see \yii\base\Component::on
 *
 * @method static bool set(mixed $key, mixed $value, int $duration = null, \yii\caching\Dependency $dependency = null) Stores a value identified by a key into cache.
 * @see \yii\caching\Cache::set
 *
 * @method static void trigger(string $name, \yii\base\Event $event = null) Triggers an event.
 * @see \yii\base\Component::trigger
 *
 * Property accessors
 *
 * @method static int getDefaultDuration() Returns default duration in seconds before a cache entry will expire.
 * @see \yii\caching\Cache::defaultDuration
 *
 * @method static string getKeyPrefix() Returns a string prefixed to every cache key so that it is unique globally in the whole cache storage.
 * @see \yii\caching\Cache::keyPrefix
 *
 * @method static null|array|bool getSerializer() Returns the functions used to serialize and unserialize cached data.
 * @see \yii\caching\Cache::serializer
 *
 * @method static void setDefaultDuration(int $value) Sets default duration in seconds before a cache entry will expire.
 * @see \yii\caching\Cache::defaultDuration
 *
 * @method static void setKeyPrefix(string $value) Sets a string prefixed to every cache key so that it is unique globally in the whole cache storage.
 * @see \yii\caching\Cache::keyPrefix
 *
 * @method static void setSerializer(null|array|bool $value) Sets the functions used to serialize and unserialize cached data.
 * @see \yii\caching\Cache::serializer
 */
class Cache extends Facade
{
    /**
     * @inheritDoc
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
}
