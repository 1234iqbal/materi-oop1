<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit254286066abc04fdc528b8b79b52aac7
{
    public static $prefixLengthsPsr4 = array (
        'k' => 
        array (
            'kodingacademy\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'kodingacademy\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit254286066abc04fdc528b8b79b52aac7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit254286066abc04fdc528b8b79b52aac7::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
