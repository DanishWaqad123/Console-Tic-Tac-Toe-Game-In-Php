<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4075d4247d10374320d7d59a95b413e6
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4075d4247d10374320d7d59a95b413e6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4075d4247d10374320d7d59a95b413e6::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
