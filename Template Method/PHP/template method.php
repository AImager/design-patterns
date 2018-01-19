<?php

abstract class Role {
    abstract public function dress_tops();
    abstract public function dress_bottoms();
    abstract public function dress_shoes();

    final public function dress() {
        $this->dress_tops();
        $this->dress_bottoms();
        $this->dress_shoes();
    }
}

class Man extends Role {
    public function dress_tops() {
        echo "shirts";
    }

    public function dress_bottoms() {
        echo "pants";
    }

    public function dress_shoes() {
        echo "leather shoes";
    }
}

class Woman extends Role {
    public function dress_tops() {
        echo "skirts";
    }

    public function dress_bottoms() {
        echo "skirts";
    }

    public function dress_shoes() {
        echo "heels";
    }
}

$man = new Man;
$man->dress();