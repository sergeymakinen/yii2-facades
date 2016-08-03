<?php

namespace sergeymakinen\facades;

/** @noinspection PhpUnnecessaryFullyQualifiedNameInspection */
/**
 * View facade.
 *
 * @method static addDynamicPlaceholder(string $placeholder, string $statements) Adds a placeholder for dynamic content.
 * @method static afterRender(string $viewFile, array $params, string $output) This method is invoked right after [[renderFile()]] renders a view file.
 * @method static boolean beforeRender(string $viewFile, array $params) This method is invoked right before [[renderFile()]] renders a view file.
 * @method static \yii\widgets\Block beginBlock(string $id, boolean $renderInPlace = false) Begins recording a block.
 * @method static beginBody() Marks the beginning of an HTML body section.
 * @method static boolean beginCache(string $id, array $properties = []) Begins fragment caching.
 * @method static \yii\widgets\ContentDecorator beginContent(string $viewFile, array $params = []) Begins the rendering of content that is to be decorated by the specified view.
 * @method static beginPage() Marks the beginning of a page.
 * @method static clear() Clears up the registered meta tags, link tags, css/js scripts and files.
 * @method static endBlock() Ends recording a block.
 * @method static endBody() Marks the ending of an HTML body section.
 * @method static endCache() Ends fragment caching.
 * @method static endContent() Ends the rendering of content.
 * @method static endPage(boolean $ajaxMode = false) Marks the ending of an HTML page.
 * @method static mixed evaluateDynamicContent(string $statements) Evaluates the given PHP statements.
 * @method static \yii\web\AssetManager getAssetManager() Registers the asset manager being used by this view object.
 * @method static string|boolean getViewFile()
 * @method static \yii\web\AssetBundle getAssetBundles() Returns $assetBundles. are the registered [[AssetBundle]] objects.
 * @method static array getBlocks() Returns $blocks - a list of named output blocks.
 * @method static array getCacheStack() Returns $cacheStack - a list of currently active fragment cache widgets.
 * @method static \yii\base\ViewContextInterface getContext() Returns $context - the context under which the [[renderFile()]] method is being invoked.
 * @method static array getCss() Returns $css - the registered CSS code blocks.
 * @method static array getCssFiles() Returns $cssFiles - the registered CSS files.
 * @method static string getDefaultExtension() Returns $defaultExtension - the default view file extension.
 * @method static array getDynamicPlaceholders() Returns $dynamicPlaceholders - a list of placeholders for embedding dynamic contents.
 * @method static array getJs() Returns $js.
 * @method static array getJsFiles() Returns $jsFiles - the registered JS files.
 * @method static array getLinkTags() Returns $linkTags - the registered link tags.
 * @method static array getMetaTags() Returns $metaTags - the registered meta tags.
 * @method static mixed getParams() Returns $params - custom parameters that are shared among view templates.
 * @method static array getRenderers() Returns $renderers - a list of available renderers indexed by their corresponding supported file extensions.
 * @method static \yii\base\Theme|array|string getTheme() Returns $theme - the theme object or the configuration for creating the theme object.
 * @method static string getTitle() Returns $title.
 * @method static head() Marks the position of an HTML head section.
 * @method static \yii\web\AssetBundle registerAssetBundle(string $name, integer|null $position = null) Registers the named asset bundle.
 * @method static registerCss(string $css, array $options = [], string $key = null) Registers a CSS code block.
 * @method static registerCssFile(string $url, array $options = [], string $key = null) Registers a CSS file.
 * @method static registerJs(string $js, integer $position = 4, string $key = null) Registers a JS code block.
 * @method static registerJsFile(string $url, array $options = [], string $key = null) Registers a JS file.
 * @method static registerLinkTag(array $options, string $key = null) Registers a link tag.
 * @method static registerMetaTag(array $options, string $key = null) Registers a meta tag.
 * @method static string render(string $view, array $params = [], object $context = null) Renders a view.
 * @method static string renderAjax(string $view, array $params = [], object $context = null) Renders a view in response to an AJAX request.
 * @method static string renderDynamic(string $statements) Renders dynamic content returned by the given PHP statements.
 * @method static string renderFile(string $viewFile, array $params = [], object $context = null) Renders a view file.
 * @method static string renderPhpFile(string $_file_, array $_params_ = []) Renders a view file as a PHP script.
 * @method static setAssetManager(\yii\web\AssetManager $value) Sets the asset manager.
 * @method static setAssetBundles(\yii\web\AssetBundle $value) Sets $assetBundles. are the registered [[AssetBundle]] objects.
 * @method static setBlocks(array $value) Sets $blocks - a list of named output blocks.
 * @method static setCacheStack(array $value) Sets $cacheStack - a list of currently active fragment cache widgets.
 * @method static setContext(\yii\base\ViewContextInterface $value) Sets $context - the context under which the [[renderFile()]] method is being invoked.
 * @method static setCss(array $value) Sets $css - the registered CSS code blocks.
 * @method static setCssFiles(array $value) Sets $cssFiles - the registered CSS files.
 * @method static setDefaultExtension(string $value) Sets $defaultExtension - the default view file extension.
 * @method static setDynamicPlaceholders(array $value) Sets $dynamicPlaceholders - a list of placeholders for embedding dynamic contents.
 * @method static setJs(array $value) Sets $js.
 * @method static setJsFiles(array $value) Sets $jsFiles - the registered JS files.
 * @method static setLinkTags(array $value) Sets $linkTags - the registered link tags.
 * @method static setMetaTags(array $value) Sets $metaTags - the registered meta tags.
 * @method static setParams(mixed $value) Sets $params - custom parameters that are shared among view templates.
 * @method static setRenderers(array $value) Sets $renderers - a list of available renderers indexed by their corresponding supported file extensions.
 * @method static setTheme(\yii\base\Theme|array|string $value) Sets $theme - the theme object or the configuration for creating the theme object.
 * @method static setTitle(string $value) Sets $title.
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
