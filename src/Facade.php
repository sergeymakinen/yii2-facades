<?php
/**
 * Facades for Yii 2
 *
 * @see       https://github.com/sergeymakinen/yii2-facades
 * @copyright Copyright (c) 2016 Sergey Makinen (https://makinen.ru)
 * @license   https://github.com/sergeymakinen/yii2-facades/blob/master/LICENSE The MIT License
 */

namespace sergeymakinen\facades;

use yii\base\Application;
use yii\base\InvalidConfigException;

/**
 * Base facade class.
 */
abstract class Facade
{
    /**
     * Facaded component property accessors.
     *
     * @var array
     */
    private static $_accessors = [];

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
     * Clears a resolved facade component.
     *
     * @param string $id
     */
    public static function clearResolvedFacadeComponent($id)
    {
        unset(self::$_accessors[$id]);
        unset(self::$_components[$id]);
    }

    /**
     * Clears all resolved facade components.
     */
    public static function clearResolvedFacadeComponents()
    {
        self::$_accessors = [];
        self::$_components = [];
    }

    /**
     * Returns a component ID being facaded.
     *
     * @return string
     */
    public static function getFacadeComponentId()
    {
        throw new InvalidConfigException('Facade must implement getFacadeComponentId method.');
    }

    /**
     * Returns a component being facaded.
     *
     * @return object
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
     */
    public static function setFacadeApplication(Application $value)
    {
        self::$_app = $value;
        self::clearResolvedFacadeComponents();
    }

    /**
     * Redirects static calls to component instance calls.
     *
     * @inheritDoc
     */
    public static function __callStatic($name, $arguments)
    {
        $id = static::getFacadeComponentId();
        if (!isset(self::$_accessors[$id])) {
            self::$_accessors[$id] = [];
            foreach ((new \ReflectionClass(static::getFacadeComponent()))->getProperties(
                \ReflectionProperty::IS_PUBLIC & ~\ReflectionProperty::IS_STATIC
            ) as $property) {
                $accessor = ucfirst($property->getName());
                self::$_accessors[$id]['get' . $accessor] = $property->getName();
                self::$_accessors[$id]['set' . $accessor] = $property->getName();
            }
        }
        if (isset(self::$_accessors[$id][$name])) {
            if ($name[0] === 'g') {
                return static::getFacadeComponent()->{self::$_accessors[$id][$name]};
            } else {
                static::getFacadeComponent()->{self::$_accessors[$id][$name]} = reset($arguments);
                return null;
            }
        } else {
            return call_user_func_array([
                static::getFacadeComponent(),
                $name
            ], $arguments);
        }
    }

    /**
     * @inheritDoc
     * @codeCoverageIgnore
     */
    private function __construct()
    {
    }

    /**
     * @inheritDoc
     * @codeCoverageIgnore
     */
    private function __wakeup()
    {
    }

    /**
     * @inheritDoc
     * @codeCoverageIgnore
     */
    private function __clone()
    {
    }
}
