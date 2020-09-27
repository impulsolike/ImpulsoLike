<?php

namespace App\ImpulsoLike;

class GlobalConfig
{

    const CONFIG_FILE       = 'impulsolike_config';
    const DEFAULT_CONFIG    = [];

    public static function config($option = false)
    {
        return (!$option) ? '' : (
            static::getConfigFileOption($option) ?: static::getDefaultOption($option) ?: ''
        );
    }

    protected static function getConfigFile()
    {
        return config( static::CONFIG_FILE ) ?: [];
    }

    protected static function getConfigFileOption($option = false)
    {
        if(!$option) return '';

        $config = static::getConfigFile();

        return (isset($config[$option])) ? $config[$option] : '';
    }

    protected static function getDefaultOption($option = false)
    {
        if(!$option) return '';

        $config = static::DEFAULT_CONFIG;

        return (isset($config[$option])) ? $config[$option] : '';
    }
    
}