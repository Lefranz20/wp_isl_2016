<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc92b0f91bd5bc69356b926c567c4daee
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Abraham\\TwitterOAuth\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Abraham\\TwitterOAuth\\' => 
        array (
            0 => __DIR__ . '/..' . '/abraham/twitteroauth/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc92b0f91bd5bc69356b926c567c4daee::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc92b0f91bd5bc69356b926c567c4daee::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
