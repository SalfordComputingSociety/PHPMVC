<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbf617f8ed427f81cf279a5c36d7a47c2
{
    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/src',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->fallbackDirsPsr4 = ComposerStaticInitbf617f8ed427f81cf279a5c36d7a47c2::$fallbackDirsPsr4;

        }, null, ClassLoader::class);
    }
}