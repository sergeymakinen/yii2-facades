<?php

namespace sergeymakinen\facades;

/** @noinspection PhpUnnecessaryFullyQualifiedNameInspection */
/**
 * Cache facade.
 *
 * Facades Yii::$app->get('cache') component.
 *
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
 * @method static mixed get(mixed $key) Retrieves a value from cache with a specified key.
 * @method static null|\yii\base\Behavior getBehavior(string $name) Returns the named behavior object.
 * @method static \yii\base\Behavior[] getBehaviors() Returns all behaviors attached to this component.
 * @method static string getKeyPrefix() Returns $keyPrefix - a string prefixed to every cache key so that it is unique globally in the whole cache storage.
 * @method static array|bool getSerializer() Returns $serializer - the functions used to serialize and unserialize cached data.
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
 * @method static setKeyPrefix(string $value) Sets $keyPrefix - a string prefixed to every cache key so that it is unique globally in the whole cache storage.
 * @method static setSerializer(array|bool $value) Sets $serializer - the functions used to serialize and unserialize cached data.
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
}
