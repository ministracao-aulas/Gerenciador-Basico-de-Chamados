<?php

namespace App\Libs;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Cache;
use Closure;

class CacheManager
{
    /**
     * Get a cache
     * Runs: Cache::get($cache_key, $default_value)
     *
     * @param string $cache_key
     * @param [type] $default_value
     * @return void
     */
    public static function getCache(string $cache_key, $default_value = null)
    {
        return Cache::get($cache_key, $default_value);
    }

    /**
      * Store a cache keyin session to future use
     *
     * @param string $cache_key
     * @param boolean $returns
     * @return void
     */
    public static function storeCacheKey(string $cache_key, bool $returns = null)
    {
        session([$cache_key => $cache_key]);

        if ($returns)
            return session($cache_key, '');
    }

    /**
     *  Alias to CacheManager::getCacheKeysByPrefix()
     *
     * @param string $key_prefix
     * @return void
     */
    public static function getCacheKeys(string $key_prefix)
    {
        return self::getCacheKeysByPrefix($key_prefix);
    }

    /**
     * Retunr all cache keys stored with the prefix
     *
     * @param string $key_prefix
     * @return void
     */
    public static function getCacheKeysByPrefix(string $key_prefix)
    {
        return Session::get($key_prefix, []) ?? [];
    }

    /**
     * Delete the cache by cache_key
     * - Runs: Cache::forget($cache_key);
     *
     * @param string $cache_key
     * @return void
     */
    public static function forgetCache(string $cache_key)
    {
        Cache::forget($cache_key);
    }

    /**
     * Alias to CacheManager::overwriteCache()
     *
     * @param string $cache_key
     * @param Closure $cache_closure
     * @param integer $cache_expires_in_secs
     * @param boolean $returns
     * @return void
     */
    public static function replaceCache(string $cache_key, Closure $cache_closure, int $cache_expires_in_secs, bool $returns = null)
    {
        return self::overwriteCache($cache_key, $cache_closure, $cache_expires_in_secs, $returns);
    }

    /**
     * Forget all caches with the prefix
     * - !! Note: To this work, the caches must have been stored by this class
     *
     * @param string $key_prefix
     * @return void
     */
    public static function forgetAllCacheWithPrefix(string $key_prefix)
    {
        $cache_keys = self::getCacheKeysByPrefix($key_prefix);

        foreach ($cache_keys as $key => $value)
        {
            $value = is_string($value) ? $value : ($value[0] ?? null);

            if($value)
            {
                self::forgetCache($value);
                Session::forget($value);
            }
        }
    }


    /**
     * Store cache with prefix
     *
     * @param string $key_prefix
     * @param string $cache_key
     * @param Closure $cache_closure
     * @param integer $cache_expires_in_secs
     * @param boolean $returns
     * @return void
     */
    public static function storeCacheWithPrefix(string $key_prefix, string $cache_key, Closure $cache_closure, int $cache_expires_in_secs, bool $returns = null)
    {
        $cache_key = self::storeCacheKey($key_prefix.'.'.$cache_key, true);

        return self::storeCache($cache_key, $cache_closure, $cache_expires_in_secs, $returns);
    }

    /**
     * Replace a value of cache if exists or create if not
     *
     * @param string $cache_key
     * @param Closure $cache_closure
     * @param integer $cache_expires_in_secs
     * @param boolean $returns
     * @return void
     */
    public static function overwriteCache(string $cache_key, Closure $cache_closure, int $cache_expires_in_secs, bool $returns = null)
    {
        self::forgetCache($cache_key);

        return self::storeCache($cache_key, $cache_closure, $cache_expires_in_secs, $returns);
    }

    /**
     *  Alias to CacheManager::storeCache()
     *
     * @param string $cache_key
     * @param Closure $cache_closure
     * @param integer $cache_expires_in_secs
     * @param boolean $returns
     * @return void
     */
    public static function storeCacheAndReturn(string $cache_key, Closure $cache_closure, int $cache_expires_in_secs)
    {
        return self::storeCache($cache_key, $cache_closure, $cache_expires_in_secs, true);
    }

    /**
     *  Alias to CacheManager::storeCache()
     *
     * @param string $cache_key
     * @param Closure $cache_closure
     * @param integer $cache_expires_in_secs
     * @param boolean $returns
     * @return void
     */
    public static function setCache(string $cache_key, Closure $cache_closure, int $cache_expires_in_secs, bool $returns = null)
    {
        return self::storeCache($cache_key, $cache_closure, $cache_expires_in_secs, $returns);
    }

    /**
     * Store a cache
     * Runs: Cache::remember($cache_key, $cache_expires_in_secs, $cache_closure);
     *
     * @param string $cache_key
     * @param Closure $cache_closure
     * @param integer $cache_expires_in_secs
     * @param boolean $returns
     * @return void
     */
    public static function storeCache(string $cache_key, Closure $cache_closure, int $cache_expires_in_secs, bool $returns = null)
    {
        $cache_key = self::storeCacheKey($cache_key, true);

        $stored_cache = Cache::remember($cache_key, $cache_expires_in_secs /*secs*/, $cache_closure);

        if($returns)
            return $stored_cache;
    }
}
