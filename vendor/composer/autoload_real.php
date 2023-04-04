<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitba1821c5ffd6a4cb30cb5bf991bf0d58
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

        spl_autoload_register(array('ComposerAutoloaderInitba1821c5ffd6a4cb30cb5bf991bf0d58', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitba1821c5ffd6a4cb30cb5bf991bf0d58', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitba1821c5ffd6a4cb30cb5bf991bf0d58::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
