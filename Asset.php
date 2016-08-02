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
 * @method static array publish(string $path, array $options = []) Publishes a file or a directory.
 * @method static setConverter(array|\yii\web\AssetConverterInterface $value) Sets the asset converter.
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
