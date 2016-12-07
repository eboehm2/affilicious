<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit44247ac788218399e677a0e2cbc4764b
{
    public static $files = array (
        'c964ee0ededf28c96ebd9db5099ef910' => __DIR__ . '/..' . '/guzzlehttp/promises/src/functions_include.php',
        'a0edc8309cc5e1d60e3047b5df6b7052' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/functions_include.php',
        '154e0d165f5fe76e8e9695179d0a7345' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/functions.php',
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '74704c95e6224e3a13dba163dbbb87fa' => __DIR__ . '/..' . '/htmlburger/carbon-fields/carbon-fields.php',
        '1c3af1f7c867149c2eb8dfa733be2e98' => __DIR__ . '/..' . '/htmlburger/carbon-fields/core/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\DomCrawler\\' => 29,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
        ),
        'G' => 
        array (
            'GuzzleHttp\\Psr7\\' => 16,
            'GuzzleHttp\\Promise\\' => 19,
            'GuzzleHttp\\' => 11,
        ),
        'C' => 
        array (
            'Carbon_Fields\\' => 14,
        ),
        'A' => 
        array (
            'ApaiIO\\' => 7,
            'Affilicious\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\DomCrawler\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/dom-crawler',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'GuzzleHttp\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/psr7/src',
        ),
        'GuzzleHttp\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/promises/src',
        ),
        'GuzzleHttp\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/guzzle/src',
        ),
        'Carbon_Fields\\' => 
        array (
            0 => __DIR__ . '/..' . '/htmlburger/carbon-fields/core',
        ),
        'ApaiIO\\' => 
        array (
            0 => __DIR__ . '/..' . '/exeu/apai-io/src/ApaiIO',
        ),
        'Affilicious\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Pimple' => 
            array (
                0 => __DIR__ . '/..' . '/pimple/pimple/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit44247ac788218399e677a0e2cbc4764b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit44247ac788218399e677a0e2cbc4764b::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit44247ac788218399e677a0e2cbc4764b::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
