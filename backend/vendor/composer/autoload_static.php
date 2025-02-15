<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb75cc5c86d475b3da158bfb30386a75a
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Sebaez\\Backend\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Sebaez\\Backend\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'B' => 
        array (
            'Bramus' => 
            array (
                0 => __DIR__ . '/..' . '/bramus/router/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb75cc5c86d475b3da158bfb30386a75a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb75cc5c86d475b3da158bfb30386a75a::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitb75cc5c86d475b3da158bfb30386a75a::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitb75cc5c86d475b3da158bfb30386a75a::$classMap;

        }, null, ClassLoader::class);
    }
}
