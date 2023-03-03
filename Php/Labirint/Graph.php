<?php

namespace Php\Labirint;

class Graph
{
    private array $graphPoints;

    public function addPointToGraph(GraphPoint $point): void
    {
        $this->graphPoints[] = $point;
    }

    public function findShort(int $startPoint, int $endPoint)
    {

    }

}