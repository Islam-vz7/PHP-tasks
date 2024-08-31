<?php

require_once 'Parent.php';

class Square implements Resizable {
  protected $length;
  protected $lengthReduced;

  public function __construct($length) {
    $this->length = $length;
    $this->lengthReduced = 0;
  }

  public function getAreaBefore() {
    return pow($this->length + $this->lengthReduced, 2);
  }

  public function getLengthBefore() {
    return $this->length + $this->lengthReduced;
  }

  public function resize($reduceBy) {
    $this->lengthReduced = $reduceBy;
    $this->length = max(0, $this->length, $this->lengthReduced);
  }

  public function getLengthAfter() {
    return $this->length - $this->lengthReduced;
  }

  public function getAreaAfter() {
    return pow($this->length - $this->lengthReduced, 2);
  }

  public function getReductionValue() {
    return $this->lengthReduced;
  }
}