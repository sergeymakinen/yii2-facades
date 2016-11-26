<?php

namespace sergeymakinen\tests;

use sergeymakinen\facades\Facade;
use sergeymakinen\tests\mocks\Component;
use sergeymakinen\tests\mocks\Component2Facade;
use sergeymakinen\tests\mocks\ComponentFacade;

class FacadeTest extends TestCase
{
    protected $config = [
        'components' => [
            'component' => [
                'class' => 'sergeymakinen\tests\mocks\Component'
            ],
            'component2' => [
                'class' => 'sergeymakinen\tests\mocks\Component2'
            ]
        ]
    ];

    protected $mappings = [
        'Asset' => 'assetManager',
        'Auth' => 'auth',
        'Cache' => 'cache',
        'Db' => 'db',
        'Error' => 'errorHandler',
        'Formatter' => 'formatter',
        'Http' => 'httpClient',
        'I18n' => 'i18n',
        'Log' => 'log',
        'Mailer' => 'mailer',
        'Redis' => 'redis',
        'Request' => 'request',
        'Response' => 'response',
        'Router' => 'urlManager',
        'Security' => 'security',
        'Session' => 'session',
        'Url' => 'urlManager',
        'User' => 'user',
        'View' => 'view',
    ];

    public function testGetFacadeComponentId()
    {
        $this->assertSame('component', ComponentFacade::getFacadeComponentId());
        $this->assertSame('component2', Component2Facade::getFacadeComponentId());
        $this->expectException('yii\base\InvalidConfigException');
        Facade::getFacadeComponentId();
    }

    /**
     * @covers \sergeymakinen\facades\Facade::clearResolvedFacadeComponent
     */
    public function testClearResolvedFacadeComponent()
    {
        ComponentFacade::getProperty();
        ComponentFacade::method();
        Component2Facade::getProperty();
        Component2Facade::method();
        $accessors = $this->getInaccessibleProperty('sergeymakinen\facades\Facade', '_accessors');
        $components = $this->getInaccessibleProperty('sergeymakinen\facades\Facade', '_components');
        $this->assertArrayHasKey('component', $accessors);
        $this->assertArrayHasKey('component2', $accessors);
        $this->assertArrayHasKey('component', $components);
        $this->assertArrayHasKey('component2', $components);

        Facade::clearResolvedFacadeComponent('component');

        $accessors = $this->getInaccessibleProperty('sergeymakinen\facades\Facade', '_accessors');
        $components = $this->getInaccessibleProperty('sergeymakinen\facades\Facade', '_components');
        $this->assertArrayNotHasKey('component', $accessors);
        $this->assertArrayHasKey('component2', $accessors);
        $this->assertArrayNotHasKey('component', $components);
        $this->assertArrayHasKey('component2', $components);
    }

    public function testClearResolvedFacadeComponents()
    {
        ComponentFacade::getProperty();
        ComponentFacade::method();
        Component2Facade::getProperty();
        Component2Facade::method();
        $accessors = $this->getInaccessibleProperty('sergeymakinen\facades\Facade', '_accessors');
        $components = $this->getInaccessibleProperty('sergeymakinen\facades\Facade', '_components');
        $this->assertArrayHasKey('component', $accessors);
        $this->assertArrayHasKey('component2', $accessors);
        $this->assertArrayHasKey('component', $components);
        $this->assertArrayHasKey('component2', $components);

        Facade::clearResolvedFacadeComponents();

        $accessors = $this->getInaccessibleProperty('sergeymakinen\facades\Facade', '_accessors');
        $components = $this->getInaccessibleProperty('sergeymakinen\facades\Facade', '_components');
        $this->assertEmpty($accessors);
        $this->assertEmpty($components);
    }

    public function testGetFacadeComponent()
    {
        $this->assertSame(\Yii::$app->get('component'), ComponentFacade::getFacadeComponent());
        $this->assertSame(\Yii::$app->get('component2'), Component2Facade::getFacadeComponent());
    }

    public function testGetFacadeApplication()
    {
        $this->setInaccessibleProperty('sergeymakinen\facades\Facade', '_app', null);
        $this->assertSame(\Yii::$app, ComponentFacade::getFacadeApplication());
    }

    public function testSetFacadeApplication()
    {
        $this->assertEquals(\Yii::$app, ComponentFacade::getFacadeApplication());
        ComponentFacade::getProperty();
        ComponentFacade::method();
        Component2Facade::getProperty();
        Component2Facade::method();
        $accessors = $this->getInaccessibleProperty('sergeymakinen\facades\Facade', '_accessors');
        $components = $this->getInaccessibleProperty('sergeymakinen\facades\Facade', '_components');
        $this->assertArrayHasKey('component', $accessors);
        $this->assertArrayHasKey('component2', $accessors);
        $this->assertArrayHasKey('component', $components);
        $this->assertArrayHasKey('component2', $components);

        $component = \Yii::$app->get('component');
        $component2 = \Yii::$app->get('component2');
        $oldApp = \Yii::$app;
        $this->createConsoleApplication($this->config);
        $this->assertNotSame(\Yii::$app, $oldApp);
        $this->assertSame($oldApp, Facade::getFacadeApplication());
        $this->assertNotSame(\Yii::$app, Facade::getFacadeApplication());
        
        Facade::setFacadeApplication(\Yii::$app);
        $accessors = $this->getInaccessibleProperty('sergeymakinen\facades\Facade', '_accessors');
        $components = $this->getInaccessibleProperty('sergeymakinen\facades\Facade', '_components');
        $this->assertEmpty($accessors);
        $this->assertEmpty($components);
        $this->assertSame(\Yii::$app->get('component'), ComponentFacade::getFacadeComponent());
        $this->assertSame(\Yii::$app->get('component2'), Component2Facade::getFacadeComponent());
        $this->assertNotSame($component, ComponentFacade::getFacadeComponent());
        $this->assertNotSame($component2, Component2Facade::getFacadeComponent());

        $this->destroyApplication();
        \Yii::$app = $oldApp;
        Facade::setFacadeApplication(\Yii::$app);
        $this->assertSame(\Yii::$app->get('component'), ComponentFacade::getFacadeComponent());
        $this->assertSame(\Yii::$app->get('component2'), Component2Facade::getFacadeComponent());
        $this->assertSame($component, ComponentFacade::getFacadeComponent());
        $this->assertSame($component2, Component2Facade::getFacadeComponent());
    }

    public function testCallStatic()
    {
        /** @var Component $component */
        $component = \Yii::$app->get('component');
        $this->assertEquals($component->property, ComponentFacade::getProperty());

        $newValue = 'foo';
        $component->property = $newValue;
        $this->assertEquals($component->property, ComponentFacade::getProperty());

        $newValue = 'bar';
        ComponentFacade::setProperty($newValue);
        $this->assertEquals(ComponentFacade::getProperty(), $component->property);

        $this->assertEquals($newValue, ComponentFacade::method($newValue));
    }

    public function testPrivateConstruction()
    {
        $this->assertFalse((new \ReflectionMethod('sergeymakinen\tests\mocks\ComponentFacade', '__construct'))->isPublic());
        $this->assertFalse((new \ReflectionMethod('sergeymakinen\tests\mocks\ComponentFacade', '__clone'))->isPublic());
        $this->assertFalse((new \ReflectionMethod('sergeymakinen\tests\mocks\ComponentFacade', '__wakeup'))->isPublic());
    }

    public function testMappings()
    {
        foreach ($this->mappings as $className => $id) {
            /** @var Facade $class */
            $class = 'sergeymakinen\facades\\' . $className;
            $this->assertEquals($id, $class::getFacadeComponentId());
        }
    }

    protected function setUp()
    {
        parent::setUp();
        $this->createConsoleApplication($this->config);
        Facade::setFacadeApplication(\Yii::$app);
    }
}
