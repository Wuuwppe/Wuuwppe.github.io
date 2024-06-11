<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc7c16aded5d2c8aa543b5dfd47547bbe
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Ademti\\SayWhat\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Ademti\\SayWhat\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitc7c16aded5d2c8aa543b5dfd47547bbe::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc7c16aded5d2c8aa543b5dfd47547bbe::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc7c16aded5d2c8aa543b5dfd47547bbe::$classMap;

        }, null, ClassLoader::class);
    }
}
