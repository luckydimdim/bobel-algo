<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb3cf19e190d0b29c900216df4cf0d925
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Bobel\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Bobel\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb3cf19e190d0b29c900216df4cf0d925::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb3cf19e190d0b29c900216df4cf0d925::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
