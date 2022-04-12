<?php

namespace Nirbose\Collection;

class Map extends Collection
{
    /**
     * Execute callback on each item in collection
     * 
     * @param callable $callback
     * @return void
     */
    public static function each(callable $callback): void
    {
        foreach (self::$items as $key => $item) {
            $callback($key, $item);
        }
    }

    /**
     * Filter collection by callback
     * 
     * @param callable $callback
     * @return array
     */
    public static function filter(callable $callback): array
    {
        $filtered = [];

        foreach (self::$items as $key => $item) {
            if ($callback($key, $item)) {
                $filtered[$key] = $item;
            }
        }

        return $filtered;
    }

    /**
     * Reduce collection by callback
     * 
     * @param callable $callback
     * @param mixed $initial
     * @return mixed
     */
    public static function reduce(callable $callback, $initial = null)
    {
        $reduced = $initial;

        foreach (self::$items as $key => $item) {
            $reduced = $callback($reduced, $key, $item);
        }

        return $reduced;
    }

    /**
     * Find item in collection by callback
     * 
     * @param callable $callback
     * @return mixed
     */
    public static function find(callable $callback)
    {
        foreach (self::$items as $key => $item) {
            if ($callback($key, $item)) {
                return $item;
            }
        }

        return null;
    }

    /**
     * Find key in collection by callback
     * 
     * @param callable $callback
     * @return mixed
     */
    public static function findKey(callable $callback)
    {
        foreach (self::$items as $key => $item) {
            if ($callback($key, $item)) {
                return $key;
            }
        }

        return null;
    }

    /**
     * Find value in collection by callback
     * 
     * @param callable $callback
     * @return mixed
     */
    public static function findValue(callable $callback)
    {
        foreach (self::$items as $key => $item) {
            if ($callback($key, $item)) {
                return $item;
            }
        }

        return null;
    }

    /**
     * Check if collection contains item by callback
     * 
     * @param callable $callback
     * @return bool
     */
    public static function contains(callable $callback): bool
    {
        foreach (self::$items as $key => $item) {
            if ($callback($key, $item)) {
                return true;
            }
        }

        return false;
    }

}
