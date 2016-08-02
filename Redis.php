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
 * @method static open() Establishes a DB connection.
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
