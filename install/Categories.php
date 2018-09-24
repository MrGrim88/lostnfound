<?php

namespace app\intall;

use app\assets\db;

class Categories {
  private $sql;

  public function Categories() {
    $sql = 'CREATE TABLE categories IF NOT EXISTS (
      category_id INT AUTO_INCREMENT,
      description VARCHAR(255) NOT NULL,
    )';
  }
}
