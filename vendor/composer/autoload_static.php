<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7d03b0b2885b1498799917a5b96d2341
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'DiDom\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'DiDom\\' => 
        array (
            0 => __DIR__ . '/..' . '/imangazaliev/didom/src/DiDom',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7d03b0b2885b1498799917a5b96d2341::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7d03b0b2885b1498799917a5b96d2341::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
