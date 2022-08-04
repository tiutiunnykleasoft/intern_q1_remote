<?php
require_once "SortingTrophy.php";
$tests = [
    [
        'color' => 'blue',
        'length' => 10,
        'river' => true
    ],
    [
        'color' => 'blue',
        'length' => 12,
        'river' => false
    ],
    [
        'color' => 'yellow',
        'length' => 10,
        'river' => true
    ],
    [
        'color' => 'yellow',
        'length' => 10,
        'river' => false
    ],
    [
        'color' => 'yellow',
        'length' => 5,
        'river' => true
    ],
    [
        'color' => 'red',
        'length' => 7,
        'river' => true
    ],
/*    [
        'color' => blue,
        'length' => 20,
        'river' => false
    ]*/
];
foreach ($tests as $test)
{
    $fish = new \Ocean\SortingTrophy($test);
    print($fish->type."\n");
}
