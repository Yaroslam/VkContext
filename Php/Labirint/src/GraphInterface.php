<?php

namespace Php\Labirint\src;

interface GraphInterface
{
    public function add(NodeInterface $node);
    public function getNode($id);
    public function getNodes();
}