<?php
$path = realpath(dirname(__FILE__));
require "$path/termcolor.php";
$a = `php $path/termcolor.php`;
$b = `python $path/termcolor.py`;
if ($a === $b) {
    tcechon("Tests passed.", 'green');
} else {
    tcechon("Tests failed.", 'red');
    tcechon("### Output php ###");
    var_dump($a);
    echo "\n";
    tcechon("### Output python ###");
    var_dump($b);
}
