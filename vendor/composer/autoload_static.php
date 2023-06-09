<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5602dafb3906854c86ba2c81271ae12e
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Diamancia\\App\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Diamancia\\App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5602dafb3906854c86ba2c81271ae12e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5602dafb3906854c86ba2c81271ae12e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5602dafb3906854c86ba2c81271ae12e::$classMap;

        }, null, ClassLoader::class);
    }
}
