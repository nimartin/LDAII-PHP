<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit15bc154c8e7481c57409b1b4f4cb7c45
{
    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'Negotiation\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Negotiation\\' => 
        array (
            0 => __DIR__ . '/..' . '/willdurand/negotiation/src/Negotiation',
        ),
    );

    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/src',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit15bc154c8e7481c57409b1b4f4cb7c45::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit15bc154c8e7481c57409b1b4f4cb7c45::$prefixDirsPsr4;
            $loader->fallbackDirsPsr4 = ComposerStaticInit15bc154c8e7481c57409b1b4f4cb7c45::$fallbackDirsPsr4;

        }, null, ClassLoader::class);
    }
}
