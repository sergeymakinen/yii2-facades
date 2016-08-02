<?php

namespace sergeymakinen\facades;

use yii\base\Application;
use yii\base\InvalidConfigException;

/**
 * Base facade class.
 */
abstract class Facade
{
    /**
     * The facaded application.
     *
     * @var Application
     */
    private static $_app;

    /**
     * Facaded components.
     *
     * @var object[]
     */
    private static $_components = [];

    /**
     * Returns a component ID being facaded.
     *
     * @return string
     */
    public static function getFacadeComponentId()
    {
        throw new InvalidConfigException('Facade must impelemnt getFacadeComponentId method.');
    }

    /**
     * Returns a component being facaded.
     *
     * @return mixed
     */
    public static function getFacadeComponent()
    {
        $id = static::getFacadeComponentId();
        if (!isset(self::$_components[$id])) {
            self::$_components[$id] = static::getFacadeApplication()->get($id);
        }
        return self::$_components[$id];
    }

    /**
     * Returns the facaded application.
     *
     * @return Application
     */
    public static function getFacadeApplication()
    {
        if (!isset(self::$_app)) {
            self::$_app = \Yii::$app;
        }
        return self::$_app;
    }

    /**
     * Sets the facaded application.
     *
     * @param Application $value
     *
     * @return void
     */
    public static function setFacadeApplication(Application $value)
    {
        self::$_app = $value;
    }

    /**
     * Redirects static calls to component instance calls.
     *
     * @inheritDoc
     */
    public static function __callStatic($name, $arguments)
    {
        return call_user_func_array([
            static::getFacadeComponent(),
            $name
        ], $arguments);
    }

    /**
     * @inheritDoc
     */
    private function __construct()
    {}

    /**
     * @inheritDoc
     */
    private function __wakeup()
    {}

    /**
     * @inheritDoc
     */
    private function __clone()
    {}

}