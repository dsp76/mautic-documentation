<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit089ad2d043aed688879945cd4bcae11c
{
    public static $files = array (
        '023d27dca8066ef29e6739335ea73bad' => __DIR__ . '/..' . '/symfony/polyfill-php70/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Php70\\' => 23,
            'Symfony\\Contracts\\Service\\' => 26,
            'Symfony\\Contracts\\Cache\\' => 24,
            'Symfony\\Component\\VarExporter\\' => 30,
            'Symfony\\Component\\ExpressionLanguage\\' => 37,
            'Symfony\\Component\\Cache\\' => 24,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'Psr\\Container\\' => 14,
            'Psr\\Cache\\' => 10,
        ),
        'A' => 
        array (
            'AdminAddonUserManager\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Php70\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php70',
        ),
        'Symfony\\Contracts\\Service\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/service-contracts',
        ),
        'Symfony\\Contracts\\Cache\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/cache-contracts',
        ),
        'Symfony\\Component\\VarExporter\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/var-exporter',
        ),
        'Symfony\\Component\\ExpressionLanguage\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/expression-language',
        ),
        'Symfony\\Component\\Cache\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/cache',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'Psr\\Cache\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/cache/src',
        ),
        'AdminAddonUserManager\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'ArithmeticError' => __DIR__ . '/..' . '/symfony/polyfill-php70/Resources/stubs/ArithmeticError.php',
        'AssertionError' => __DIR__ . '/..' . '/symfony/polyfill-php70/Resources/stubs/AssertionError.php',
        'DivisionByZeroError' => __DIR__ . '/..' . '/symfony/polyfill-php70/Resources/stubs/DivisionByZeroError.php',
        'Error' => __DIR__ . '/..' . '/symfony/polyfill-php70/Resources/stubs/Error.php',
        'ParseError' => __DIR__ . '/..' . '/symfony/polyfill-php70/Resources/stubs/ParseError.php',
        'SessionUpdateTimestampHandlerInterface' => __DIR__ . '/..' . '/symfony/polyfill-php70/Resources/stubs/SessionUpdateTimestampHandlerInterface.php',
        'TypeError' => __DIR__ . '/..' . '/symfony/polyfill-php70/Resources/stubs/TypeError.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit089ad2d043aed688879945cd4bcae11c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit089ad2d043aed688879945cd4bcae11c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit089ad2d043aed688879945cd4bcae11c::$classMap;

        }, null, ClassLoader::class);
    }
}