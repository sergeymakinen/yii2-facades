<?php

namespace sergeymakinen\tests;

use sergeymakinen\facades\Cache;
use sergeymakinen\facades\Facade;
use yii\caching\FileCache;

class CacheTest extends TestCase
{
    protected $key = 'cacheKey';

    protected $default = 'foo';

    protected $value = 'bar';

    public function testCache()
    {
        $this->assertEquals(false, Cache::get($this->key));
        $this->assertEquals($this->value, Cache::cache($this->key, $this->value));
        $this->assertEquals($this->value, Cache::get($this->key));
        $this->assertEquals($this->value, Cache::cache($this->key, function () {
            return $this->default;
        }));
        $this->assertEquals($this->value, Cache::get($this->key));
        Cache::delete($this->key);
        $this->assertEquals($this->default, Cache::cache($this->key, function () {
            return $this->default;
        }));
        $this->assertEquals($this->default, Cache::get($this->key));
    }

    public function testGet()
    {
        $this->assertEquals(false, Cache::get($this->key));
        $this->assertEquals($this->default, Cache::get($this->key, $this->default));
        $this->assertEquals($this->value, Cache::get($this->key, function () {
            return $this->value;
        }));
    }

    protected function setUp()
    {
        parent::setUp();
        $this->createConsoleApplication([
            'components' => [
                'cache' => [
                    'class' => FileCache::class
                ]
            ]
        ]);
        Facade::setFacadeApplication(\Yii::$app);
        Cache::flush();
    }
}
