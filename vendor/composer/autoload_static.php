<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit494d721126364791f6b5d23ac6db7dce
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit494d721126364791f6b5d23ac6db7dce::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit494d721126364791f6b5d23ac6db7dce::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit494d721126364791f6b5d23ac6db7dce::$classMap;

        }, null, ClassLoader::class);
    }
}