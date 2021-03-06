<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit93dab20551e623358b1307f588f9526a
{
    public static $prefixLengthsPsr4 = array (
        'w' => 
        array (
            'wcs\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'wcs\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit93dab20551e623358b1307f588f9526a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit93dab20551e623358b1307f588f9526a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
