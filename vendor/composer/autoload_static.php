<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticIniteabafd004502f8a5759fb8a13720a069
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Marcelo\\Controllers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Marcelo\\Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Controllers',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticIniteabafd004502f8a5759fb8a13720a069::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticIniteabafd004502f8a5759fb8a13720a069::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
