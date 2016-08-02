<?php

namespace sergeymakinen\facades;

/** @noinspection PhpUnnecessaryFullyQualifiedNameInspection */
/**
 * Url facade.
 *
 * @method static addRules(array $rules, boolean $append = true) Adds additional URL rules.
 * @method static string createAbsoluteUrl(string|array $params, string $scheme = null) Creates an absolute URL using the given route and query parameters.
 * @method static string createUrl(string|array $params) Creates a URL using the given route and query parameters.
 * @method static string getBaseUrl() Returns the base URL that is used by [[createUrl()]] to prepend to created URLs.
 * @method static string getHostInfo() Returns the host info that is used by [[createAbsoluteUrl()]] to prepend to created URLs.
 * @method static string getScriptUrl() Returns the entry script URL that is used by [[createUrl()]] to prepend to created URLs.
 * @method static array|boolean parseRequest(\yii\web\Request $request) Parses the user request.
 * @method static setBaseUrl(string $value) Sets the base URL that is used by [[createUrl()]] to prepend to created URLs.
 * @method static setHostInfo(string $value) Sets the host info that is used by [[createAbsoluteUrl()]] to prepend to created URLs.
 * @method static setScriptUrl(string $value) Sets the entry script URL that is used by [[createUrl()]] to prepend to created URLs.
 */
class Url extends Facade
{
    /**
     * @inheritdoc
     */
    public static function getFacadeComponentId()
    {
        return 'urlManager';
    }
}
