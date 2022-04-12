<?php

namespace Nirbose\Collection;

class Collection {
    
    protected static array $items = [];

    /**
     * Add item to collection
     * 
     * @param string $key
     * @param mixed $item
     * @return void
     */
    public static function add(string $key, $item): void
    {
        self::$items[$key] = $item;
    }

    /**
     * Get item from collection
     * 
     * @param string $key
     * @return mixed
     */
    public static function get(string $key)
    {
        return self::$items[$key];
    }

    /**
     * Check if item exists in collection
     * 
     * @param string $key
     * @return bool
     */
    public static function has(string $key): bool
    {
        return isset(self::$items[$key]);
    }

    /**
     * Remove item from collection
     * 
     * @param string $key
     * @return void
     */
    public static function remove(string $key): void
    {
        unset(self::$items[$key]);
    }

    /**
     * Get all items from collection
     * 
     * @return array
     */
    public static function all(): array
    {
        return self::$items;
    }

    /**
     * First item in collection
     * 
     * @return mixed
     */
    public static function first(): mixed
    {
        return reset(self::$items);
    }

    /**
     * Last item in collection
     * 
     * @return mixed
     */
    public static function last(): mixed
    {
        return end(self::$items);
    }

    /**
     * Get all keys from collection
     * 
     * @return array
     */
    public static function keys(): array
    {
        return array_keys(self::$items);
    }

    /**
     * Get all values from collection
     * 
     * @return array
     */
    public static function values(): array
    {
        return array_values(self::$items);
    }

    /**
     * Get count of items in collection
     * 
     * @return int
     */
    public static function count(): int
    {
        return count(self::$items);
    }

    /**
     * Clear collection
     * 
     * @return void
     */
    public static function clear(): void
    {
        self::$items = [];
    }

    /**
     * Create Map instance
     * 
     * @return Map
     */
    public static function map(): Map
    {
        return new Map();
    }

}
