<?php

require_once 'Parent.php';

class Dog extends Animal {
  public function eat() {
      echo "The dog is eating";
  }

  public function makeSound() {
      echo "The dog is barking";
  }
}

class Cat extends Animal {
  public function eat() {
      echo "The cat is eating";
  }

  public function makeSound() {
      echo "The cat is meowing";
  }
}

class Bird extends Animal {
  public function eat() {
      echo "The bird is eating";
  }

  public function makeSound() {
      echo "The bird is chirping";
  }
}

?>