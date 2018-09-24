<?php

namespace app\models;

class Address {
  private $primary;
  private $secondary;
  private $tertiary;
  private $city;
  private $region;
  private $postal_code;
  private $country;

  public function Address($primary = '',$secondary = '',
    $tertiary = '',$city = '',$region = '',$postal_code = '',$country  = ''
  ) {
    $this->primary = $primary;
    $this->secondary = $secondary;
    $this->tertiary = $tertiary;
    $this->city = $city;
    $this->region = $region;
    $this->postal_code = $postal_code;
    $this->country = $country;
  }

  public function setPrimary($address) { $this->primary = $primary; }
  public function getPrimary() { return $this->primary; }
  public function setSecondary($address) { $this->secondary = $address; }
  public function getSecondary() { return $this->secondary; }
  public function setTertiary($address) { $this->tertiary = $address; }
  public function getTertiary() { return $this->tertiary; }
  public function setCity($address) { $this->city = $address; }
  public function getCity() { return $this->city; }
  public function setRegion($address) { $this->region = $address; }
  public function getRegion() { return $this->region; }
  public function setPostalCode($address) { $this->postal_code = $address; }
  public function getPostalCode() { return $this->postal_code; }
  public function setCountry($address) { $this->country = $address; }
  public function getCountry() { return $this->country; }

  public function get() {
    return [
      'primary' => $his->primary,
      'secondary' => $his->secondary,
      'tertiary' => $his->tertiary,
      'city' => $his->city,
      'postal_code' => $his->postal_code,
      'country' => $his->country,
    ];
  }
}
