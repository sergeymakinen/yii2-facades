<?php

namespace sergeymakinen\facades;

/** @noinspection PhpUnnecessaryFullyQualifiedNameInspection */
/**
 * View facade.
 *
 * Facades Yii::$app->get('view') component.
 *
 * @method static addDynamicPlaceholder(string $placeholder, string $statements) Adds a placeholder for dynamic content.
 * @method static afterRender(string $viewFile, array $params, string $output) This method is invoked right after [[renderFile()]] renders a view file.
 * @method static \yii\base\Behavior attachBehavior(string $name, string|array|\yii\base\Behavior $behavior) Attaches a behavior to this component.
 * @method static attachBehaviors(array $behaviors) Attaches a list of behaviors to the component.
 * @method static bool beforeRender(string $viewFile, array $params) This method is invoked right before [[renderFile()]] renders a view file.
 * @method static \yii\widgets\Block beginBlock(string $id, bool $renderInPlace = false) Begins recording a block.
 * @method static beginBody() Marks the beginning of an HTML body section.
 * @method static bool beginCache(string $id, array $properties = []) Begins fragment caching.
 * @method static \yii\widgets\ContentDecorator beginContent(string $viewFile, array $params = []) Begins the rendering of content that is to be decorated by the specified view.
 * @method static beginPage() Marks the beginning of a page.
 * @method static array behaviors() Returns a list of behaviors that this component should behave as.
 * @method static clear() Clears up the registered meta tags, link tags, css/js scripts and files.
 * @method static null|\yii\base\Behavior detachBehavior(string $name) Detaches a behavior from the component.
 * @method static detachBehaviors() Detaches all behaviors from the component.
 * @method static endBlock() Ends recording a block.
 * @method static endBody() Marks the ending of an HTML body section.
 * @method static endCache() Ends fragment caching.
 * @method static endContent() Ends the rendering of content.
 * @method static endPage(bool $ajaxMode = false) Marks the ending of an HTML page.
 * @method static ensureBehaviors() Makes sure that the behaviors declared in [[behaviors()]] are attached to this component.
 * @method static mixed evaluateDynamicContent(string $statements) Evaluates the given PHP statements.
 * @method static \yii\web\AssetManager getAssetManager() Registers the asset manager being used by this view object.
 * @method static null|\yii\base\Behavior getBehavior(string $name) Returns the named behavior object.
 * @method static \yii\base\Behavior[] getBehaviors() Returns all behaviors attached to this component.
 * @method static string|bool getViewFile()
 * @method static \yii\web\AssetBundle[] getAssetBundles() Returns $assetBundles - list of the registered asset bundles.
 * @method static array getBlocks() Returns $blocks - a list of named output blocks.
 * @method static array getCacheStack() Returns $cacheStack - a list of currently active fragment cache widgets.
 * @method static \yii\base\ViewContextInterface getContext() Returns $context - the context under which the [[renderFile()]] method is being invoked.
 * @method static array getCss() Returns $css - the registered CSS code blocks.
 * @method static array getCssFiles() Returns $cssFiles - the registered CSS files.
 * @method static string getDefaultExtension() Returns $defaultExtension - the default view file extension.
 * @method static array getDynamicPlaceholders() Returns $dynamicPlaceholders - a list of placeholders for embedding dynamic contents.
 * @method static array getJs() Returns $js - the registered JS code blocks.
 * @method static array getJsFiles() Returns $jsFiles - the registered JS files.
 * @method static array getLinkTags() Returns $linkTags - the registered link tags.
 * @method static array getMetaTags() Returns $metaTags - the registered meta tags.
 * @method static mixed getParams() Returns $params - custom parameters that are shared among view templates.
 * @method static array getRenderers() Returns $renderers - a list of available renderers indexed by their corresponding supported file extensions.
 * @method static \yii\base\Theme|array|string getTheme() Returns $theme - the theme object or the configuration for creating the theme object.
 * @method static string getTitle() Returns $title - the page title.
 * @method static bool hasEventHandlers(string $name) Returns a value indicating whether there is any handler attached to the named event.
 * @method static head() Marks the position of an HTML head section.
 * @method static bool off(string $name, callable $handler = null) Detaches an existing event handler from this component.
 * @method static on(string $name, callable $handler, mixed $data = null, bool $append = true) Attaches an event handler to an event.
 * @method static \yii\web\AssetBundle registerAssetBundle(string $name, int|null $position = null) Registers the named asset bundle.
 * @method static registerCss(string $css, array $options = [], string $key = null) Registers a CSS code block.
 * @method static registerCssFile(string $url, array $options = [], string $key = null) Registers a CSS file.
 * @method static registerJs(string $js, int $position = 4, string $key = null) Registers a JS code block.
 * @method static registerJsFile(string $url, array $options = [], string $key = null) Registers a JS file.
 * @method static registerLinkTag(array $options, string $key = null) Registers a link tag.
 * @method static registerMetaTag(array $options, string $key = null) Registers a meta tag.
 * @method static string render(string $view, array $params = [], object $context = null) Renders a view.
 * @method static string renderAjax(string $view, array $params = [], object $context = null) Renders a view in response to an AJAX request.
 * @method static string renderDynamic(string $statements) Renders dynamic content returned by the given PHP statements.
 * @method static string renderFile(string $viewFile, array $params = [], object $context = null) Renders a view file.
 * @method static string renderPhpFile(string $_file_, array $_params_ = []) Renders a view file as a PHP script.
 * @method static setAssetManager(\yii\web\AssetManager $value) Sets the asset manager.
 * @method static setAssetBundles(\yii\web\AssetBundle[] $value) Sets $assetBundles - list of the registered asset bundles.
 * @method static setBlocks(array $value) Sets $blocks - a list of named output blocks.
 * @method static setCacheStack(array $value) Sets $cacheStack - a list of currently active fragment cache widgets.
 * @method static setContext(\yii\base\ViewContextInterface $value) Sets $context - the context under which the [[renderFile()]] method is being invoked.
 * @method static setCss(array $value) Sets $css - the registered CSS code blocks.
 * @method static setCssFiles(array $value) Sets $cssFiles - the registered CSS files.
 * @method static setDefaultExtension(string $value) Sets $defaultExtension - the default view file extension.
 * @method static setDynamicPlaceholders(array $value) Sets $dynamicPlaceholders - a list of placeholders for embedding dynamic contents.
 * @method static setJs(array $value) Sets $js - the registered JS code blocks.
 * @method static setJsFiles(array $value) Sets $jsFiles - the registered JS files.
 * @method static setLinkTags(array $value) Sets $linkTags - the registered link tags.
 * @method static setMetaTags(array $value) Sets $metaTags - the registered meta tags.
 * @method static setParams(mixed $value) Sets $params - custom parameters that are shared among view templates.
 * @method static setRenderers(array $value) Sets $renderers - a list of available renderers indexed by their corresponding supported file extensions.
 * @method static setTheme(\yii\base\Theme|array|string $value) Sets $theme - the theme object or the configuration for creating the theme object.
 * @method static setTitle(string $value) Sets $title - the page title.
 * @method static trigger(string $name, \yii\base\Event $event = null) Triggers an event.
 */
class View extends Facade
{
    /**
     * @inheritdoc
     */
    public static function getFacadeComponentId()
    {
        return 'view';
    }
}
