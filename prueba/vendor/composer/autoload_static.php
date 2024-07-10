<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7d13e93d057f9f79b4d0ad321e0d566b
{
    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'PHPTAL' => 
            array (
                0 => __DIR__ . '/..' . '/phptal/phptal/classes',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit7d13e93d057f9f79b4d0ad321e0d566b::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit7d13e93d057f9f79b4d0ad321e0d566b::$classMap;

        }, null, ClassLoader::class);
    }
}