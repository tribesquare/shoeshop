<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd4aab74b4136be1d324709bfa1618c6c
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Models\\' => 7,
        ),
        'C' => 
        array (
            'Controllers\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/models',
        ),
        'Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/controllers',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd4aab74b4136be1d324709bfa1618c6c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd4aab74b4136be1d324709bfa1618c6c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
