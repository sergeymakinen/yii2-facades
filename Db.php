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
 * @method static string getDriverName() Returns the name of the DB driver. Based on the the current [[dsn]], in case it was not set explicitly
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
 * @method static mixed noCache(callable $callable) Disables query cache temporarily.
 * @method static open() Establishes a DB connection.
 * @method static string quoteColumnName(string $name) Quotes a column name for use in a query.
 * @method static string quoteSql(string $sql) Processes a SQL statement by quoting table and column names that are enclosed within double brackets.
 * @method static string quoteTableName(string $name) Quotes a table name for use in a query.
 * @method static string quoteValue(string $value) Quotes a string value for use in a query.
 * @method static setDriverName(string $driverName) Changes the current driver name.
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
