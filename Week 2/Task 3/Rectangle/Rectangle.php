<?php

class Rectangle {

  public $length;
  public $width;

  public function __construct($length, $width) {
    $this->length = $length;
    $this->width = $width;
}

public function getArea() {
  return $this->length * $this->width;
}

public function getPerimeter() {
  return 2 * ($this->length + $this->width);
}

public function getLength() {
  return $this->length;
}

public function getWidth() {
  return $this->width;
}
}