<?php

$a = 1;

$test = function () use ($a) {
    echo $a;
};

$test();

