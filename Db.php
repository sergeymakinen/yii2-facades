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
 * Db facade.
 *
 * Facades Yii::$app->get('db') component.
 *
 * @see \yii\db\Connection
 * @method static \yii\base\Behavior attachBehavior(string $name, string|array|\yii\base\Behavior $behavior) Attaches a behavior to this component.
 * @method static attachBehaviors(array $behaviors) Attaches a list of behaviors to the component.
 * @method static \yii\db\Transaction beginTransaction(string|null $isolationLevel = null) Starts a transaction.
 * @method static array behaviors() Returns a list of behaviors that this component should behave as.
 * @method static mixed cache(callable $callable, int $duration = null, \yii\caching\Dependency $dependency = null) Uses query cache for the queries performed with the callable.
 * @method static close() Closes the currently active DB connection.
 * @method static \yii\db\Command createCommand(string $sql = null, array $params = []) Creates a command for execution.
 * @method static null|\yii\base\Behavior detachBehavior(string $name) Detaches a behavior from the component.
 * @method static detachBehaviors() Detaches all behaviors from the component.
 * @method static ensureBehaviors() Makes sure that the behaviors declared in [[behaviors()]] are attached to this component.
 * @method static array getAttributes() Returns PDO attributes (name => value) that should be set when calling [[open()]] to establish a DB connection.
 * @method static null|\yii\base\Behavior getBehavior(string $name) Returns the named behavior object.
 * @method static \yii\base\Behavior[] getBehaviors() Returns all behaviors attached to this component.
 * @method static string getCharset() Returns the charset used for database connection.
 * @method static string getCommandClass() Returns the class used to create new database [[Command]] objects.
 * @method static string getDriverName() Returns the name of the DB driver.
 * @method static string getDsn() Returns the Data Source Name, or DSN, contains the information required to connect to the database.
 * @method static bool getEmulatePrepare() Returns whether to turn on prepare emulation.
 * @method static bool getEnableQueryCache() Returns whether to enable query caching.
 * @method static bool getEnableSavepoint() Returns whether to enable [savepoint](http://en.wikipedia.org/wiki/Savepoint).
 * @method static bool getEnableSchemaCache() Returns whether to enable schema caching.
 * @method static bool getEnableSlaves() Returns whether to enable read/write splitting by using [[slaves]] to read data.
 * @method static bool getIsActive() Returns a value indicating whether the DB connection is established.
 * @method static string getLastInsertID(string $sequenceName = '') Returns the ID of the last inserted row or sequence value.
 * @method static array getMasterConfig() Returns the configuration that should be merged with every master configuration listed in [[masters]].
 * @method static \PDO getMasterPdo() Returns the PDO instance for the currently active master connection.
 * @method static array getMasters() Returns list of master connection configurations.
 * @method static string getPassword() Returns the password for establishing DB connection.
 * @method static \PDO getPdo() Returns the PHP PDO instance associated with this DB connection.
 * @method static string getPdoClass() Returns Custom PDO wrapper class.
 * @method static \yii\db\QueryBuilder getQueryBuilder() Returns the query builder for the current DB connection.
 * @method static \yii\caching\Cache|string getQueryCache() Returns the cache object or the ID of the cache application component that is used for query caching.
 * @method static int getQueryCacheDuration() Returns the default number of seconds that query results can remain valid in cache.
 * @method static array getQueryCacheInfo(int $duration, \yii\caching\Dependency $dependency) Returns the current query cache information.
 * @method static \yii\db\Schema getSchema() Returns the schema information for the database opened by this connection.
 * @method static \yii\caching\Cache|string getSchemaCache() Returns the cache object or the ID of the cache application component that is used to cache the table metadata.
 * @method static int getSchemaCacheDuration() Returns number of seconds that table metadata can remain valid in cache.
 * @method static array getSchemaCacheExclude() Returns list of tables whose metadata should NOT be cached.
 * @method static array getSchemaMap() Returns mapping between PDO driver names and [[Schema]] classes.
 * @method static int getServerRetryInterval() Returns the retry interval in seconds for dead servers listed in [[masters]] and [[slaves]].
 * @method static \yii\caching\Cache|string getServerStatusCache() Returns the cache object or the ID of the cache application component that is used to store the health status of the DB servers specified in [[masters]] and [[slaves]].
 * @method static \yii\db\Connection getSlave(bool $fallbackToMaster = true) Returns the currently active slave connection.
 * @method static array getSlaveConfig() Returns the configuration that should be merged with every slave configuration listed in [[slaves]].
 * @method static \PDO getSlavePdo(bool $fallbackToMaster = true) Returns the PDO instance for the currently active slave connection.
 * @method static array getSlaves() Returns list of slave connection configurations.
 * @method static string getTablePrefix() Returns the common prefix or suffix for table names.
 * @method static \yii\db\TableSchema getTableSchema(string $name, bool $refresh = false) Obtains the schema information for the named table.
 * @method static \yii\db\Transaction getTransaction() Returns the currently active transaction.
 * @method static string getUsername() Returns the username for establishing DB connection.
 * @method static bool hasEventHandlers(string $name) Returns a value indicating whether there is any handler attached to the named event.
 * @method static mixed noCache(callable $callable) Disables query cache temporarily.
 * @method static bool off(string $name, callable $handler = null) Detaches an existing event handler from this component.
 * @method static on(string $name, callable $handler, mixed $data = null, bool $append = true) Attaches an event handler to an event.
 * @method static open() Establishes a DB connection.
 * @method static string quoteColumnName(string $name) Quotes a column name for use in a query.
 * @method static string quoteSql(string $sql) Processes a SQL statement by quoting table and column names that are enclosed within double brackets.
 * @method static string quoteTableName(string $name) Quotes a table name for use in a query.
 * @method static string quoteValue(string $value) Quotes a string value for use in a query.
 * @method static setAttributes(array $value) Sets PDO attributes (name => value) that should be set when calling [[open()]] to establish a DB connection.
 * @method static setCharset(string $value) Sets the charset used for database connection.
 * @method static setCommandClass(string $value) Sets the class used to create new database [[Command]] objects.
 * @method static setDriverName(string $driverName) Changes the current driver name.
 * @method static setDsn(string $value) Sets the Data Source Name, or DSN, contains the information required to connect to the database.
 * @method static setEmulatePrepare(bool $value) Sets whether to turn on prepare emulation.
 * @method static setEnableQueryCache(bool $value) Sets whether to enable query caching.
 * @method static setEnableSavepoint(bool $value) Sets whether to enable [savepoint](http://en.wikipedia.org/wiki/Savepoint).
 * @method static setEnableSchemaCache(bool $value) Sets whether to enable schema caching.
 * @method static setEnableSlaves(bool $value) Sets whether to enable read/write splitting by using [[slaves]] to read data.
 * @method static setMasterConfig(array $value) Sets the configuration that should be merged with every master configuration listed in [[masters]].
 * @method static setMasters(array $value) Sets list of master connection configurations.
 * @method static setPassword(string $value) Sets the password for establishing DB connection.
 * @method static setPdo(\PDO $value) Sets the PHP PDO instance associated with this DB connection.
 * @method static setPdoClass(string $value) Sets Custom PDO wrapper class.
 * @method static setQueryCache(\yii\caching\Cache|string $value) Sets the cache object or the ID of the cache application component that is used for query caching.
 * @method static setQueryCacheDuration(int $value) Sets the default number of seconds that query results can remain valid in cache.
 * @method static setSchemaCache(\yii\caching\Cache|string $value) Sets the cache object or the ID of the cache application component that is used to cache the table metadata.
 * @method static setSchemaCacheDuration(int $value) Sets number of seconds that table metadata can remain valid in cache.
 * @method static setSchemaCacheExclude(array $value) Sets list of tables whose metadata should NOT be cached.
 * @method static setSchemaMap(array $value) Sets mapping between PDO driver names and [[Schema]] classes.
 * @method static setServerRetryInterval(int $value) Sets the retry interval in seconds for dead servers listed in [[masters]] and [[slaves]].
 * @method static setServerStatusCache(\yii\caching\Cache|string $value) Sets the cache object or the ID of the cache application component that is used to store the health status of the DB servers specified in [[masters]] and [[slaves]].
 * @method static setSlaveConfig(array $value) Sets the configuration that should be merged with every slave configuration listed in [[slaves]].
 * @method static setSlaves(array $value) Sets list of slave connection configurations.
 * @method static setTablePrefix(string $value) Sets the common prefix or suffix for table names.
 * @method static setUsername(string $value) Sets the username for establishing DB connection.
 * @method static mixed transaction(callable $callback, string|null $isolationLevel = null) Executes callback provided in a transaction.
 * @method static trigger(string $name, \yii\base\Event $event = null) Triggers an event.
 * @method static mixed useMaster(callable $callback) Executes the provided callback by using the master connection.
 */
class Db extends Facade
{
    /**
     * @inheritdoc
     */
    public static function getFacadeComponentId()
    {
        return 'db';
    }
}
