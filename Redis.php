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
 * Redis facade.
 *
 * Facades Yii::$app->get('redis') component.
 *
 * @see \yii\redis\Connection
 * @method static \yii\base\Behavior attachBehavior(string $name, string|array|\yii\base\Behavior $behavior) Attaches a behavior to this component.
 * @method static attachBehaviors(array $behaviors) Attaches a list of behaviors to the component.
 * @method static array behaviors() Returns a list of behaviors that this component should behave as.
 * @method static close() Closes the currently active DB connection.
 * @method static null|\yii\base\Behavior detachBehavior(string $name) Detaches a behavior from the component.
 * @method static detachBehaviors() Detaches all behaviors from the component.
 * @method static ensureBehaviors() Makes sure that the behaviors declared in [[behaviors()]] are attached to this component.
 * @method static array|bool|null|string executeCommand(string $name, array $params = []) Executes a redis command.
 * @method static null|\yii\base\Behavior getBehavior(string $name) Returns the named behavior object.
 * @method static \yii\base\Behavior[] getBehaviors() Returns all behaviors attached to this component.
 * @method static float getConnectionTimeout() Returns timeout to use for connection to redis.
 * @method static float getDataTimeout() Returns timeout to use for redis socket when reading and writing data.
 * @method static int getDatabase() Returns the redis database to use.
 * @method static string getDriverName() Returns the name of the DB driver for the current [[dsn]].
 * @method static string getHostname() Returns the hostname or ip address to use for connecting to the redis server.
 * @method static bool getIsActive() Returns a value indicating whether the DB connection is established.
 * @method static \yii\redis\LuaScriptBuilder getLuaScriptBuilder()
 * @method static string getPassword() Returns the password for establishing DB connection.
 * @method static int getPort() Returns the port to use for connecting to the redis server.
 * @method static array getRedisCommands() Returns List of available redis commands http://redis.io/commands.
 * @method static int getSocketClientFlags() Returns Bitmask field which may be set to any combination of connection flags passed to [stream_socket_client()](http://php.net/manual/en/function.stream-socket-client.php).
 * @method static string getUnixSocket() Returns the unix socket path (e.g. `/var/run/redis/redis.sock`) to use for connecting to the redis server.
 * @method static bool hasEventHandlers(string $name) Returns a value indicating whether there is any handler attached to the named event.
 * @method static bool off(string $name, callable $handler = null) Detaches an existing event handler from this component.
 * @method static on(string $name, callable $handler, mixed $data = null, bool $append = true) Attaches an event handler to an event.
 * @method static open() Establishes a DB connection.
 * @method static setConnectionTimeout(float $value) Sets timeout to use for connection to redis.
 * @method static setDataTimeout(float $value) Sets timeout to use for redis socket when reading and writing data.
 * @method static setDatabase(int $value) Sets the redis database to use.
 * @method static setHostname(string $value) Sets the hostname or ip address to use for connecting to the redis server.
 * @method static setPassword(string $value) Sets the password for establishing DB connection.
 * @method static setPort(int $value) Sets the port to use for connecting to the redis server.
 * @method static setRedisCommands(array $value) Sets List of available redis commands http://redis.io/commands.
 * @method static setSocketClientFlags(int $value) Sets Bitmask field which may be set to any combination of connection flags passed to [stream_socket_client()](http://php.net/manual/en/function.stream-socket-client.php).
 * @method static setUnixSocket(string $value) Sets the unix socket path (e.g. `/var/run/redis/redis.sock`) to use for connecting to the redis server.
 * @method static trigger(string $name, \yii\base\Event $event = null) Triggers an event.
 */
class Redis extends Facade
{
    /**
     * @inheritdoc
     */
    public static function getFacadeComponentId()
    {
        return 'redis';
    }
}
