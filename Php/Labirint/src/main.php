<?php

require '../vendor/autoload.php';
require 'Dijkstra.php';
require 'Graph.php';
require 'Node.php';



use Php\Labirint\src\Dijkstra;
use Php\Labirint\src\Graph;
use Php\Labirint\src\Node;

function labirintToGraph($labirint, $height, $width): array
{
    $graph = [];
    for($i = 0; $i<$height; $i++)
    {
        for($j=0; $j<$width; $j++)
        {
            if ($labirint[$i][$j] != 0)
            {
                if ($i == 0)
                {
                    if ($j == 0)
                    {
                        if ($labirint[$i+1][$j] != 0){
                            $graph = addNodeToGraph($graph, $i . $j, ($i+1) . $j, $labirint[$i+1][$j]);
                        }
                        if ($labirint[$i][$j+1] != 0){
                            $graph = addNodeToGraph($graph, $i . $j, $i . ($j+1), $labirint[$i][$j+1]);
                        }
                    } else if ($j == $width-1) {
                        if ($labirint[$i+1][$j] != 0){
                            $graph = addNodeToGraph($graph, $i . $j, ($i+1) . $j, $labirint[$i+1][$j]);
                        }
                        if ($labirint[$i][$j-1] != 0){
                            $graph = addNodeToGraph($graph, $i . $j, $i . ($j-1), $labirint[$i][$j-1]);
                        }


                    } else {
                        if ($labirint[$i+1][$j] != 0){
                            $graph = addNodeToGraph($graph, $i . $j, ($i+1) . $j, $labirint[$i+1][$j]);
                        }
                        if ($labirint[$i][$j+1] != 0){
                            $graph = addNodeToGraph($graph, $i . $j, $i . ($j+1), $labirint[$i][$j+1]);
                        }
                        if ($labirint[$i][$j-1] != 0){
                            $graph = addNodeToGraph($graph, $i . $j, $i . ($j-1), $labirint[$i][$j-1]);
                        }
                    }

                } else if ($i == $height-1) {
                    if ($j == 0)
                    {
                        if ($labirint[$i][$j+1] != 0){
                            $graph = addNodeToGraph($graph, $i . $j, $i . ($j+1), $labirint[$i][$j+1]);
                        }
                        if ($labirint[$i-1][$j] != 0){
                            $graph = addNodeToGraph($graph, $i . $j, ($i-1) . $j, $labirint[$i-1][$j]);
                        }

                    } else if ($j == $width-1) {
                        if ($labirint[$i-1][$j] != 0){
                            $graph = addNodeToGraph($graph, $i . $j, ($i-1) . $j, $labirint[$i-1][$j]);
                        }
                        if ($labirint[$i][$j-1] != 0){
                            $graph = addNodeToGraph($graph, $i . $j, $i . ($j-1), $labirint[$i][$j-1]);
                        }

                    } else {
                        if ($labirint[$i-1][$j] != 0){
                            $graph = addNodeToGraph($graph, $i . $j, ($i-1) . $j, $labirint[$i-1][$j]);
                        }
                        if ($labirint[$i][$j+1] != 0){
                            $graph = addNodeToGraph($graph, $i . $j, $i . ($j+1), $labirint[$i][$j+1]);
                        }
                        if ($labirint[$i][$j-1] != 0){
                            $graph = addNodeToGraph($graph, $i . $j, $i . ($j-1), $labirint[$i][$j-1]);
                        }

                    }
                } else {
                    if ($j == 0)
                    {
                        if ($labirint[$i+1][$j] != 0){
                            $graph = addNodeToGraph($graph, $i . $j, ($i+1) . $j, $labirint[$i+1][$j]);
                        }
                        if ($labirint[$i][$j+1] != 0){
                            $graph = addNodeToGraph($graph, $i . $j, $i . ($j+1), $labirint[$i][$j+1]);
                        }


                    } else if ($j == $width-1) {
                        if ($labirint[$i+1][$j] != 0){
                            $graph = addNodeToGraph($graph, $i . $j, ($i+1) . $j, $labirint[$i+1][$j]);
                        }

                        if ($labirint[$i][$j-1] != 0){
                            $graph = addNodeToGraph($graph, $i . $j, $i . ($j-1), $labirint[$i][$j-1]);
                        }


                    } else {
                        if ($labirint[$i+1][$j] != 0){
                            $graph = addNodeToGraph($graph, $i . $j, ($i+1) . $j, $labirint[$i+1][$j]);
                        }

                        if ($labirint[$i][$j-1] != 0){
                            $graph = addNodeToGraph($graph, $i . $j, $i . ($j-1), $labirint[$i][$j-1]);
                        }

                        if ($labirint[$i-1][$j] != 0){
                            $graph = addNodeToGraph($graph, $i . $j, ($i-1) . $j, $labirint[$i-1][$j]);
                        }

                        if ($labirint[$i][$j+1] != 0){
                            $graph = addNodeToGraph($graph, $i . $j, $i . ($j+1), $labirint[$i][$j+1]);
                        }

                    }
                }
            }
        }
    }
    return $graph;
}


function addNodeToGraph($graph, $from, $to, $nodePrice): array
{
    $graph[] = ['from' => $from, 'to' => $to, 'price' => (int)$nodePrice];
    return $graph;
}

function inputLabirint(int $height, int $width): array
{
    $labirint = [];
    for ($i=0; $i<$height; $i++)
    {
        $labirintLine = str_split(readline("Введите строку лабиринта без разделителей "));
        while (count($labirintLine) > $width)
        {
            $labirintLine = str_split(readline("Вы ввели неверную строку. ведите строку лабиринта без разделителей "));
        }
        $labirint[] = $labirintLine;
    }
    return $labirint;
}

function printShortestPath($fromName, $toName, $routes) {
    if($fromName == $toName){
        echo "Вход совпадает с выходом";
    } else {
        $graph = new Graph();
        foreach ($routes as $route) {
            $from = $route['from'];
            $to = $route['to'];
            $price = $route['price'];
            if (!array_key_exists($from, $graph->getNodes())) {
                $from_node = new Node($from);
                $graph->add($from_node);
            } else {
                $from_node = $graph->getNode($from);
            }
            if (!array_key_exists($to, $graph->getNodes())) {
                $to_node = new Node($to);
                $graph->add($to_node);
            } else {
                $to_node = $graph->getNode($to);
            }
            $from_node->connect($to_node, $price);
        }

        $g = new Dijkstra($graph);
        $start_node = $graph->getNode($fromName);
        $end_node = $graph->getNode($toName);
        $g->setStartingNode($start_node);
        $g->setEndingNode($end_node);
        echo "From: " . $start_node->getId() . "\n";
        echo "To: " . $end_node->getId() . "\n";
        echo "Route: " . $g->getLiteralShortestPath() . "\n";
        echo "Total: " . $g->getDistance() . "\n";
    }
}


$height = (int)readline("Введите высоту лабиринта ");
$width = (int)readline("Введите ширину лабиринта ");

$labirint = inputLabirint($height, $width);

$start = readline("Введите точку входа в лабиринт в формате yx без разделителей ");
$finish = readline("Введите точку выхода из лабиринта в формате yx без разделителей ");

$graph = labirintToGraph($labirint, $height, $width);

printShortestPath($start, $finish, $graph);








