<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5e77c3740bbb4735dfca5c79615090bb
{
    public static $prefixesPsr0 = array (
        'L' => 
        array (
            'Lazyarea\\Dumper' => 
            array (
                0 => __DIR__ . '/../..' . '/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit5e77c3740bbb4735dfca5c79615090bb::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
