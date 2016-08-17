<?php

namespace sergeymakinen\facades;

/** @noinspection PhpUnnecessaryFullyQualifiedNameInspection */
/**
 * Url facade.
 *
 * Facades Yii::$app->get('urlManager') component.
 *
 * @method static addRules(array $rules, bool $append = true) Adds additional URL rules.
 * @method static \yii\base\Behavior attachBehavior(string $name, string|array|\yii\base\Behavior $behavior) Attaches a behavior to this component.
 * @method static attachBehaviors(array $behaviors) Attaches a list of behaviors to the component.
 * @method static array behaviors() Returns a list of behaviors that this component should behave as.
 * @method static string createAbsoluteUrl(string|array $params, string $scheme = null) Creates an absolute URL using the given route and query parameters.
 * @method static string createUrl(string|array $params) Creates a URL using the given route and query parameters.
 * @method static null|\yii\base\Behavior detachBehavior(string $name) Detaches a behavior from the component.
 * @method static detachBehaviors() Detaches all behaviors from the component.
 * @method static ensureBehaviors() Makes sure that the behaviors declared in [[behaviors()]] are attached to this component.
 * @method static string getBaseUrl() Returns the base URL that is used by [[createUrl()]] to prepend to created URLs.
 * @method static null|\yii\base\Behavior getBehavior(string $name) Returns the named behavior object.
 * @method static \yii\base\Behavior[] getBehaviors() Returns all behaviors attached to this component.
 * @method static string getHostInfo() Returns the host info that is used by [[createAbsoluteUrl()]] to prepend to created URLs.
 * @method static string getScriptUrl() Returns the entry script URL that is used by [[createUrl()]] to prepend to created URLs.
 * @method static \yii\caching\Cache|string getCache() Returns $cache - the cache object or the application component ID of the cache object.
 * @method static bool getEnablePrettyUrl() Returns $enablePrettyUrl - whether to enable pretty URLs.
 * @method static bool getEnableStrictParsing() Returns $enableStrictParsing - whether to enable strict parsing.
 * @method static string getRouteParam() Returns $routeParam - the GET parameter name for route.
 * @method static array getRuleConfig() Returns $ruleConfig - the default configuration of URL rules.
 * @method static array getRules() Returns $rules - the rules for creating and parsing URLs when [[enablePrettyUrl]] is true.
 * @method static bool getShowScriptName() Returns $showScriptName - whether to show entry script name in the constructed URL.
 * @method static string getSuffix() Returns $suffix - the URL suffix used when in 'path' format.
 * @method static bool hasEventHandlers(string $name) Returns a value indicating whether there is any handler attached to the named event.
 * @method static bool off(string $name, callable $handler = null) Detaches an existing event handler from this component.
 * @method static on(string $name, callable $handler, mixed $data = null, bool $append = true) Attaches an event handler to an event.
 * @method static array|bool parseRequest(\yii\web\Request $request) Parses the user request.
 * @method static setBaseUrl(string $value) Sets the base URL that is used by [[createUrl()]] to prepend to created URLs.
 * @method static setHostInfo(string $value) Sets the host info that is used by [[createAbsoluteUrl()]] to prepend to created URLs.
 * @method static setScriptUrl(string $value) Sets the entry script URL that is used by [[createUrl()]] to prepend to created URLs.
 * @method static setCache(\yii\caching\Cache|string $value) Sets $cache - the cache object or the application component ID of the cache object.
 * @method static setEnablePrettyUrl(bool $value) Sets $enablePrettyUrl - whether to enable pretty URLs.
 * @method static setEnableStrictParsing(bool $value) Sets $enableStrictParsing - whether to enable strict parsing.
 * @method static setRouteParam(string $value) Sets $routeParam - the GET parameter name for route.
 * @method static setRuleConfig(array $value) Sets $ruleConfig - the default configuration of URL rules.
 * @method static setRules(array $value) Sets $rules - the rules for creating and parsing URLs when [[enablePrettyUrl]] is true.
 * @method static setShowScriptName(bool $value) Sets $showScriptName - whether to show entry script name in the constructed URL.
 * @method static setSuffix(string $value) Sets $suffix - the URL suffix used when in 'path' format.
 * @method static trigger(string $name, \yii\base\Event $event = null) Triggers an event.
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
