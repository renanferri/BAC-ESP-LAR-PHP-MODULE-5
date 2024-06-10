<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6fdeda32f58abc3fb8d3a591b8945ea1
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Container\\' => 14,
        ),
        'B' => 
        array (
            'Beerandcode\\Modulo5\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'Beerandcode\\Modulo5\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit6fdeda32f58abc3fb8d3a591b8945ea1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6fdeda32f58abc3fb8d3a591b8945ea1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6fdeda32f58abc3fb8d3a591b8945ea1::$classMap;

        }, null, ClassLoader::class);
    }
}