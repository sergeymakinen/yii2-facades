# Facades for Yii 2

Laravel like facades support for Yii 2 application components. Just what you want: simple, extensive and with an IDE auto completion support via [PHPDoc](https://www.phpdoc.org) so you won't be disappointed.

[![Code Quality](https://img.shields.io/scrutinizer/g/sergeymakinen/yii2-facades.svg?style=flat-square)](https://scrutinizer-ci.com/g/sergeymakinen/yii2-facades) [![Packagist Version](https://img.shields.io/packagist/v/sergeymakinen/yii2-facades.svg?style=flat-square)](https://packagist.org/packages/sergeymakinen/yii2-facades) [![Total Downloads](https://img.shields.io/packagist/dt/sergeymakinen/yii2-facades.svg?style=flat-square)](https://packagist.org/packages/sergeymakinen/yii2-facades) [![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

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
$users = Yii::$app->db->createCommand('select * from users;')->queryAll();
```

After:

```php
$users = Db::createCommand('select * from users;')->queryAll();
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
