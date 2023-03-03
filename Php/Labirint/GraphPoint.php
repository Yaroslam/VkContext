<?php

namespace Php\Labirint;

class GraphPoint
{
    private GraphPoint $parent;
    private array $childs = ['top' => null, 'right' => null, 'bottom' => null, 'left' => null];
    private int $price;

    public function setChild(string $childType, GraphPoint $child): void
    {
        $this->childs[$childType] = $child;
    }

    public function getChild(string $childType): GraphPoint
    {
        return $this->childs[$childType];
    }

    public function setPrice(int $price): void
    {
        $this->price = $price;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function setParent(GraphPoint $parent): void
    {
        $this->parent = $parent;
    }

    public function getParent(): GraphPoint
    {
        return $this->parent;
    }




}