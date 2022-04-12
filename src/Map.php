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

}
