<?php

namespace app\models;

use app\models\Address;

class Person {
  private $first_name;
  private $middle;
  private $last_name;
  private $date_of_birth;
  private $height;
  private $weight;
  private $gender;
  private $skin_tone;
  private $address;

  public function Person() {
    $this->address = new Address();
  }
}
