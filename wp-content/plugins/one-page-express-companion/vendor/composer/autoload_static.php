<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7dbe8d26afadbe4c40fe7960ee64e734
{
    public static $prefixLengthsPsr4 = array (
        'O' => 
        array (
            'OnePageExpress\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'OnePageExpress\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7dbe8d26afadbe4c40fe7960ee64e734::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7dbe8d26afadbe4c40fe7960ee64e734::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
