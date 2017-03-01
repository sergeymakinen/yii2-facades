# Facades for Yii 2

Laravel like facades support for Yii 2 application components. Just what you want: simple, extensive and with an IDE auto completion support via [PHPDoc](https://www.phpdoc.org) so you won't be disappointed.

[![Code Quality](https://img.shields.io/scrutinizer/g/sergeymakinen/yii2-facades.svg?style=flat-square)](https://scrutinizer-ci.com/g/sergeymakinen/yii2-facades) [![Build Status](https://img.shields.io/travis/sergeymakinen/yii2-facades.svg?style=flat-square)](https://travis-ci.org/sergeymakinen/yii2-facades) [![Code Coverage](https://img.shields.io/codecov/c/github/sergeymakinen/yii2-facades.svg?style=flat-square)](https://codecov.io/gh/sergeymakinen/yii2-facades) [![SensioLabsInsight](https://img.shields.io/sensiolabs/i/3d6f8afa-4baf-40df-9923-2053ece59b7c.svg?style=flat-square)](https://insight.sensiolabs.com/projects/3d6f8afa-4baf-40df-9923-2053ece59b7c)

[![Packagist Version](https://img.shields.io/packagist/v/sergeymakinen/yii2-facades.svg?style=flat-square)](https://packagist.org/packages/sergeymakinen/yii2-facades) [![Total Downloads](https://img.shields.io/packagist/dt/sergeymakinen/yii2-facades.svg?style=flat-square)](https://packagist.org/packages/sergeymakinen/yii2-facades) [![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)

## Table of contents

- [Installation](#installation)
- [Usage](#usage)
  * [Generate random string](#generate-random-string)
  * [Fetch all users (just an example!)](#fetch-all-users-just-an-example)
  * [Format currency](#format-currency)
- [Access properties](#access-properties)
- [Available facades](#available-facades)
- [Helpers](#helpers)
  * [Cache](#cache)
    + [cache](#cache)
    + [get](#get)
  * [Response](#response)
    + [bare](#bare)
    + [html](#html)
    + [json](#json)
    + [jsonp](#jsonp)
    + [raw](#raw)
    + [xml](#xml)
- [Extending](#extending)

## Installation

The preferred way to install this extension is through [composer](https://getcomposer.org/download/).

Either run

```bash
composer require "sergeymakinen/yii2-facades:^1.0"
```

or add

```json
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

## Access properties

Any class public property `$foo` can be got via an accessor:

```php
$value = YourFacadeName::getFoo()
```
And set:

```php
YourFacadeName::setFoo($value)
```
## Available facades

<table>
<thead>
<th>Name</th>
<th>Facaded component alias</th>
<th>Component/interface</th>
</thead>
<tbody>
<tr>
<td><code>Asset</code></td>
<td><code>Yii::$app->assetManager</code></td>
<td><code>yii\web\AssetManager</code></td>
</tr>
<tr>
<td><code>Auth</code></td>
<td><code>Yii::$app->auth</code></td>
<td><code>yii\rbac\ManagerInterface</code></td>
</tr>
<tr>
<td><code>Cache</code></td>
<td><code>Yii::$app->cache</code></td>
<td><code>yii\caching\Cache</code></td>
</tr>
<tr>
<td><code>Db</code></td>
<td><code>Yii::$app->db</code></td>
<td><code>yii\db\Connection</code></td>
</tr>
<tr>
<td rowspan="2"><code>Error</code></td>
<td rowspan="2"><code>Yii::$app->errorHandler</code></td>
<td><code>yii\console\ErrorHandler</code></td>
</tr>
<tr>
<td><code>yii\web\ErrorHandler</code></td>
</tr>
<tr>
<td><code>Formatter</code></td>
<td><code>Yii::$app->formatter</code></td>
<td><code>yii\i18n\Formatter</code></td>
</tr>
<tr>
<td><code>Http</code></td>
<td><code>Yii::$app->httpClient</code></td>
<td><code>yii\httpclient\Client</code></td>
</tr>
<tr>
<td><code>I18n</code></td>
<td><code>Yii::$app->i18n</code></td>
<td><code>yii\i18n\I18N</code></td>
</tr>
<tr>
<td><code>Log</code></td>
<td><code>Yii::$app->log</code></td>
<td><code>yii\log\Dispatcher</code></td>
</tr>
<tr>
<td><code>Mailer</code></td>
<td><code>Yii::$app->mailer</code></td>
<td><code>yii\swiftmailer\Mailer</code></td>
</tr>
<tr>
<td><code>Redis</code></td>
<td><code>Yii::$app->redis</code></td>
<td><code>yii\redis\Connection</code></td>
</tr>
<tr>
<td rowspan="2"><code>Request</code></td>
<td rowspan="2"><code>Yii::$app->request</code></td>
<td><code>yii\console\Request</code></td>
</tr>
<tr>
<td><code>yii\web\Request</code></td>
</tr>
<tr>
<td rowspan="2"><code>Response</code></td>
<td rowspan="2"><code>Yii::$app->response</code></td>
<td><code>yii\console\Response</code></td>
</tr>
<tr>
<td><code>yii\web\Response</code></td>
</tr>
<tr>
<td><code>Router</code></td>
<td><code>Yii::$app->urlManager</code></td>
<td><code>yii\web\UrlManager</code></td>
</tr>
<tr>
<td><code>Security</code></td>
<td><code>Yii::$app->security</code></td>
<td><code>yii\base\Security</code></td>
</tr>
<tr>
<td><code>Session</code></td>
<td><code>Yii::$app->session</code></td>
<td><code>yii\web\Session</code></td>
</tr>
<tr>
<td><code>Url</code></td>
<td><code>Yii::$app->urlManager</code></td>
<td><code>yii\web\UrlManager</code></td>
</tr>
<tr>
<td><code>User</code></td>
<td><code>Yii::$app->user</code></td>
<td><code>yii\web\User</code></td>
</tr>
<tr>
<td><code>View</code></td>
<td><code>Yii::$app->view</code></td>
<td><code>yii\web\View</code></td>
</tr>
</tbody>
</table>

## Helpers

Some facades also contain useful helpers to make a development more quick and elegant.

### Cache

#### cache

```php
public static function cache($key, $default, $duration = 0, $dependency = null)
```

Retrieves a value using the provided key or the specified default value if the value is not cached. If the value is not in the cache, it will be cached. The default value can also be a closure:

```php
$users = Cache::cache('users', function () {
    return app\models\Users::findAll();
}, 3600);
```

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
