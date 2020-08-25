<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcb058bf62ef49881c566c1f7217b5453
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcb058bf62ef49881c566c1f7217b5453::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcb058bf62ef49881c566c1f7217b5453::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
