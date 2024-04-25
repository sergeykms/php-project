<?php

require_once 'Classes/Workers.php';

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
    ]
];

Workers::create($newWorker);
Workers::save();

?>

<pre>
    <?php print_r(Workers::all()); ?>
</pre>
