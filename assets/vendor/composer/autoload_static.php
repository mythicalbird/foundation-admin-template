<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit581ab8521a725d5f40d46b1ca422df3d
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Faker\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Faker\\' => 
        array (
            0 => __DIR__ . '/..' . '/fzaninotto/faker/src/Faker',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit581ab8521a725d5f40d46b1ca422df3d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit581ab8521a725d5f40d46b1ca422df3d::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
