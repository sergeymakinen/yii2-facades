<?php

namespace sergeymakinen\facades;

/** @noinspection PhpUnnecessaryFullyQualifiedNameInspection */
/**
 * Redis facade.
 *
 * @method static close() Closes the currently active DB connection.
 * @method static array|boolean|null|string executeCommand(string $name, array $params = []) Executes a redis command.
 * @method static string getDriverName() Returns the name of the DB driver for the current [[dsn]].
 * @method static boolean getIsActive() Returns a value indicating whether the DB connection is established.
 * @method static \yii\redis\LuaScriptBuilder getLuaScriptBuilder()
 * @method static float getConnectionTimeout() Returns $connectionTimeout - timeout to use for connection to redis.
 * @method static float getDataTimeout() Returns $dataTimeout - timeout to use for redis socket when reading and writing data.
 * @method static integer getDatabase() Returns $database - the redis database to use.
 * @method static string getHostname() Returns $hostname - the hostname or ip address to use for connecting to the redis server.
 * @method static string getPassword() Returns $password - the password for establishing DB connection.
 * @method static integer getPort() Returns $port - the port to use for connecting to the redis server.
 * @method static array getRedisCommands() Returns $redisCommands.
 * @method static integer getSocketClientFlags() Returns $socketClientFlags - Bitmask field which may be set to any combination of connection flags passed to [stream_socket_client()](http://php.net/manual/en/function.stream-socket-client.php)
 * @method static string getUnixSocket() Returns $unixSocket - the unix socket path (e.g. `/var/run/redis/redis.sock`) to use for connecting to the redis server.
 * @method static open() Establishes a DB connection.
 * @method static setConnectionTimeout(float $value) Sets $connectionTimeout - timeout to use for connection to redis.
 * @method static setDataTimeout(float $value) Sets $dataTimeout - timeout to use for redis socket when reading and writing data.
 * @method static setDatabase(integer $value) Sets $database - the redis database to use.
 * @method static setHostname(string $value) Sets $hostname - the hostname or ip address to use for connecting to the redis server.
 * @method static setPassword(string $value) Sets $password - the password for establishing DB connection.
 * @method static setPort(integer $value) Sets $port - the port to use for connecting to the redis server.
 * @method static setRedisCommands(array $value) Sets $redisCommands.
 * @method static setSocketClientFlags(integer $value) Sets $socketClientFlags - Bitmask field which may be set to any combination of connection flags passed to [stream_socket_client()](http://php.net/manual/en/function.stream-socket-client.php)
 * @method static setUnixSocket(string $value) Sets $unixSocket - the unix socket path (e.g. `/var/run/redis/redis.sock`) to use for connecting to the redis server.
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
