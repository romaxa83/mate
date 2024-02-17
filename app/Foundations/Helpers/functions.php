<?php

if (!function_exists('logger_info')) {

    function logger_info($message, array $context = [], bool $important = true)
    {
        if(config('logging.channels.eyes.enable') || $important){
            Illuminate\Support\Facades\Log::channel('eyes')->info($message, $context);
        }
    }
}

if (!function_exists('json_to_array')) {
    function json_to_array(?string $jsonString = ''): array
    {
        return json_decode($jsonString, true, 512, JSON_THROW_ON_ERROR) ?: [];
    }
}

if (!function_exists('array_to_json')) {
    function array_to_json(array $array, $options = 0): string
    {
        return json_encode($array, JSON_THROW_ON_ERROR | $options);
    }
}

if (!function_exists('std_to_array')) {
    function std_to_array(object $std): array
    {
        return json_decode(json_encode($std), true);
    }
}

if (!function_exists('hash_data')) {

    function hash_data(array|string|int $data): string
    {
        if(is_array($data)){
            $data = json_encode($data);
        }

        return md5($data);
    }
}

if (!function_exists('cache_key')) {

    function cache_key(string $key, ...$data): string
    {
        return $key .'_'. hash_data($data);
    }
}

if (!function_exists('phone_clear')) {

    function phone_clear(string $phone): string
    {
        return str_replace(['+', '-', ' ', '.', '(', ')'], '', $phone);
    }
}


if (!function_exists('escape_like')) {
    /**
     * @param $string
     * @return mixed
     */
    function escape_like($string)
    {
        $search = ['%', '_'];
        $replace = ['\%', '\_'];
        return str_replace($search, $replace, $string);
    }
}

if (!function_exists('remove_underscore')) {

    function remove_underscore(string $str): string
    {
        return str_replace('_', ' ', $str);
    }
}


if (!function_exists('byte_to_kb')) {
    function byte_to_kb(int $size)
    {
        return round($size / 1024);
    }
}

if (!function_exists('media_hash_file')) {
    function media_hash_file(string $filename, $extension): string
    {
        return md5($filename . microtime()) . '.' . $extension;
    }
}

if (!function_exists('to_bool')) {

    function to_bool($value): ?bool
    {
        return filter_var($value, FILTER_VALIDATE_BOOLEAN,  FILTER_NULL_ON_FAILURE);
    }
}

if (!function_exists('is_testing')) {
    function is_testing(): bool
    {
        return config('app.env') === 'testing';
    }
}
