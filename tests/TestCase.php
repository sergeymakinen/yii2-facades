<?php

namespace sergeymakinen\tests;

use yii\helpers\ArrayHelper;

abstract class TestCase extends \PHPUnit_Framework_TestCase
{
    protected function tearDown()
    {
        parent::tearDown();
        $this->destroyApplication();
    }

    protected function createConsoleApplication($config = [], $class = 'yii\console\Application')
    {
        new $class(ArrayHelper::merge([
            'id' => 'console-test',
            'basePath' => __DIR__,
            'vendorPath' => __DIR__ . '/../vendor',
        ], $config));
    }

    protected function createWebApplication($config = [], $class = 'yii\web\Application')
    {
        new $class(ArrayHelper::merge([
            'id' => 'web-test',
            'basePath' => __DIR__,
            'vendorPath' => __DIR__ . '/../vendor',
            'components' => [
                'request' => [
                    'enableCookieValidation' => false,
                    'scriptFile' => __DIR__ . '/index.php',
                    'scriptUrl' => '/index.php',
                ],
            ],
        ], $config));
    }

    protected function destroyApplication()
    {
        if (!isset(\Yii::$app)) {
            return;
        }

        if (\Yii::$app->has('session', true)) {
            \Yii::$app->session->close();
        }
        \Yii::$app = null;
    }

    /**
     * @param object|string $object
     * @param string $name
     *
     * @return \ReflectionProperty
     */
    protected function getProperty($object, $name)
    {
        $class = new \ReflectionClass($object);
        while (!$class->hasProperty($name)) {
            $class = $class->getParentClass();
        }
        return $class->getProperty($name);
    }

    /**
     * @param object|string $object
     * @param string $name
     *
     * @return \ReflectionMethod
     */
    protected function getMethod($object, $name)
    {
        $class = new \ReflectionClass($object);
        while (!$class->hasMethod($name)) {
            $class = $class->getParentClass();
        }
        return $class->getMethod($name);
    }

    /**
     * @param object|string $object
     * @param string $name
     *
     * @return mixed
     */
    protected function getInaccessibleProperty($object, $name)
    {
        $property = $this->getProperty($object, $name);
        $property->setAccessible(true);
        return $property->getValue($object);
    }

    /**
     * @param object|string $object
     * @param string $name
     * @param mixed $value
     */
    protected function setInaccessibleProperty($object, $name, $value)
    {
        $property = $this->getProperty($object, $name);
        $property->setAccessible(true);
        $property->setValue($value);
    }

    /**
     * @param object|string $object
     * @param string $name
     * @param array $args
     *
     * @return mixed
     */
    protected function invokeInaccessibleMethod($object, $name, array $args = [])
    {
        $method = $this->getMethod($object, $name);
        $method->setAccessible(true);
        return $method->invokeArgs($object, $args);
    }
}
