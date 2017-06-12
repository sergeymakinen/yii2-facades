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
 * Yii::$app->get('redis') facade.
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
 * @method static void close() Closes the currently active DB connection.
 * @see \yii\redis\Connection::close
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
 * @method static array|bool|null|string executeCommand(string $name, array $params = []) Executes a redis command.
 * @see \yii\redis\Connection::executeCommand
 *
 * @method static null|\yii\base\Behavior getBehavior(string $name) Returns the named behavior object.
 * @see \yii\base\Component::getBehavior
 *
 * @method static \yii\base\Behavior[] getBehaviors() Returns all behaviors attached to this component.
 * @see \yii\base\Component::getBehaviors
 *
 * @method static string getDriverName() Returns the name of the DB driver for the current [[dsn]].
 * @see \yii\redis\Connection::getDriverName
 *
 * @method static bool getIsActive() Returns a value indicating whether the DB connection is established.
 * @see \yii\redis\Connection::getIsActive
 *
 * @method static \yii\redis\LuaScriptBuilder getLuaScriptBuilder()
 * @see \yii\redis\Connection::getLuaScriptBuilder
 *
 * @method static bool hasEventHandlers(string $name) Returns a value indicating whether there is any handler attached to the named event.
 * @see \yii\base\Component::hasEventHandlers
 *
 * @method static bool off(string $name, callable $handler = null) Detaches an existing event handler from this component.
 * @see \yii\base\Component::off
 *
 * @method static void on(string $name, callable $handler, mixed $data = null, bool $append = true) Attaches an event handler to an event.
 * @see \yii\base\Component::on
 *
 * @method static void open() Establishes a DB connection.
 * @see \yii\redis\Connection::open
 *
 * @method static void trigger(string $name, \yii\base\Event $event = null) Triggers an event.
 * @see \yii\base\Component::trigger
 *
 * Property accessors
 *
 * @method static float getConnectionTimeout() Returns timeout to use for connection to redis.
 * @see \yii\redis\Connection::connectionTimeout
 *
 * @method static float getDataTimeout() Returns timeout to use for redis socket when reading and writing data.
 * @see \yii\redis\Connection::dataTimeout
 *
 * @method static int getDatabase() Returns the redis database to use.
 * @see \yii\redis\Connection::database
 *
 * @method static string getHostname() Returns the hostname or ip address to use for connecting to the redis server.
 * @see \yii\redis\Connection::hostname
 *
 * @method static string getPassword() Returns the password for establishing DB connection.
 * @see \yii\redis\Connection::password
 *
 * @method static int getPort() Returns the port to use for connecting to the redis server.
 * @see \yii\redis\Connection::port
 *
 * @method static array getRedisCommands() Returns List of available redis commands.
 * @see \yii\redis\Connection::redisCommands
 *
 * @method static int getSocketClientFlags() Returns Bitmask field which may be set to any combination of connection flags passed to [stream_socket_client()](http://php.net/manual/en/function.stream-socket-client.php).
 * @see \yii\redis\Connection::socketClientFlags
 *
 * @method static string getUnixSocket() Returns the unix socket path (e.g. `/var/run/redis/redis.sock`) to use for connecting to the redis server.
 * @see \yii\redis\Connection::unixSocket
 *
 * @method static void setConnectionTimeout(float $value) Sets timeout to use for connection to redis.
 * @see \yii\redis\Connection::connectionTimeout
 *
 * @method static void setDataTimeout(float $value) Sets timeout to use for redis socket when reading and writing data.
 * @see \yii\redis\Connection::dataTimeout
 *
 * @method static void setDatabase(int $value) Sets the redis database to use.
 * @see \yii\redis\Connection::database
 *
 * @method static void setHostname(string $value) Sets the hostname or ip address to use for connecting to the redis server.
 * @see \yii\redis\Connection::hostname
 *
 * @method static void setPassword(string $value) Sets the password for establishing DB connection.
 * @see \yii\redis\Connection::password
 *
 * @method static void setPort(int $value) Sets the port to use for connecting to the redis server.
 * @see \yii\redis\Connection::port
 *
 * @method static void setRedisCommands(array $value) Sets List of available redis commands.
 * @see \yii\redis\Connection::redisCommands
 *
 * @method static void setSocketClientFlags(int $value) Sets Bitmask field which may be set to any combination of connection flags passed to [stream_socket_client()](http://php.net/manual/en/function.stream-socket-client.php).
 * @see \yii\redis\Connection::socketClientFlags
 *
 * @method static void setUnixSocket(string $value) Sets the unix socket path (e.g. `/var/run/redis/redis.sock`) to use for connecting to the redis server.
 * @see \yii\redis\Connection::unixSocket
 */
class Redis extends Facade
{
    /**
     * @inheritDoc
     */
    public static function getFacadeComponentId()
    {
        return 'redis';
    }
}
