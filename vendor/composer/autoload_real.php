<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitfe1468cb9cc237d1a5df39c1b86fdd7a
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

        spl_autoload_register(array('ComposerAutoloaderInitfe1468cb9cc237d1a5df39c1b86fdd7a', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitfe1468cb9cc237d1a5df39c1b86fdd7a', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitfe1468cb9cc237d1a5df39c1b86fdd7a::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
