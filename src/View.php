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
 * Yii::$app->get('view') facade.
 *
 * Methods
 *
 * @method static void addDynamicPlaceholder(string $placeholder, string $statements) Adds a placeholder for dynamic content.
 * @see \yii\base\View::addDynamicPlaceholder
 *
 * @method static \yii\base\Behavior attachBehavior(string $name, string|array|\yii\base\Behavior $behavior) Attaches a behavior to this component.
 * @see \yii\base\Component::attachBehavior
 *
 * @method static void attachBehaviors(array $behaviors) Attaches a list of behaviors to the component.
 * @see \yii\base\Component::attachBehaviors
 *
 * @method static \yii\widgets\Block beginBlock(string $id, bool $renderInPlace = false) Begins recording a block.
 * @see \yii\base\View::beginBlock
 *
 * @method static void beginBody() Marks the beginning of an HTML body section.
 * @see \yii\web\View::beginBody
 *
 * @method static bool beginCache(string $id, array $properties = []) Begins fragment caching.
 * @see \yii\base\View::beginCache
 *
 * @method static \yii\widgets\ContentDecorator beginContent(string $viewFile, array $params = []) Begins the rendering of content that is to be decorated by the specified view.
 * @see \yii\base\View::beginContent
 *
 * @method static void beginPage() Marks the beginning of a page.
 * @see \yii\base\View::beginPage
 *
 * @method static array behaviors() Returns a list of behaviors that this component should behave as.
 * @see \yii\base\Component::behaviors
 *
 * @method static void clear() Clears up the registered meta tags, link tags, css/js scripts and files.
 * @see \yii\web\View::clear
 *
 * @method static null|\yii\base\Behavior detachBehavior(string $name) Detaches a behavior from the component.
 * @see \yii\base\Component::detachBehavior
 *
 * @method static void detachBehaviors() Detaches all behaviors from the component.
 * @see \yii\base\Component::detachBehaviors
 *
 * @method static void endBlock() Ends recording a block.
 * @see \yii\base\View::endBlock
 *
 * @method static void endBody() Marks the ending of an HTML body section.
 * @see \yii\web\View::endBody
 *
 * @method static void endCache() Ends fragment caching.
 * @see \yii\base\View::endCache
 *
 * @method static void endContent() Ends the rendering of content.
 * @see \yii\base\View::endContent
 *
 * @method static void endPage(bool $ajaxMode = false) Marks the ending of an HTML page.
 * @see \yii\web\View::endPage
 *
 * @method static void ensureBehaviors() Makes sure that the behaviors declared in [[behaviors()]] are attached to this component.
 * @see \yii\base\Component::ensureBehaviors
 *
 * @method static mixed evaluateDynamicContent(string $statements) Evaluates the given PHP statements.
 * @see \yii\base\View::evaluateDynamicContent
 *
 * @method static \yii\web\AssetManager getAssetManager() Registers the asset manager being used by this view object.
 * @see \yii\web\View::getAssetManager
 *
 * @method static null|\yii\base\Behavior getBehavior(string $name) Returns the named behavior object.
 * @see \yii\base\Component::getBehavior
 *
 * @method static \yii\base\Behavior[] getBehaviors() Returns all behaviors attached to this component.
 * @see \yii\base\Component::getBehaviors
 *
 * @method static string|bool getViewFile()
 * @see \yii\base\View::getViewFile
 *
 * @method static bool hasEventHandlers(string $name) Returns a value indicating whether there is any handler attached to the named event.
 * @see \yii\base\Component::hasEventHandlers
 *
 * @method static void head() Marks the position of an HTML head section.
 * @see \yii\web\View::head
 *
 * @method static bool off(string $name, callable $handler = null) Detaches an existing event handler from this component.
 * @see \yii\base\Component::off
 *
 * @method static void on(string $name, callable $handler, mixed $data = null, bool $append = true) Attaches an event handler to an event.
 * @see \yii\base\Component::on
 *
 * @method static \yii\web\AssetBundle registerAssetBundle(string $name, int|null $position = null) Registers the named asset bundle.
 * @see \yii\web\View::registerAssetBundle
 *
 * @method static void registerCss(string $css, array $options = [], string $key = null) Registers a CSS code block.
 * @see \yii\web\View::registerCss
 *
 * @method static void registerCssFile(string $url, array $options = [], string $key = null) Registers a CSS file.
 * @see \yii\web\View::registerCssFile
 *
 * @method static void registerJs(string $js, int $position = 4, string $key = null) Registers a JS code block.
 * @see \yii\web\View::registerJs
 *
 * @method static void registerJsFile(string $url, array $options = [], string $key = null) Registers a JS file.
 * @see \yii\web\View::registerJsFile
 *
 * @method static void registerLinkTag(array $options, string $key = null) Registers a link tag.
 * @see \yii\web\View::registerLinkTag
 *
 * @method static void registerMetaTag(array $options, string $key = null) Registers a meta tag.
 * @see \yii\web\View::registerMetaTag
 *
 * @method static string render(string $view, array $params = [], object $context = null) Renders a view.
 * @see \yii\base\View::render
 *
 * @method static string renderAjax(string $view, array $params = [], object $context = null) Renders a view in response to an AJAX request.
 * @see \yii\web\View::renderAjax
 *
 * @method static string renderDynamic(string $statements) Renders dynamic content returned by the given PHP statements.
 * @see \yii\base\View::renderDynamic
 *
 * @method static string renderFile(string $viewFile, array $params = [], object $context = null) Renders a view file.
 * @see \yii\base\View::renderFile
 *
 * @method static string renderPhpFile(string $_file_, array $_params_ = []) Renders a view file as a PHP script.
 * @see \yii\base\View::renderPhpFile
 *
 * @method static void setAssetManager(\yii\web\AssetManager $value) Sets the asset manager.
 * @see \yii\web\View::setAssetManager
 *
 * @method static void trigger(string $name, \yii\base\Event $event = null) Triggers an event.
 * @see \yii\base\Component::trigger
 *
 * Property accessors
 *
 * @method static \yii\web\AssetBundle[] getAssetBundles() Returns list of the registered asset bundles.
 * @see \yii\web\View::assetBundles
 *
 * @method static array getBlocks() Returns a list of named output blocks.
 * @see \yii\base\View::blocks
 *
 * @method static array getCacheStack() Returns a list of currently active fragment cache widgets.
 * @see \yii\base\View::cacheStack
 *
 * @method static \yii\base\ViewContextInterface getContext() Returns the context under which the [[renderFile()]] method is being invoked.
 * @see \yii\base\View::context
 *
 * @method static array getCss() Returns the registered CSS code blocks.
 * @see \yii\web\View::css
 *
 * @method static array getCssFiles() Returns the registered CSS files.
 * @see \yii\web\View::cssFiles
 *
 * @method static string getDefaultExtension() Returns the default view file extension.
 * @see \yii\base\View::defaultExtension
 *
 * @method static array getDynamicPlaceholders() Returns a list of placeholders for embedding dynamic contents.
 * @see \yii\base\View::dynamicPlaceholders
 *
 * @method static array getJs() Returns the registered JS code blocks.
 * @see \yii\web\View::js
 *
 * @method static array getJsFiles() Returns the registered JS files.
 * @see \yii\web\View::jsFiles
 *
 * @method static array getLinkTags() Returns the registered link tags.
 * @see \yii\web\View::linkTags
 *
 * @method static array getMetaTags() Returns the registered meta tags.
 * @see \yii\web\View::metaTags
 *
 * @method static mixed getParams() Returns custom parameters that are shared among view templates.
 * @see \yii\base\View::params
 *
 * @method static array getRenderers() Returns a list of available renderers indexed by their corresponding supported file extensions.
 * @see \yii\base\View::renderers
 *
 * @method static \yii\base\Theme|array|string getTheme() Returns the theme object or the configuration for creating the theme object.
 * @see \yii\base\View::theme
 *
 * @method static string getTitle() Returns the page title.
 * @see \yii\web\View::title
 *
 * @method static void setAssetBundles(\yii\web\AssetBundle[] $value) Sets list of the registered asset bundles.
 * @see \yii\web\View::assetBundles
 *
 * @method static void setBlocks(array $value) Sets a list of named output blocks.
 * @see \yii\base\View::blocks
 *
 * @method static void setCacheStack(array $value) Sets a list of currently active fragment cache widgets.
 * @see \yii\base\View::cacheStack
 *
 * @method static void setContext(\yii\base\ViewContextInterface $value) Sets the context under which the [[renderFile()]] method is being invoked.
 * @see \yii\base\View::context
 *
 * @method static void setCss(array $value) Sets the registered CSS code blocks.
 * @see \yii\web\View::css
 *
 * @method static void setCssFiles(array $value) Sets the registered CSS files.
 * @see \yii\web\View::cssFiles
 *
 * @method static void setDefaultExtension(string $value) Sets the default view file extension.
 * @see \yii\base\View::defaultExtension
 *
 * @method static void setDynamicPlaceholders(array $value) Sets a list of placeholders for embedding dynamic contents.
 * @see \yii\base\View::dynamicPlaceholders
 *
 * @method static void setJs(array $value) Sets the registered JS code blocks.
 * @see \yii\web\View::js
 *
 * @method static void setJsFiles(array $value) Sets the registered JS files.
 * @see \yii\web\View::jsFiles
 *
 * @method static void setLinkTags(array $value) Sets the registered link tags.
 * @see \yii\web\View::linkTags
 *
 * @method static void setMetaTags(array $value) Sets the registered meta tags.
 * @see \yii\web\View::metaTags
 *
 * @method static void setParams(mixed $value) Sets custom parameters that are shared among view templates.
 * @see \yii\base\View::params
 *
 * @method static void setRenderers(array $value) Sets a list of available renderers indexed by their corresponding supported file extensions.
 * @see \yii\base\View::renderers
 *
 * @method static void setTheme(\yii\base\Theme|array|string $value) Sets the theme object or the configuration for creating the theme object.
 * @see \yii\base\View::theme
 *
 * @method static void setTitle(string $value) Sets the page title.
 * @see \yii\web\View::title
 */
class View extends Facade
{
    /**
     * @inheritDoc
     */
    public static function getFacadeComponentId()
    {
        return 'view';
    }
}
