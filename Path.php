<?php

class Path
{
    public $currentPath;

    function __construct(string $path)
    {
        $this->currentPath = $path;
    }

    public function cd(string $newPath) : void
    {

    }
}

$path = new Path('/a/b/c/d');
$path->cd('../x');
echo $path->currentPath;