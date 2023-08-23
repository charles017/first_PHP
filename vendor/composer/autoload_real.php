<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit56e76b3db351a1c1ac7336cd73ab2ffb
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

        spl_autoload_register(array('ComposerAutoloaderInit56e76b3db351a1c1ac7336cd73ab2ffb', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit56e76b3db351a1c1ac7336cd73ab2ffb', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit56e76b3db351a1c1ac7336cd73ab2ffb::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
