<?php

namespace sergeymakinen\facades;

/** @noinspection PhpUnnecessaryFullyQualifiedNameInspection */
/**
 * Db facade.
 *
 * @method static \yii\db\Transaction beginTransaction(string|null $isolationLevel = null) Starts a transaction.
 * @method static mixed cache(callable $callable, integer $duration = null, \yii\caching\Dependency $dependency = null) Uses query cache for the queries performed with the callable.
 * @method static close() Closes the currently active DB connection.
 * @method static \yii\db\Command createCommand(string $sql = null, array $params = []) Creates a command for execution.
 * @method static string getDriverName() Returns the name of the DB driver. Based on the the current [[dsn]], in case it was not set explicitly.
 * @method static boolean getIsActive() Returns a value indicating whether the DB connection is established.
 * @method static string getLastInsertID(string $sequenceName = '') Returns the ID of the last inserted row or sequence value.
 * @method static \PDO getMasterPdo() Returns the PDO instance for the currently active master connection.
 * @method static \yii\db\QueryBuilder getQueryBuilder() Returns the query builder for the current DB connection.
 * @method static array getQueryCacheInfo(integer $duration, \yii\caching\Dependency $dependency) Returns the current query cache information.
 * @method static \yii\db\Schema getSchema() Returns the schema information for the database opened by this connection.
 * @method static \yii\db\Connection getSlave(boolean $fallbackToMaster = true) Returns the currently active slave connection.
 * @method static \PDO getSlavePdo(boolean $fallbackToMaster = true) Returns the PDO instance for the currently active slave connection.
 * @method static \yii\db\TableSchema getTableSchema(string $name, boolean $refresh = false) Obtains the schema information for the named table.
 * @method static \yii\db\Transaction getTransaction() Returns the currently active transaction.
 * @method static array getAttributes() Returns $attributes - PDO attributes (name => value) that should be set when calling [[open()]] to establish a DB connection.
 * @method static string getCharset() Returns $charset - the charset used for database connection.
 * @method static string getCommandClass() Returns $commandClass - the class used to create new database [[Command]] objects.
 * @method static string getDsn() Returns $dsn - the Data Source Name, or DSN, contains the information required to connect to the database.
 * @method static boolean getEmulatePrepare() Returns $emulatePrepare - whether to turn on prepare emulation.
 * @method static boolean getEnableQueryCache() Returns $enableQueryCache - whether to enable query caching.
 * @method static boolean getEnableSavepoint() Returns $enableSavepoint - whether to enable [savepoint](http://en.wikipedia.org/wiki/Savepoint)
 * @method static boolean getEnableSchemaCache() Returns $enableSchemaCache - whether to enable schema caching.
 * @method static boolean getEnableSlaves() Returns $enableSlaves - whether to enable read/write splitting by using [[slaves]] to read data.
 * @method static array getMasterConfig() Returns $masterConfig - the configuration that should be merged with every master configuration listed in [[masters]].
 * @method static array getMasters() Returns $masters - list of master connection configurations.
 * @method static string getPassword() Returns $password - the password for establishing DB connection.
 * @method static \PDO getPdo() Returns $pdo - the PHP PDO instance associated with this DB connection.
 * @method static string getPdoClass() Returns $pdoClass - Custom PDO wrapper class.
 * @method static \yii\caching\Cache|string getQueryCache() Returns $queryCache - the cache object or the ID of the cache application component that is used for query caching.
 * @method static integer getQueryCacheDuration() Returns $queryCacheDuration - the default number of seconds that query results can remain valid in cache.
 * @method static \yii\caching\Cache|string getSchemaCache() Returns $schemaCache - the cache object or the ID of the cache application component that is used to cache the table metadata.
 * @method static integer getSchemaCacheDuration() Returns $schemaCacheDuration - number of seconds that table metadata can remain valid in cache.
 * @method static array getSchemaCacheExclude() Returns $schemaCacheExclude - list of tables whose metadata should NOT be cached.
 * @method static array getSchemaMap() Returns $schemaMap - mapping between PDO driver names and [[Schema]] classes.
 * @method static integer getServerRetryInterval() Returns $serverRetryInterval - the retry interval in seconds for dead servers listed in [[masters]] and [[slaves]].
 * @method static \yii\caching\Cache|string getServerStatusCache() Returns $serverStatusCache - the cache object or the ID of the cache application component that is used to store the health status of the DB servers specified in [[masters]] and [[slaves]].
 * @method static array getSlaveConfig() Returns $slaveConfig - the configuration that should be merged with every slave configuration listed in [[slaves]].
 * @method static array getSlaves() Returns $slaves - list of slave connection configurations.
 * @method static string getTablePrefix() Returns $tablePrefix - the common prefix or suffix for table names.
 * @method static string getUsername() Returns $username - the username for establishing DB connection.
 * @method static mixed noCache(callable $callable) Disables query cache temporarily.
 * @method static open() Establishes a DB connection.
 * @method static string quoteColumnName(string $name) Quotes a column name for use in a query.
 * @method static string quoteSql(string $sql) Processes a SQL statement by quoting table and column names that are enclosed within double brackets.
 * @method static string quoteTableName(string $name) Quotes a table name for use in a query.
 * @method static string quoteValue(string $value) Quotes a string value for use in a query.
 * @method static setDriverName(string $driverName) Changes the current driver name.
 * @method static setAttributes(array $value) Sets $attributes - PDO attributes (name => value) that should be set when calling [[open()]] to establish a DB connection.
 * @method static setCharset(string $value) Sets $charset - the charset used for database connection.
 * @method static setCommandClass(string $value) Sets $commandClass - the class used to create new database [[Command]] objects.
 * @method static setDsn(string $value) Sets $dsn - the Data Source Name, or DSN, contains the information required to connect to the database.
 * @method static setEmulatePrepare(boolean $value) Sets $emulatePrepare - whether to turn on prepare emulation.
 * @method static setEnableQueryCache(boolean $value) Sets $enableQueryCache - whether to enable query caching.
 * @method static setEnableSavepoint(boolean $value) Sets $enableSavepoint - whether to enable [savepoint](http://en.wikipedia.org/wiki/Savepoint)
 * @method static setEnableSchemaCache(boolean $value) Sets $enableSchemaCache - whether to enable schema caching.
 * @method static setEnableSlaves(boolean $value) Sets $enableSlaves - whether to enable read/write splitting by using [[slaves]] to read data.
 * @method static setMasterConfig(array $value) Sets $masterConfig - the configuration that should be merged with every master configuration listed in [[masters]].
 * @method static setMasters(array $value) Sets $masters - list of master connection configurations.
 * @method static setPassword(string $value) Sets $password - the password for establishing DB connection.
 * @method static setPdo(\PDO $value) Sets $pdo - the PHP PDO instance associated with this DB connection.
 * @method static setPdoClass(string $value) Sets $pdoClass - Custom PDO wrapper class.
 * @method static setQueryCache(\yii\caching\Cache|string $value) Sets $queryCache - the cache object or the ID of the cache application component that is used for query caching.
 * @method static setQueryCacheDuration(integer $value) Sets $queryCacheDuration - the default number of seconds that query results can remain valid in cache.
 * @method static setSchemaCache(\yii\caching\Cache|string $value) Sets $schemaCache - the cache object or the ID of the cache application component that is used to cache the table metadata.
 * @method static setSchemaCacheDuration(integer $value) Sets $schemaCacheDuration - number of seconds that table metadata can remain valid in cache.
 * @method static setSchemaCacheExclude(array $value) Sets $schemaCacheExclude - list of tables whose metadata should NOT be cached.
 * @method static setSchemaMap(array $value) Sets $schemaMap - mapping between PDO driver names and [[Schema]] classes.
 * @method static setServerRetryInterval(integer $value) Sets $serverRetryInterval - the retry interval in seconds for dead servers listed in [[masters]] and [[slaves]].
 * @method static setServerStatusCache(\yii\caching\Cache|string $value) Sets $serverStatusCache - the cache object or the ID of the cache application component that is used to store the health status of the DB servers specified in [[masters]] and [[slaves]].
 * @method static setSlaveConfig(array $value) Sets $slaveConfig - the configuration that should be merged with every slave configuration listed in [[slaves]].
 * @method static setSlaves(array $value) Sets $slaves - list of slave connection configurations.
 * @method static setTablePrefix(string $value) Sets $tablePrefix - the common prefix or suffix for table names.
 * @method static setUsername(string $value) Sets $username - the username for establishing DB connection.
 * @method static mixed transaction(callable $callback, string|null $isolationLevel = null) Executes callback provided in a transaction.
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
