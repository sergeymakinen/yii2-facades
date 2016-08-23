# Facades for Yii 2

Laravel like facades support for Yii 2 application components. Just what you want: simple, extensive and with an IDE auto completion support via [PHPDoc](https://www.phpdoc.org) so you won't be disappointed.

[![Code Quality](https://img.shields.io/scrutinizer/g/sergeymakinen/yii2-facades.svg?style=flat-square)](https://scrutinizer-ci.com/g/sergeymakinen/yii2-facades) [![Packagist Version](https://img.shields.io/packagist/v/sergeymakinen/yii2-facades.svg?style=flat-square)](https://packagist.org/packages/sergeymakinen/yii2-facades) [![Total Downloads](https://img.shields.io/packagist/dt/sergeymakinen/yii2-facades.svg?style=flat-square)](https://packagist.org/packages/sergeymakinen/yii2-facades) [![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)

## Installation

The preferred way to install this extension is through [composer](https://getcomposer.org/download/).

Either run

```
php composer.phar require sergeymakinen/yii2-facades "^1.0"
```

or add

```
"sergeymakinen/yii2-facades": "^1.0"
```

to the require section of your `composer.json` file.

## Usage

Basically you install the extension and start using it like you do with all normal Yii 2 application components but with a shorter simpler syntax, let's take a look (in case you wonder, all default facades, including an abstract base `Facade` reside under a `sergeymakinen\facades` namespace):

### Generate random string

Before:

```php
$random = Yii::$app->security->generateRandomString(128);
```

After:

```php
$random = Security::generateRandomString(128);
```

### Fetch all users (just an example!)

Before:

```php
$users = Yii::$app->db->createCommand('SELECT * FROM users;')->queryAll();
```

After:

```php
$users = Db::createCommand('SELECT * FROM users;')->queryAll();
```

### Format currency

Before:

```php
$price = Yii::$app->formatter->asCurrency(123456.78, 'USD');
```

After:

```php
$price = Formatter::asCurrency(123456.78, 'USD');
```

## Accessing properties

Any class public property `$foo` can be got via an accessor:

```php
$value = YourFacadeName::getFoo()
```
And set:

```php
YourFacadeName::setFoo($value)
```

## Helpers

Some facades also contain useful helpers to make a development more quick and elegant.

### Cache

#### get

```php
public static function get($key, $default = false)
```

Retrieves a value using the provided key and returns it or the specified default value which can also be a closure:

```php
$options = Cache::get('options', function () {
    return [
        'option1' => false,
        'option2' => true
    ];
});
```

#### getOrSet

```php
public static function getOrSet($key, $default, $duration = 0, $dependency = null)
```

Retrieves a value using the provided key or the specified default value if the value is not cached. If the value is not in the cache, it will be cached. The default value can also be a closure:

```php
$users = Cache::getOrSet('users', function () {
    return app\models\Users::findAll();
}, 3600);
```

### Response

#### bare

```php
public static function bare($statusCode = 204, array $headers = [])
```

Returns an empty response with optional headers:

```php
public function actionCreate()
{
    // ...
    return Response::bare(201);
}
```

#### html

```php
public static function html($data, array $headers = [])
```

Returns a HTML response with optional headers:

```php
public function actionIndex()
{
    // ...
    return Response::html($this->render('index'), [
        'Cache-Control' => 'no-cache'
    ]);
}
```

#### json

```php
public static function json($data, array $headers = [])
```

Returns a JSON response with optional headers:

```php
public function actionList()
{
    // ...
    return Response::json(Db::createCommand('SELECT * FROM users')->all());
}
```

#### jsonp

```php
public static function jsonp($data, $callback = 'callback', array $headers = [])
```

Returns a JSONP response with optional headers:

```php
public function actionApi($callback)
{
    // ...
    return Response::jsonp([
        'success' => true,
        'response' => $data
    ], $callback);
}
```

#### raw

```php
public static function raw($data, array $headers = [])
```

Returns a response with data "as is" with optional headers:

```php
public function actionCreate()
{
    // ...
    return Response::raw($binary, [
        'Content-Type' => 'application/octet-stream'
    ]);
}
```

#### xml

```php
public static function xml($data, array $headers = [])
```

Returns a XML response with optional headers:

```php
public function actionCreate()
{
    // ...
    return Response::xml([
        'success' => true,
        'response' => $data
    ]);
}
```

## Extending

If you want a new facade, it's fast and easy, imagine you want to bring a `YourFacadeName` facade:

```php
class YourFacadeName extends Facade
{
    /**
     * @inheritdoc
     */
    public static function getFacadeComponentId()
    {
        return 'yourFacadeComponentName'; // Yii::$app->yourFacadeComponentName
    }
}
```

Then whenever you call

```php
YourFacadeName::hello('world');
```

it will be executed as

```php
Yii::$app->get('yourFacadeComponentName')->hello('world');
```
