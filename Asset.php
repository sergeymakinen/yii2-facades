<?php

namespace sergeymakinen\facades;

/** @noinspection PhpUnnecessaryFullyQualifiedNameInspection */
/**
 * Asset facade.
 *
 * @method static string|boolean getAssetPath(\yii\web\AssetBundle $bundle, string $asset) Returns the actual file path for the specified asset.
 * @method static string getAssetUrl(\yii\web\AssetBundle $bundle, string $asset) Returns the actual URL for the specified asset.
 * @method static \yii\web\AssetBundle getBundle(string $name, boolean $publish = true) Returns the named asset bundle.
 * @method static \yii\web\AssetConverterInterface getConverter() Returns the asset converter.
 * @method static string|false getPublishedPath(string $path) Returns the published path of a file path.
 * @method static string|false getPublishedUrl(string $path) Returns the URL of a published file path.
 * @method static callback getAfterCopy() Returns $afterCopy - a PHP callback that is called after a sub-directory or file is successfully copied.
 * @method static boolean getAppendTimestamp() Returns $appendTimestamp - whether to append a timestamp to the URL of every published asset.
 * @method static array getAssetMap() Returns $assetMap - mapping from source asset files (keys) to target asset files (values)
 * @method static string getBasePath() Returns $basePath - the root directory storing the published asset files.
 * @method static string getBaseUrl() Returns $baseUrl - the base URL through which the published asset files can be accessed.
 * @method static callback getBeforeCopy() Returns $beforeCopy - a PHP callback that is called before copying each sub-directory or file.
 * @method static array|boolean getBundles() Returns $bundles - list of asset bundle configurations.
 * @method static integer getDirMode() Returns $dirMode - the permission to be set for newly generated asset directories.
 * @method static integer getFileMode() Returns $fileMode - the permission to be set for newly published asset files.
 * @method static boolean getForceCopy() Returns $forceCopy - whether the directory being published should be copied even if it is found in the target directory.
 * @method static callable getHashCallback() Returns $hashCallback - a callback that will be called to produce hash for asset directory generation.
 * @method static boolean getLinkAssets() Returns $linkAssets - whether to use symbolic link to publish asset files.
 * @method static array publish(string $path, array $options = []) Publishes a file or a directory.
 * @method static setConverter(array|\yii\web\AssetConverterInterface $value) Sets the asset converter.
 * @method static setAfterCopy(callback $value) Sets $afterCopy - a PHP callback that is called after a sub-directory or file is successfully copied.
 * @method static setAppendTimestamp(boolean $value) Sets $appendTimestamp - whether to append a timestamp to the URL of every published asset.
 * @method static setAssetMap(array $value) Sets $assetMap - mapping from source asset files (keys) to target asset files (values)
 * @method static setBasePath(string $value) Sets $basePath - the root directory storing the published asset files.
 * @method static setBaseUrl(string $value) Sets $baseUrl - the base URL through which the published asset files can be accessed.
 * @method static setBeforeCopy(callback $value) Sets $beforeCopy - a PHP callback that is called before copying each sub-directory or file.
 * @method static setBundles(array|boolean $value) Sets $bundles - list of asset bundle configurations.
 * @method static setDirMode(integer $value) Sets $dirMode - the permission to be set for newly generated asset directories.
 * @method static setFileMode(integer $value) Sets $fileMode - the permission to be set for newly published asset files.
 * @method static setForceCopy(boolean $value) Sets $forceCopy - whether the directory being published should be copied even if it is found in the target directory.
 * @method static setHashCallback(callable $value) Sets $hashCallback - a callback that will be called to produce hash for asset directory generation.
 * @method static setLinkAssets(boolean $value) Sets $linkAssets - whether to use symbolic link to publish asset files.
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
