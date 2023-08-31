<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfb2b6ac9c680de0d2f8b66dfc992fc82
{
    public static $prefixLengthsPsr4 = array (
        'v' => 
        array (
            'view\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'view\\' => 
        array (
            0 => __DIR__ . '/../..' . '/views',
        ),
    );

    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/app',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfb2b6ac9c680de0d2f8b66dfc992fc82::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfb2b6ac9c680de0d2f8b66dfc992fc82::$prefixDirsPsr4;
            $loader->fallbackDirsPsr4 = ComposerStaticInitfb2b6ac9c680de0d2f8b66dfc992fc82::$fallbackDirsPsr4;
            $loader->classMap = ComposerStaticInitfb2b6ac9c680de0d2f8b66dfc992fc82::$classMap;

        }, null, ClassLoader::class);
    }
}
