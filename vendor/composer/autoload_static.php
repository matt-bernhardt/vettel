<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdf797c030cef4d2da0cb7a889ecc78e8
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Mjbernha\\Vettel\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Mjbernha\\Vettel\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Mjbernha\\Vettel\\AdminWidget' => __DIR__ . '/../..' . '/src/AdminWidget.php',
        'Mjbernha\\Vettel\\DisplayWidget' => __DIR__ . '/../..' . '/src/DisplayWidget.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdf797c030cef4d2da0cb7a889ecc78e8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdf797c030cef4d2da0cb7a889ecc78e8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdf797c030cef4d2da0cb7a889ecc78e8::$classMap;

        }, null, ClassLoader::class);
    }
}