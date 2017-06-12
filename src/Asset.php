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
 * Yii::$app->get('assetManager') facade.
 *
 * Methods
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
 * @method static null|\yii\base\Behavior detachBehavior(string $name) Detaches a behavior from the component.
 * @see \yii\base\Component::detachBehavior
 *
 * @method static void detachBehaviors() Detaches all behaviors from the component.
 * @see \yii\base\Component::detachBehaviors
 *
 * @method static void ensureBehaviors() Makes sure that the behaviors declared in [[behaviors()]] are attached to this component.
 * @see \yii\base\Component::ensureBehaviors
 *
 * @method static string|bool getAssetPath(\yii\web\AssetBundle $bundle, string $asset) Returns the actual file path for the specified asset.
 * @see \yii\web\AssetManager::getAssetPath
 *
 * @method static string getAssetUrl(\yii\web\AssetBundle $bundle, string $asset) Returns the actual URL for the specified asset.
 * @see \yii\web\AssetManager::getAssetUrl
 *
 * @method static null|\yii\base\Behavior getBehavior(string $name) Returns the named behavior object.
 * @see \yii\base\Component::getBehavior
 *
 * @method static \yii\base\Behavior[] getBehaviors() Returns all behaviors attached to this component.
 * @see \yii\base\Component::getBehaviors
 *
 * @method static \yii\web\AssetBundle getBundle(string $name, bool $publish = true) Returns the named asset bundle.
 * @see \yii\web\AssetManager::getBundle
 *
 * @method static \yii\web\AssetConverterInterface getConverter() Returns the asset converter.
 * @see \yii\web\AssetManager::getConverter
 *
 * @method static string|bool getPublishedPath(string $path) Returns the published path of a file path.
 * @see \yii\web\AssetManager::getPublishedPath
 *
 * @method static string|bool getPublishedUrl(string $path) Returns the URL of a published file path.
 * @see \yii\web\AssetManager::getPublishedUrl
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
 * @method static array publish(string $path, array $options = []) Publishes a file or a directory.
 * @see \yii\web\AssetManager::publish
 *
 * @method static void setConverter(array|\yii\web\AssetConverterInterface $value) Sets the asset converter.
 * @see \yii\web\AssetManager::setConverter
 *
 * @method static void trigger(string $name, \yii\base\Event $event = null) Triggers an event.
 * @see \yii\base\Component::trigger
 *
 * Property accessors
 *
 * @method static callable getAfterCopy() Returns a PHP callback that is called after a sub-directory or file is successfully copied.
 * @see \yii\web\AssetManager::afterCopy
 *
 * @method static bool getAppendTimestamp() Returns whether to append a timestamp to the URL of every published asset.
 * @see \yii\web\AssetManager::appendTimestamp
 *
 * @method static array getAssetMap() Returns mapping from source asset files (keys) to target asset files (values).
 * @see \yii\web\AssetManager::assetMap
 *
 * @method static string getBasePath() Returns the root directory storing the published asset files.
 * @see \yii\web\AssetManager::basePath
 *
 * @method static string getBaseUrl() Returns the base URL through which the published asset files can be accessed.
 * @see \yii\web\AssetManager::baseUrl
 *
 * @method static callable getBeforeCopy() Returns a PHP callback that is called before copying each sub-directory or file.
 * @see \yii\web\AssetManager::beforeCopy
 *
 * @method static array|bool getBundles() Returns list of asset bundle configurations.
 * @see \yii\web\AssetManager::bundles
 *
 * @method static int getDirMode() Returns the permission to be set for newly generated asset directories.
 * @see \yii\web\AssetManager::dirMode
 *
 * @method static int getFileMode() Returns the permission to be set for newly published asset files.
 * @see \yii\web\AssetManager::fileMode
 *
 * @method static bool getForceCopy() Returns whether the directory being published should be copied even if it is found in the target directory.
 * @see \yii\web\AssetManager::forceCopy
 *
 * @method static callable getHashCallback() Returns a callback that will be called to produce hash for asset directory generation.
 * @see \yii\web\AssetManager::hashCallback
 *
 * @method static bool getLinkAssets() Returns whether to use symbolic link to publish asset files.
 * @see \yii\web\AssetManager::linkAssets
 *
 * @method static void setAfterCopy(callable $value) Sets a PHP callback that is called after a sub-directory or file is successfully copied.
 * @see \yii\web\AssetManager::afterCopy
 *
 * @method static void setAppendTimestamp(bool $value) Sets whether to append a timestamp to the URL of every published asset.
 * @see \yii\web\AssetManager::appendTimestamp
 *
 * @method static void setAssetMap(array $value) Sets mapping from source asset files (keys) to target asset files (values).
 * @see \yii\web\AssetManager::assetMap
 *
 * @method static void setBasePath(string $value) Sets the root directory storing the published asset files.
 * @see \yii\web\AssetManager::basePath
 *
 * @method static void setBaseUrl(string $value) Sets the base URL through which the published asset files can be accessed.
 * @see \yii\web\AssetManager::baseUrl
 *
 * @method static void setBeforeCopy(callable $value) Sets a PHP callback that is called before copying each sub-directory or file.
 * @see \yii\web\AssetManager::beforeCopy
 *
 * @method static void setBundles(array|bool $value) Sets list of asset bundle configurations.
 * @see \yii\web\AssetManager::bundles
 *
 * @method static void setDirMode(int $value) Sets the permission to be set for newly generated asset directories.
 * @see \yii\web\AssetManager::dirMode
 *
 * @method static void setFileMode(int $value) Sets the permission to be set for newly published asset files.
 * @see \yii\web\AssetManager::fileMode
 *
 * @method static void setForceCopy(bool $value) Sets whether the directory being published should be copied even if it is found in the target directory.
 * @see \yii\web\AssetManager::forceCopy
 *
 * @method static void setHashCallback(callable $value) Sets a callback that will be called to produce hash for asset directory generation.
 * @see \yii\web\AssetManager::hashCallback
 *
 * @method static void setLinkAssets(bool $value) Sets whether to use symbolic link to publish asset files.
 * @see \yii\web\AssetManager::linkAssets
 */
class Asset extends Facade
{
    /**
     * @inheritDoc
     */
    public static function getFacadeComponentId()
    {
        return 'assetManager';
    }
}
