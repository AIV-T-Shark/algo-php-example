<?php
namespace App\Collection;

class ArrayCollection implements CollectionInterface
{
    private array $elements;

    public function __construct(array $elements = [])
    {
        $this->elements = $elements;
    }

    protected function createFrom(array $elements)
    {
        return new static($elements);
    }

    public function toArray()
    {
        // TODO: Implement toArray() method.
    }

    public function all(): array
    {
        // TODO: Implement all() method.
    }

    public function add($element)
    {
        // TODO: Implement add() method.
    }

    public function isEmpty()
    {
        // TODO: Implement isEmpty() method.
    }

    public function first()
    {
        // TODO: Implement first() method.
    }

    public function last()
    {
        // TODO: Implement last() method.
    }

    public function filter(\Closure $callback): CollectionInterface
    {
        // TODO: Implement filter() method.
    }

    public function map(\Closure $callback): CollectionInterface
    {
        // TODO: Implement map() method.
    }

    public function pluck(array|string $columns): array
    {
        // TODO: Implement pluck() method.
    }

    public function sortBy($column): CollectionInterface
    {
        // TODO: Implement sortBy() method.
    }

    public function getIterator()
    {
        // TODO: Implement getIterator() method.
    }

    public function offsetExists(mixed $offset)
    {
        // TODO: Implement offsetExists() method.
    }

    public function offsetGet(mixed $offset)
    {
        // TODO: Implement offsetGet() method.
    }

    public function offsetSet(mixed $offset, mixed $value)
    {
        // TODO: Implement offsetSet() method.
    }

    public function offsetUnset(mixed $offset)
    {
        // TODO: Implement offsetUnset() method.
    }

    public function count()
    {
        // TODO: Implement count() method.
    }
}