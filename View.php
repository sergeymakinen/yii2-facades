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
