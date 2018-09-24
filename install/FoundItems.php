<?php

namespace app\install;

class FoundItems {
  private $sql;

  public function FoundItems() {
    $sql = "CREATE TABLE found_items(
      id INT AUTO_INCREMENT,
      category INT NOT NULL DEFAULT 1,
      item_name VARCHAR(255) NOT NULL,
      description VARCHAR(2000),
      estimated_value DECIMAL(12,2) DEFAULT 0.00
    );";
  }
}
