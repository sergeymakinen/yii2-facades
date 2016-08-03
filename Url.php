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
 * @method static \yii\caching\Cache|string getCache() Returns $cache - the cache object or the application component ID of the cache object.
 * @method static boolean getEnablePrettyUrl() Returns $enablePrettyUrl - whether to enable pretty URLs.
 * @method static boolean getEnableStrictParsing() Returns $enableStrictParsing - whether to enable strict parsing.
 * @method static string getRouteParam() Returns $routeParam - the GET parameter name for route.
 * @method static array getRuleConfig() Returns $ruleConfig - the default configuration of URL rules.
 * @method static array getRules() Returns $rules - the rules for creating and parsing URLs when [[enablePrettyUrl]] is true.
 * @method static boolean getShowScriptName() Returns $showScriptName - whether to show entry script name in the constructed URL.
 * @method static string getSuffix() Returns $suffix - the URL suffix used when in 'path' format.
 * @method static array|boolean parseRequest(\yii\web\Request $request) Parses the user request.
 * @method static setBaseUrl(string $value) Sets the base URL that is used by [[createUrl()]] to prepend to created URLs.
 * @method static setHostInfo(string $value) Sets the host info that is used by [[createAbsoluteUrl()]] to prepend to created URLs.
 * @method static setScriptUrl(string $value) Sets the entry script URL that is used by [[createUrl()]] to prepend to created URLs.
 * @method static setCache(\yii\caching\Cache|string $value) Sets $cache - the cache object or the application component ID of the cache object.
 * @method static setEnablePrettyUrl(boolean $value) Sets $enablePrettyUrl - whether to enable pretty URLs.
 * @method static setEnableStrictParsing(boolean $value) Sets $enableStrictParsing - whether to enable strict parsing.
 * @method static setRouteParam(string $value) Sets $routeParam - the GET parameter name for route.
 * @method static setRuleConfig(array $value) Sets $ruleConfig - the default configuration of URL rules.
 * @method static setRules(array $value) Sets $rules - the rules for creating and parsing URLs when [[enablePrettyUrl]] is true.
 * @method static setShowScriptName(boolean $value) Sets $showScriptName - whether to show entry script name in the constructed URL.
 * @method static setSuffix(string $value) Sets $suffix - the URL suffix used when in 'path' format.
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
