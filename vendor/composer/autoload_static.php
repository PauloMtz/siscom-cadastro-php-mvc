<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit48d2371bdc53c7798a2a3b42c1171083
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit48d2371bdc53c7798a2a3b42c1171083::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit48d2371bdc53c7798a2a3b42c1171083::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
