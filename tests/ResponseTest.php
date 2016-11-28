<?php

namespace sergeymakinen\tests;

use sergeymakinen\facades\Facade;
use sergeymakinen\facades\Response;
use yii\helpers\Url;

class ResponseTest extends TestCase
{
    protected $headers = [
        'foo' => 'bar',
        'location' => '/',
    ];

    protected $data = [
        'foo' => 'bar',
        'bar' => 'foo',
    ];

    public function testBare()
    {
        $response = Response::bare(204, $this->headers);
        $this->assertEquals(204, $response->statusCode);
        $this->checkResponse($response, \yii\web\Response::FORMAT_RAW, null);
    }

    public function testHtml()
    {
        $response = Response::html($this->data, $this->headers);
        $this->checkResponse($response, \yii\web\Response::FORMAT_HTML, $this->data);
    }

    public function testJson()
    {
        $response = Response::json($this->data, $this->headers);
        $this->checkResponse($response, \yii\web\Response::FORMAT_JSON, $this->data);
    }

    public function testJsonp()
    {
        $response = Response::jsonp($this->data, 'foobar', $this->headers);
        $this->checkResponse($response, \yii\web\Response::FORMAT_JSONP, [
            'callback' => 'foobar',
            'data' => $this->data,
        ]);
    }

    public function testRaw()
    {
        $response = Response::raw($this->data, $this->headers);
        $this->checkResponse($response, \yii\web\Response::FORMAT_RAW, $this->data);
    }

    public function testXml()
    {
        $response = Response::xml($this->data, $this->headers);
        $this->checkResponse($response, \yii\web\Response::FORMAT_XML, $this->data);
    }

    protected function setUp()
    {
        parent::setUp();
        $this->createWebApplication();
        Facade::setFacadeApplication(\Yii::$app);
    }

    protected function checkResponse(\yii\web\Response $response, $format, $data)
    {
        $this->assertEquals($format, $response->format);
        $this->assertSame($data, $response->data);
        foreach ($this->headers as $name => $value) {
            $this->assertTrue($response->headers->has($name));
            if ($name === 'location') {
                $value = \Yii::$app->request->getHostInfo() . Url::to($value);
                $this->assertEquals($value, $response->headers->get($name));
            } else {
                $this->assertEquals($value, $response->headers->get($name));
            }
        }
    }
}
