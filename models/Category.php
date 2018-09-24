<?php

namespace app\models;

class Category {
  private $id;
  private $category_name;

  public function setId($id) { $this->id = $id; }
  public function getId() { return $this->id; }
  public function setCategoryName($name) {$this->category_name = $name; }
  public function getCategoryName() { return $this->category_name; }
  public function Category($id = 0, $name = '') {
      $this->id = $id;
      $this->category_name = ($name != '') ? $name : "";
  }
  public function get() {
    return [
      'id' => $this->id,
      'name' => $his->category,
    ];
  }
}
