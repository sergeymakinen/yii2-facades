<?php
/**
 * Facades for Yii 2
 *
 * Generated on Yii 2.0.12
 *
 * @see       https://github.com/sergeymakinen/yii2-facades
 * @copyright Copyright (c) 2016-2017 Sergey Makinen (https://makinen.ru)
 * @license   https://github.com/sergeymakinen/yii2-facades/blob/master/LICENSE The MIT License
 */

namespace sergeymakinen\facades;

/** @noinspection PhpUnnecessaryFullyQualifiedNameInspection */
/**
 * Yii::$app->get('urlManager') facade.
 *
 * Methods
 *
 * @method static void addRules(array $rules, bool $append = true) Adds additional URL rules.
 * @see \yii\web\UrlManager::addRules
 *
 * @method static \yii\base\Behavior attachBehavior(string $name, string|array|\yii\base\Behavior $behavior) Attaches a behavior to this component.
 * @see \yii\base\Component::attachBehavior
 *
 * @method static void attachBehaviors(array $behaviors) Attaches a list of behaviors to the component.
 * @see \yii\base\Component::attachBehaviors
 *
 * @method static array behaviors() Returns a list of behaviors that this component should behave as.
 * @see \yii\base\Component::behaviors
 *
 * @method static string createAbsoluteUrl(string|array $params, string|null $scheme = null) Creates an absolute URL using the given route and query parameters.
 * @see \yii\web\UrlManager::createAbsoluteUrl
 *
 * @method static string createUrl(string|array $params) Creates a URL using the given route and query parameters.
 * @see \yii\web\UrlManager::createUrl
 *
 * @method static null|\yii\base\Behavior detachBehavior(string $name) Detaches a behavior from the component.
 * @see \yii\base\Component::detachBehavior
 *
 * @method static void detachBehaviors() Detaches all behaviors from the component.
 * @see \yii\base\Component::detachBehaviors
 *
 * @method static void ensureBehaviors() Makes sure that the behaviors declared in [[behaviors()]] are attached to this component.
 * @see \yii\base\Component::ensureBehaviors
 *
 * @method static string getBaseUrl() Returns the base URL that is used by [[createUrl()]] to prepend to created URLs.
 * @see \yii\web\UrlManager::getBaseUrl
 *
 * @method static null|\yii\base\Behavior getBehavior(string $name) Returns the named behavior object.
 * @see \yii\base\Component::getBehavior
 *
 * @method static \yii\base\Behavior[] getBehaviors() Returns all behaviors attached to this component.
 * @see \yii\base\Component::getBehaviors
 *
 * @method static string getHostInfo() Returns the host info that is used by [[createAbsoluteUrl()]] to prepend to created URLs.
 * @see \yii\web\UrlManager::getHostInfo
 *
 * @method static string getScriptUrl() Returns the entry script URL that is used by [[createUrl()]] to prepend to created URLs.
 * @see \yii\web\UrlManager::getScriptUrl
 *
 * @method static bool hasEventHandlers(string $name) Returns a value indicating whether there is any handler attached to the named event.
 * @see \yii\base\Component::hasEventHandlers
 *
 * @method static bool off(string $name, callable $handler = null) Detaches an existing event handler from this component.
 * @see \yii\base\Component::off
 *
 * @method static void on(string $name, callable $handler, mixed $data = null, bool $append = true) Attaches an event handler to an event.
 * @see \yii\base\Component::on
 *
 * @method static array|bool parseRequest(\yii\web\Request $request) Parses the user request.
 * @see \yii\web\UrlManager::parseRequest
 *
 * @method static void setBaseUrl(string $value) Sets the base URL that is used by [[createUrl()]] to prepend to created URLs.
 * @see \yii\web\UrlManager::setBaseUrl
 *
 * @method static void setHostInfo(string $value) Sets the host info that is used by [[createAbsoluteUrl()]] to prepend to created URLs.
 * @see \yii\web\UrlManager::setHostInfo
 *
 * @method static void setScriptUrl(string $value) Sets the entry script URL that is used by [[createUrl()]] to prepend to created URLs.
 * @see \yii\web\UrlManager::setScriptUrl
 *
 * @method static void trigger(string $name, \yii\base\Event $event = null) Triggers an event.
 * @see \yii\base\Component::trigger
 *
 * Property accessors
 *
 * @method static \yii\caching\Cache|string getCache() Returns the cache object or the application component ID of the cache object.
 * @see \yii\web\UrlManager::cache
 *
 * @method static bool getEnablePrettyUrl() Returns whether to enable pretty URLs.
 * @see \yii\web\UrlManager::enablePrettyUrl
 *
 * @method static bool getEnableStrictParsing() Returns whether to enable strict parsing.
 * @see \yii\web\UrlManager::enableStrictParsing
 *
 * @method static \yii\web\UrlNormalizer|array|string|bool getNormalizer() Returns the configuration for [[UrlNormalizer]] used by this UrlManager.
 * @see \yii\web\UrlManager::normalizer
 *
 * @method static string getRouteParam() Returns the GET parameter name for route.
 * @see \yii\web\UrlManager::routeParam
 *
 * @method static array getRuleConfig() Returns the default configuration of URL rules.
 * @see \yii\web\UrlManager::ruleConfig
 *
 * @method static array getRules() Returns the rules for creating and parsing URLs when [[enablePrettyUrl]] is `true`.
 * @see \yii\web\UrlManager::rules
 *
 * @method static bool getShowScriptName() Returns whether to show entry script name in the constructed URL.
 * @see \yii\web\UrlManager::showScriptName
 *
 * @method static string getSuffix() Returns the URL suffix used when [[enablePrettyUrl]] is `true`.
 * @see \yii\web\UrlManager::suffix
 *
 * @method static void setCache(\yii\caching\Cache|string $value) Sets the cache object or the application component ID of the cache object.
 * @see \yii\web\UrlManager::cache
 *
 * @method static void setEnablePrettyUrl(bool $value) Sets whether to enable pretty URLs.
 * @see \yii\web\UrlManager::enablePrettyUrl
 *
 * @method static void setEnableStrictParsing(bool $value) Sets whether to enable strict parsing.
 * @see \yii\web\UrlManager::enableStrictParsing
 *
 * @method static void setNormalizer(\yii\web\UrlNormalizer|array|string|bool $value) Sets the configuration for [[UrlNormalizer]] used by this UrlManager.
 * @see \yii\web\UrlManager::normalizer
 *
 * @method static void setRouteParam(string $value) Sets the GET parameter name for route.
 * @see \yii\web\UrlManager::routeParam
 *
 * @method static void setRuleConfig(array $value) Sets the default configuration of URL rules.
 * @see \yii\web\UrlManager::ruleConfig
 *
 * @method static void setRules(array $value) Sets the rules for creating and parsing URLs when [[enablePrettyUrl]] is `true`.
 * @see \yii\web\UrlManager::rules
 *
 * @method static void setShowScriptName(bool $value) Sets whether to show entry script name in the constructed URL.
 * @see \yii\web\UrlManager::showScriptName
 *
 * @method static void setSuffix(string $value) Sets the URL suffix used when [[enablePrettyUrl]] is `true`.
 * @see \yii\web\UrlManager::suffix
 */
class Router extends Facade
{
    /**
     * @inheritDoc
     */
    public static function getFacadeComponentId()
    {
        return 'urlManager';
    }
}
