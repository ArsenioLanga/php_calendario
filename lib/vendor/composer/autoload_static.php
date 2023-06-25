<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6500fa410719a2f96e83189a828d8d20
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Models\\' => 7,
        ),
        'C' => 
        array (
            'Classes\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/../model',
        ),
        'Classes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/../class',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6500fa410719a2f96e83189a828d8d20::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6500fa410719a2f96e83189a828d8d20::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6500fa410719a2f96e83189a828d8d20::$classMap;

        }, null, ClassLoader::class);
    }
}