<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb6719611b51cf42501682bf0400c6028
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Intervention\\Image\\' => 19,
            'Intervention\\Gif\\' => 17,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Intervention\\Image\\' => 
        array (
            0 => __DIR__ . '/..' . '/intervention/image/src',
        ),
        'Intervention\\Gif\\' => 
        array (
            0 => __DIR__ . '/..' . '/intervention/gif/src',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/class',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb6719611b51cf42501682bf0400c6028::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb6719611b51cf42501682bf0400c6028::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb6719611b51cf42501682bf0400c6028::$classMap;

        }, null, ClassLoader::class);
    }
}
