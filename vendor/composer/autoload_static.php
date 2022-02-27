<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit854c3486418fd2a95e6adbdb64969224
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MessageBird\\' => 12,
        ),
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MessageBird\\' => 
        array (
            0 => __DIR__ . '/..' . '/messagebird/php-rest-api/src/MessageBird',
        ),
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit854c3486418fd2a95e6adbdb64969224::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit854c3486418fd2a95e6adbdb64969224::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit854c3486418fd2a95e6adbdb64969224::$classMap;

        }, null, ClassLoader::class);
    }
}
