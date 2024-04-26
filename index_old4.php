<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Classes\Finder;

$newWorker = [
    [
        'name' => 'Yan',
        'email' => 'yan@gmail.com',
        'age' => 25,
        'profession' => 'Web Developer'
    ],
    [
        'name' => 'Max',
        'email' => 'max@gmail.com',
        'age' => 26,
        'profession' => 'Web Designer'
    ],
    [
        'name' => 'Robert',
        'email' => 'rober@gmail.com',
        'age' => 27,
        'profession' => 'Devops'
    ],
    [
        'name' => 'Sam',
        'email' => 'sam@gmail.com',
        'age' => 28,
        'profession' => 'Product manager'
    ]
];

$finder = new Finder();
$finder->create($newWorker);
$finder->save();

?>

<pre>
    <?php print_r($finder->all()); ?>
    <?php print_r($finder->find('rober@gmail.com')); ?>
</pre>
