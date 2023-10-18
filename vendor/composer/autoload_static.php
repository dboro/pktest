<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5d63751389926d11a0893c763a3ec7d8
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Dboro\\Pktest\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Dboro\\Pktest\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5d63751389926d11a0893c763a3ec7d8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5d63751389926d11a0893c763a3ec7d8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5d63751389926d11a0893c763a3ec7d8::$classMap;

        }, null, ClassLoader::class);
    }
}
