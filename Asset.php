<?php

namespace sergeymakinen\facades;

/** @noinspection PhpUnnecessaryFullyQualifiedNameInspection */
/**
 * Asset facade.
 *
 * Facades Yii::$app->get('assetManager') component.
 *
 * @method static \yii\base\Behavior attachBehavior(string $name, string|array|\yii\base\Behavior $behavior) Attaches a behavior to this component.
 * @method static attachBehaviors(array $behaviors) Attaches a list of behaviors to the component.
 * @method static array behaviors() Returns a list of behaviors that this component should behave as.
 * @method static null|\yii\base\Behavior detachBehavior(string $name) Detaches a behavior from the component.
 * @method static detachBehaviors() Detaches all behaviors from the component.
 * @method static ensureBehaviors() Makes sure that the behaviors declared in [[behaviors()]] are attached to this component.
 * @method static string|bool getAssetPath(\yii\web\AssetBundle $bundle, string $asset) Returns the actual file path for the specified asset.
 * @method static string getAssetUrl(\yii\web\AssetBundle $bundle, string $asset) Returns the actual URL for the specified asset.
 * @method static null|\yii\base\Behavior getBehavior(string $name) Returns the named behavior object.
 * @method static \yii\base\Behavior[] getBehaviors() Returns all behaviors attached to this component.
 * @method static \yii\web\AssetBundle getBundle(string $name, bool $publish = true) Returns the named asset bundle.
 * @method static \yii\web\AssetConverterInterface getConverter() Returns the asset converter.
 * @method static string|bool getPublishedPath(string $path) Returns the published path of a file path.
 * @method static string|bool getPublishedUrl(string $path) Returns the URL of a published file path.
 * @method static callable getAfterCopy() Returns $afterCopy - a PHP callback that is called after a sub-directory or file is successfully copied.
 * @method static bool getAppendTimestamp() Returns $appendTimestamp - whether to append a timestamp to the URL of every published asset.
 * @method static array getAssetMap() Returns $assetMap - mapping from source asset files (keys) to target asset files (values).
 * @method static string getBasePath() Returns $basePath - the root directory storing the published asset files.
 * @method static string getBaseUrl() Returns $baseUrl - the base URL through which the published asset files can be accessed.
 * @method static callable getBeforeCopy() Returns $beforeCopy - a PHP callback that is called before copying each sub-directory or file.
 * @method static array|bool getBundles() Returns $bundles - list of asset bundle configurations.
 * @method static int getDirMode() Returns $dirMode - the permission to be set for newly generated asset directories.
 * @method static int getFileMode() Returns $fileMode - the permission to be set for newly published asset files.
 * @method static bool getForceCopy() Returns $forceCopy - whether the directory being published should be copied even if it is found in the target directory.
 * @method static callable getHashCallback() Returns $hashCallback - a callback that will be called to produce hash for asset directory generation.
 * @method static bool getLinkAssets() Returns $linkAssets - whether to use symbolic link to publish asset files.
 * @method static bool hasEventHandlers(string $name) Returns a value indicating whether there is any handler attached to the named event.
 * @method static bool off(string $name, callable $handler = null) Detaches an existing event handler from this component.
 * @method static on(string $name, callable $handler, mixed $data = null, bool $append = true) Attaches an event handler to an event.
 * @method static array publish(string $path, array $options = []) Publishes a file or a directory.
 * @method static setConverter(array|\yii\web\AssetConverterInterface $value) Sets the asset converter.
 * @method static setAfterCopy(callable $value) Sets $afterCopy - a PHP callback that is called after a sub-directory or file is successfully copied.
 * @method static setAppendTimestamp(bool $value) Sets $appendTimestamp - whether to append a timestamp to the URL of every published asset.
 * @method static setAssetMap(array $value) Sets $assetMap - mapping from source asset files (keys) to target asset files (values).
 * @method static setBasePath(string $value) Sets $basePath - the root directory storing the published asset files.
 * @method static setBaseUrl(string $value) Sets $baseUrl - the base URL through which the published asset files can be accessed.
 * @method static setBeforeCopy(callable $value) Sets $beforeCopy - a PHP callback that is called before copying each sub-directory or file.
 * @method static setBundles(array|bool $value) Sets $bundles - list of asset bundle configurations.
 * @method static setDirMode(int $value) Sets $dirMode - the permission to be set for newly generated asset directories.
 * @method static setFileMode(int $value) Sets $fileMode - the permission to be set for newly published asset files.
 * @method static setForceCopy(bool $value) Sets $forceCopy - whether the directory being published should be copied even if it is found in the target directory.
 * @method static setHashCallback(callable $value) Sets $hashCallback - a callback that will be called to produce hash for asset directory generation.
 * @method static setLinkAssets(bool $value) Sets $linkAssets - whether to use symbolic link to publish asset files.
 * @method static trigger(string $name, \yii\base\Event $event = null) Triggers an event.
 */
class Asset extends Facade
{
    /**
     * @inheritdoc
     */
    public static function getFacadeComponentId()
    {
        return 'assetManager';
    }
}
