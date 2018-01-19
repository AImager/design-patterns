<?php

function decorator($func) {
    echo("test");
    $func();
}

function test1() {
    echo "\n test1 \n";
}

class A {
	function test() {
		echo "sdf";
	}
}

decorator(test1);

$a = new A();
