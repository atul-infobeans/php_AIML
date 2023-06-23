<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use Phpml\Math\Distance\Euclidean;
use Phpml\Math\Statistic\Mean;

$dimensions = range(1, 300);
$pointsCount = 10000;
$metric = new Euclidean();

foreach ($dimensions as $dimension) {
    $distances = [];
    for ($i = 0; $i < $pointsCount; $i++) {
        $distances[] = $metric->distance(randomPoint($dimension), randomPoint($dimension));
    }

    echo Mean::arithmetic($distances) . ';' . min($distances) . PHP_EOL;
}

function randomPoint(int $dimensions): array
{
    return array_map(function($index){
        return random_int(1, 10);
    }, range(1, $dimensions));
}