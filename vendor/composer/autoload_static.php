<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6f08afb91e86b294982492db183603ff
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6f08afb91e86b294982492db183603ff::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6f08afb91e86b294982492db183603ff::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
