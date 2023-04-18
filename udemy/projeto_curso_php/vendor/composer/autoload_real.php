<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit040b8ff8695c0411549f9b3e90ca5528
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

        spl_autoload_register(array('ComposerAutoloaderInit040b8ff8695c0411549f9b3e90ca5528', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit040b8ff8695c0411549f9b3e90ca5528', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit040b8ff8695c0411549f9b3e90ca5528::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}