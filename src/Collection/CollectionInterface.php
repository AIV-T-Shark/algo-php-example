<?php
namespace App\Collection;

interface CollectionInterface extends \Countable, \IteratorAggregate, \ArrayAccess, Arrayable
{
    public function all(): array;

    public function add($element);

    public function isEmpty();

    public function first();

    public function last();

    public function filter(\Closure $callback): CollectionInterface;

    public function map(\Closure $callback): CollectionInterface;

    public function pluck(array|string $columns): array;

    public function sortBy($column): CollectionInterface;
}