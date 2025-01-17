<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit7d13e93d057f9f79b4d0ad321e0d566b
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInit7d13e93d057f9f79b4d0ad321e0d566b', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit7d13e93d057f9f79b4d0ad321e0d566b', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit7d13e93d057f9f79b4d0ad321e0d566b::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
