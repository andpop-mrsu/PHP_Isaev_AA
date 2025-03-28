<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf03ff27c58473c9028338f2603a7bad7
{
    public static $files = array (
        'be01b9b16925dcb22165c40b46681ac6' => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib/cli/cli.php',
        'c41645684599f13a8460879158a8323f' => __DIR__ . '/../..' . '/src/Controller.php',
        'f596cca94f459c7d4975a790186bb0b4' => __DIR__ . '/../..' . '/src/View.php',
    );

    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'IsaevAndrey\\prime\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'IsaevAndrey\\prime\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'c' => 
        array (
            'cli' => 
            array (
                0 => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf03ff27c58473c9028338f2603a7bad7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf03ff27c58473c9028338f2603a7bad7::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitf03ff27c58473c9028338f2603a7bad7::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitf03ff27c58473c9028338f2603a7bad7::$classMap;

        }, null, ClassLoader::class);
    }
}
