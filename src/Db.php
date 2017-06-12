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
 * Yii::$app->get('db') facade.
 *
 * Methods
 *
 * @method static \yii\base\Behavior attachBehavior(string $name, string|array|\yii\base\Behavior $behavior) Attaches a behavior to this component.
 * @see \yii\base\Component::attachBehavior
 *
 * @method static void attachBehaviors(array $behaviors) Attaches a list of behaviors to the component.
 * @see \yii\base\Component::attachBehaviors
 *
 * @method static \yii\db\Transaction beginTransaction(string|null $isolationLevel = null) Starts a transaction.
 * @see \yii\db\Connection::beginTransaction
 *
 * @method static array behaviors() Returns a list of behaviors that this component should behave as.
 * @see \yii\base\Component::behaviors
 *
 * @method static mixed cache(callable $callable, int $duration = null, \yii\caching\Dependency $dependency = null) Uses query cache for the queries performed with the callable.
 * @see \yii\db\Connection::cache
 *
 * @method static void close() Closes the currently active DB connection.
 * @see \yii\db\Connection::close
 *
 * @method static \yii\db\Command createCommand(string $sql = null, array $params = []) Creates a command for execution.
 * @see \yii\db\Connection::createCommand
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
 * @method static null|\yii\base\Behavior getBehavior(string $name) Returns the named behavior object.
 * @see \yii\base\Component::getBehavior
 *
 * @method static \yii\base\Behavior[] getBehaviors() Returns all behaviors attached to this component.
 * @see \yii\base\Component::getBehaviors
 *
 * @method static string getDriverName() Returns the name of the DB driver.
 * @see \yii\db\Connection::getDriverName
 *
 * @method static bool getIsActive() Returns a value indicating whether the DB connection is established.
 * @see \yii\db\Connection::getIsActive
 *
 * @method static string getLastInsertID(string $sequenceName = '') Returns the ID of the last inserted row or sequence value.
 * @see \yii\db\Connection::getLastInsertID
 *
 * @method static \yii\db\Connection getMaster() Returns the currently active master connection.
 * @see \yii\db\Connection::getMaster
 *
 * @method static \PDO getMasterPdo() Returns the PDO instance for the currently active master connection.
 * @see \yii\db\Connection::getMasterPdo
 *
 * @method static \yii\db\QueryBuilder getQueryBuilder() Returns the query builder for the current DB connection.
 * @see \yii\db\Connection::getQueryBuilder
 *
 * @method static array getQueryCacheInfo(int $duration, \yii\caching\Dependency $dependency) Returns the current query cache information.
 * @see \yii\db\Connection::getQueryCacheInfo
 *
 * @method static \yii\db\Schema getSchema() Returns the schema information for the database opened by this connection.
 * @see \yii\db\Connection::getSchema
 *
 * @method static \yii\db\Connection getSlave(bool $fallbackToMaster = true) Returns the currently active slave connection.
 * @see \yii\db\Connection::getSlave
 *
 * @method static \PDO getSlavePdo(bool $fallbackToMaster = true) Returns the PDO instance for the currently active slave connection.
 * @see \yii\db\Connection::getSlavePdo
 *
 * @method static \yii\db\TableSchema getTableSchema(string $name, bool $refresh = false) Obtains the schema information for the named table.
 * @see \yii\db\Connection::getTableSchema
 *
 * @method static \yii\db\Transaction getTransaction() Returns the currently active transaction.
 * @see \yii\db\Connection::getTransaction
 *
 * @method static bool hasEventHandlers(string $name) Returns a value indicating whether there is any handler attached to the named event.
 * @see \yii\base\Component::hasEventHandlers
 *
 * @method static mixed noCache(callable $callable) Disables query cache temporarily.
 * @see \yii\db\Connection::noCache
 *
 * @method static bool off(string $name, callable $handler = null) Detaches an existing event handler from this component.
 * @see \yii\base\Component::off
 *
 * @method static void on(string $name, callable $handler, mixed $data = null, bool $append = true) Attaches an event handler to an event.
 * @see \yii\base\Component::on
 *
 * @method static void open() Establishes a DB connection.
 * @see \yii\db\Connection::open
 *
 * @method static string quoteColumnName(string $name) Quotes a column name for use in a query.
 * @see \yii\db\Connection::quoteColumnName
 *
 * @method static string quoteSql(string $sql) Processes a SQL statement by quoting table and column names that are enclosed within double brackets.
 * @see \yii\db\Connection::quoteSql
 *
 * @method static string quoteTableName(string $name) Quotes a table name for use in a query.
 * @see \yii\db\Connection::quoteTableName
 *
 * @method static string quoteValue(string $value) Quotes a string value for use in a query.
 * @see \yii\db\Connection::quoteValue
 *
 * @method static void setDriverName(string $driverName) Changes the current driver name.
 * @see \yii\db\Connection::setDriverName
 *
 * @method static mixed transaction(callable $callback, string|null $isolationLevel = null) Executes callback provided in a transaction.
 * @see \yii\db\Connection::transaction
 *
 * @method static void trigger(string $name, \yii\base\Event $event = null) Triggers an event.
 * @see \yii\base\Component::trigger
 *
 * @method static mixed useMaster(callable $callback) Executes the provided callback by using the master connection.
 * @see \yii\db\Connection::useMaster
 *
 * Property accessors
 *
 * @method static array getAttributes() Returns PDO attributes (name => value) that should be set when calling [[open()]] to establish a DB connection.
 * @see \yii\db\Connection::attributes
 *
 * @method static string getCharset() Returns the charset used for database connection.
 * @see \yii\db\Connection::charset
 *
 * @method static string getCommandClass() Returns the class used to create new database [[Command]] objects.
 * @see \yii\db\Connection::commandClass
 *
 * @method static string getDsn() Returns the Data Source Name, or DSN, contains the information required to connect to the database.
 * @see \yii\db\Connection::dsn
 *
 * @method static bool getEmulatePrepare() Returns whether to turn on prepare emulation.
 * @see \yii\db\Connection::emulatePrepare
 *
 * @method static bool getEnableLogging() Returns whether to enable logging of database queries.
 * @see \yii\db\Connection::enableLogging
 *
 * @method static bool getEnableProfiling() Returns whether to enable profiling of database queries.
 * @see \yii\db\Connection::enableProfiling
 *
 * @method static bool getEnableQueryCache() Returns whether to enable query caching.
 * @see \yii\db\Connection::enableQueryCache
 *
 * @method static bool getEnableSavepoint() Returns whether to enable [savepoint](http://en.wikipedia.org/wiki/Savepoint).
 * @see \yii\db\Connection::enableSavepoint
 *
 * @method static bool getEnableSchemaCache() Returns whether to enable schema caching.
 * @see \yii\db\Connection::enableSchemaCache
 *
 * @method static bool getEnableSlaves() Returns whether to enable read/write splitting by using [[slaves]] to read data.
 * @see \yii\db\Connection::enableSlaves
 *
 * @method static array getMasterConfig() Returns the configuration that should be merged with every master configuration listed in [[masters]].
 * @see \yii\db\Connection::masterConfig
 *
 * @method static array getMasters() Returns list of master connection configurations.
 * @see \yii\db\Connection::masters
 *
 * @method static string getPassword() Returns the password for establishing DB connection.
 * @see \yii\db\Connection::password
 *
 * @method static \PDO getPdo() Returns the PHP PDO instance associated with this DB connection.
 * @see \yii\db\Connection::pdo
 *
 * @method static string getPdoClass() Returns Custom PDO wrapper class.
 * @see \yii\db\Connection::pdoClass
 *
 * @method static \yii\caching\Cache|string getQueryCache() Returns the cache object or the ID of the cache application component that is used for query caching.
 * @see \yii\db\Connection::queryCache
 *
 * @method static int getQueryCacheDuration() Returns the default number of seconds that query results can remain valid in cache.
 * @see \yii\db\Connection::queryCacheDuration
 *
 * @method static \yii\caching\Cache|string getSchemaCache() Returns the cache object or the ID of the cache application component that is used to cache the table metadata.
 * @see \yii\db\Connection::schemaCache
 *
 * @method static int getSchemaCacheDuration() Returns number of seconds that table metadata can remain valid in cache.
 * @see \yii\db\Connection::schemaCacheDuration
 *
 * @method static array getSchemaCacheExclude() Returns list of tables whose metadata should NOT be cached.
 * @see \yii\db\Connection::schemaCacheExclude
 *
 * @method static array getSchemaMap() Returns mapping between PDO driver names and [[Schema]] classes.
 * @see \yii\db\Connection::schemaMap
 *
 * @method static int getServerRetryInterval() Returns the retry interval in seconds for dead servers listed in [[masters]] and [[slaves]].
 * @see \yii\db\Connection::serverRetryInterval
 *
 * @method static \yii\caching\Cache|string getServerStatusCache() Returns the cache object or the ID of the cache application component that is used to store the health status of the DB servers specified in [[masters]] and [[slaves]].
 * @see \yii\db\Connection::serverStatusCache
 *
 * @method static bool getShuffleMasters() Returns whether to shuffle [[masters]] before getting one.
 * @see \yii\db\Connection::shuffleMasters
 *
 * @method static array getSlaveConfig() Returns the configuration that should be merged with every slave configuration listed in [[slaves]].
 * @see \yii\db\Connection::slaveConfig
 *
 * @method static array getSlaves() Returns list of slave connection configurations.
 * @see \yii\db\Connection::slaves
 *
 * @method static string getTablePrefix() Returns the common prefix or suffix for table names.
 * @see \yii\db\Connection::tablePrefix
 *
 * @method static string getUsername() Returns the username for establishing DB connection.
 * @see \yii\db\Connection::username
 *
 * @method static void setAttributes(array $value) Sets PDO attributes (name => value) that should be set when calling [[open()]] to establish a DB connection.
 * @see \yii\db\Connection::attributes
 *
 * @method static void setCharset(string $value) Sets the charset used for database connection.
 * @see \yii\db\Connection::charset
 *
 * @method static void setCommandClass(string $value) Sets the class used to create new database [[Command]] objects.
 * @see \yii\db\Connection::commandClass
 *
 * @method static void setDsn(string $value) Sets the Data Source Name, or DSN, contains the information required to connect to the database.
 * @see \yii\db\Connection::dsn
 *
 * @method static void setEmulatePrepare(bool $value) Sets whether to turn on prepare emulation.
 * @see \yii\db\Connection::emulatePrepare
 *
 * @method static void setEnableLogging(bool $value) Sets whether to enable logging of database queries.
 * @see \yii\db\Connection::enableLogging
 *
 * @method static void setEnableProfiling(bool $value) Sets whether to enable profiling of database queries.
 * @see \yii\db\Connection::enableProfiling
 *
 * @method static void setEnableQueryCache(bool $value) Sets whether to enable query caching.
 * @see \yii\db\Connection::enableQueryCache
 *
 * @method static void setEnableSavepoint(bool $value) Sets whether to enable [savepoint](http://en.wikipedia.org/wiki/Savepoint).
 * @see \yii\db\Connection::enableSavepoint
 *
 * @method static void setEnableSchemaCache(bool $value) Sets whether to enable schema caching.
 * @see \yii\db\Connection::enableSchemaCache
 *
 * @method static void setEnableSlaves(bool $value) Sets whether to enable read/write splitting by using [[slaves]] to read data.
 * @see \yii\db\Connection::enableSlaves
 *
 * @method static void setMasterConfig(array $value) Sets the configuration that should be merged with every master configuration listed in [[masters]].
 * @see \yii\db\Connection::masterConfig
 *
 * @method static void setMasters(array $value) Sets list of master connection configurations.
 * @see \yii\db\Connection::masters
 *
 * @method static void setPassword(string $value) Sets the password for establishing DB connection.
 * @see \yii\db\Connection::password
 *
 * @method static void setPdo(\PDO $value) Sets the PHP PDO instance associated with this DB connection.
 * @see \yii\db\Connection::pdo
 *
 * @method static void setPdoClass(string $value) Sets Custom PDO wrapper class.
 * @see \yii\db\Connection::pdoClass
 *
 * @method static void setQueryCache(\yii\caching\Cache|string $value) Sets the cache object or the ID of the cache application component that is used for query caching.
 * @see \yii\db\Connection::queryCache
 *
 * @method static void setQueryCacheDuration(int $value) Sets the default number of seconds that query results can remain valid in cache.
 * @see \yii\db\Connection::queryCacheDuration
 *
 * @method static void setSchemaCache(\yii\caching\Cache|string $value) Sets the cache object or the ID of the cache application component that is used to cache the table metadata.
 * @see \yii\db\Connection::schemaCache
 *
 * @method static void setSchemaCacheDuration(int $value) Sets number of seconds that table metadata can remain valid in cache.
 * @see \yii\db\Connection::schemaCacheDuration
 *
 * @method static void setSchemaCacheExclude(array $value) Sets list of tables whose metadata should NOT be cached.
 * @see \yii\db\Connection::schemaCacheExclude
 *
 * @method static void setSchemaMap(array $value) Sets mapping between PDO driver names and [[Schema]] classes.
 * @see \yii\db\Connection::schemaMap
 *
 * @method static void setServerRetryInterval(int $value) Sets the retry interval in seconds for dead servers listed in [[masters]] and [[slaves]].
 * @see \yii\db\Connection::serverRetryInterval
 *
 * @method static void setServerStatusCache(\yii\caching\Cache|string $value) Sets the cache object or the ID of the cache application component that is used to store the health status of the DB servers specified in [[masters]] and [[slaves]].
 * @see \yii\db\Connection::serverStatusCache
 *
 * @method static void setShuffleMasters(bool $value) Sets whether to shuffle [[masters]] before getting one.
 * @see \yii\db\Connection::shuffleMasters
 *
 * @method static void setSlaveConfig(array $value) Sets the configuration that should be merged with every slave configuration listed in [[slaves]].
 * @see \yii\db\Connection::slaveConfig
 *
 * @method static void setSlaves(array $value) Sets list of slave connection configurations.
 * @see \yii\db\Connection::slaves
 *
 * @method static void setTablePrefix(string $value) Sets the common prefix or suffix for table names.
 * @see \yii\db\Connection::tablePrefix
 *
 * @method static void setUsername(string $value) Sets the username for establishing DB connection.
 * @see \yii\db\Connection::username
 */
class Db extends Facade
{
    /**
     * @inheritDoc
     */
    public static function getFacadeComponentId()
    {
        return 'db';
    }
}
