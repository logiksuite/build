<?php

namespace LogikSuite\Build;

use Exception;

class LogikBuild
{

    protected static $_aModules = null;
    protected static $_sProjectRootPath = null;

    public static function setProjectRootPath($sRootPath)
    {
        static::$_sProjectRootPath = $sRootPath;
    }

    public static function getProjectRootPath()
    {
        return static::$_sProjectRootPath;
    }

    public static function getInstalledModules(): array
    {

        if (static::$_aModules === null) {
            if (class_exists('\LogikSuite\Translation\TranslationModule')) {
                static::$_aModules[\LogikSuite\Translation\TranslationModule::class] = \LogikSuite\Translation\TranslationModule::getModuleInfo(["ProjectRootPath" => LogikBuild::getProjectRootPath()]);
            }
        }


        return static::$_aModules;
    }
}
